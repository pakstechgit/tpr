<div class="px-15px px-lg-25px">

    <div class="aiz-titlebar text-left mt-2 mb-3">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1 class="h3">All Flash Deals</h1>
            </div>
            <div class="col-md-6 text-md-right">
                <a href="<?=site_url('admins/marketings/new_flash_deals')?>" class="btn btn-circle btn-info">
                    <span>Create New Flash Deal</span>
                </a>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h5 class="mb-0 h6">Flash deals</h5>
            <div class="pull-right clearfix">
                <form class="" id="sort_flash_deals" action="" method="GET">
                    <div class="box-inline pad-rgt pull-left">
                        <div class="" style="min-width: 200px;">
                            <input type="text" class="form-control" id="search" name="search"
                                placeholder="Type name &amp; Enter">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="card-body">
            <table class="table aiz-table mb-0">
                <thead>
                    <tr>
                        <th data-breakpoints="lg">#</th>
                        <th>Title</th>
                        <th data-breakpoints="lg">Banner</th>
                        <th data-breakpoints="lg">Start Date</th>
                        <th data-breakpoints="lg">End Date</th>
                        <th data-breakpoints="lg">Status</th>
                        <th data-breakpoints="lg">Featured</th>
                        <th data-breakpoints="lg">Page Link</th>
                        <th class="text-right">Options</th>
                    </tr>
                </thead>
                <tbody>
<?php foreach($FLASH_DEALS as $deal) : ?>
            <tr>
                <td><?=$deal->id?></td>
                <td><?=$deal->title?></td>
                <td><img src="<?=base_url($deal->banner_image)?>"
                        alt="banner" class="h-50px"></td>
                <td><?=date('Y-m-d H:i:s',$deal->start_date)?></td>
                <td><?=date('Y-m-d H:i:s',$deal->end_date)?></td>
                <td>
                    <label class="aiz-switch aiz-switch-success mb-0">
                        <input onchange="update_flash_deal_status(this)" value="<?=$deal->id?>" <?=$deal->status==1? 'checked' : ''?>  type="checkbox">
                        <span class="slider round"></span>
                    </label>
                </td>
                <td>
                    <label class="aiz-switch aiz-switch-success mb-0">
                        <input onchange="update_flash_deal_feature(this)" value="<?=$deal->id?>" <?=$deal->featured==1? 'checked' : ''?> type="checkbox">
                        <span class="slider round"></span>
                    </label>
                </td>
                <td><?=site_url('flash-deals/'.$deal->slug)?></td>
                <td class="text-right">
                    <a class="btn btn-soft-primary btn-icon btn-circle btn-sm"
                        href="<?=base_url('admins/marketings/edit_flash_deal/'.$deal->id)?>" title="Edit">
                        <i class="las la-edit"></i>
                    </a>
                    <a href="#" class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete"
                        data-href="https://favori-dev.technos.app/admin/flash_deals/destroy/1" title="Delete">
                        <i class="las la-trash"></i>
                    </a>
                </td>
            </tr>
<?php endforeach?>
                </tbody>
            </table>
            <div class="clearfix">
                <div class="pull-right">

                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?=base_url('assets/js/vendors.js')?>"></script>
<script src="<?=base_url('assets/js/aiz-core.js')?>"></script>
<script type="text/javascript">
        function update_flash_deal_status(el){
            if(el.checked){
                var status = 1;
            }
            else{
                var status = 0;
            }
            $.post("<?=site_url('admins/marketings/update_status')?>", {_token:AIZ.data.csrf,table:'tbl_flash_deals', id:el.value, status:status}, function(data){
                console.log(data);
                if(data == 1){
                    // location.reload();
                }
                else{
                    AIZ.plugins.notify('danger', 'Something went wrong!');
                }
            });
        }
        function update_flash_deal_feature(el){
            if(el.checked){
                var featured = 1;
            }
            else{
                var featured = 0;
            }
            $.post("<?=site_url('admins/marketings/update_featured')?>", {_token:AIZ.data.csrf,table:'tbl_flash_deals', id:el.value, featured:featured}, function(data){
                if(data == 1){
                    location.reload();
                }
                else{
                    AIZ.plugins.notify('danger', 'Something went wrong!');
                }
            });
        }
</script>
