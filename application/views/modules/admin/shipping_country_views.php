<div class="px-15px px-lg-25px">

    <div class="card">
        <form class="" id="" action="" method="GET">
            <div class="card-header row gutters-5">
                <div class="col text-center text-md-left">
                    <h5 class="mb-md-0 h6">Countries</h5>
                </div>
                <div class="col-md-3">
                    <input type="text" class="form-control" id="sort_country" name="sort_country"
                        placeholder="Type country name">
                </div>
                <div class="col-md-1">
                    <button class="btn btn-primary" type="submit">Filter</button>
                </div>
            </div>
        </form>
        <div class="card-body">
            <table class="table aiz-table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th width="10%">#</th>
                        <th>Name</th>
                        <th data-breakpoints="lg">Code</th>
                        <th>Show/Hide</th>
                    </tr>
                </thead>
                <tbody>
<?php foreach($COUNTRIES as $country): ?>
                    <tr>
                        <td><?=$country->id?></td>
                        <td><?=$country->name?></td>
                        <td><?=$country->code?></td>
                        <td>
                            <label class="aiz-switch aiz-switch-success mb-0">
                                <input onchange="update_status(this)" value="<?=$country->id?>" type="checkbox" <?=$country->status==1 ? 'checked' : '' ?>>
                                <span class="slider round"></span>
                            </label>
                        </td>
                    </tr>
<?php endforeach ?>
                </tbody>
            </table>
            <div class="aiz-pagination">
                <?php echo $links ?>
            </div>
        </div>
    </div>
</div>
<script src="<?=base_url('assets/js/vendors.js')?>"></script>
<script src="<?=base_url('assets/js/aiz-core.js')?>"></script>
<script type="text/javascript">
function update_status(el) {
    if (el.checked) {
        var status = 1;
    } else {
        var status = 0;
    }
    $.post("<?=site_url('admins/shippings/update_country_status')?>",
       {_token:AIZ.data.csrf,
        id: el.value,
        status: status
    }, function(data) {
        if (data == 1) {
            AIZ.plugins.notify('success', 'Country status updated successfully');
        } else {
            AIZ.plugins.notify('danger', 'Something went wrong!');
        }
    });
}
</script>
<script type="text/javascript">

function menuSearch() {
    var filter, item;
    filter = $("#menu-search").val().toUpperCase();
    items = $("#main-menu").find("a");
    items = items.filter(function(i, item) {
        if ($(item).find(".aiz-side-nav-text")[0].innerText.toUpperCase().indexOf(filter) > -1 && $(item).attr(
                'href') !== '#') {
            return item;
        }
    });

    if (filter !== '') {
        $("#main-menu").addClass('d-none');
        $("#search-menu").html('')
        if (items.length > 0) {
            for (i = 0; i < items.length; i++) {
                const text = $(items[i]).find(".aiz-side-nav-text")[0].innerText;
                const link = $(items[i]).attr('href');
                $("#search-menu").append(
                    `<li class="aiz-side-nav-item"><a href="${link}" class="aiz-side-nav-link"><i class="las la-ellipsis-h aiz-side-nav-icon"></i><span>${text}</span></a></li`
                    );
            }
        } else {
            $("#search-menu").html(
                `<li class="aiz-side-nav-item"><span	class="text-center text-muted d-block">Nothing found</span></li>`
                );
        }
    } else {
        $("#main-menu").removeClass('d-none');
        $("#search-menu").html('')
    }
}
</script>