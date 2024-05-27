<div class="px-15px px-lg-25px">
    <div class="aiz-titlebar text-left mt-2 mb-3">
        <div class="row align-items-center">
            <div class="col-md-12">
                <h1 class="h3">All Cities</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-7">
            <div class="card">
                <form class="" id="sort_cities" action="" method="GET">
                    <div class="card-header row gutters-5">
                        <div class="col text-center text-md-left">
                            <h5 class="mb-md-0 h6">Cities</h5>
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" id="sort_state" name="sort_city"
                                placeholder="Type state name">
                        </div>
                        <div class="col-md-3">
                            <select class="form-control aiz-selectpicker" data-live-search="true" id="sort_country"
                                name="sort_state">
                                <option value="">Select state</option>
<?php foreach($STATES as $state) : ?>
                                <option value="<?=$state->id?>" <?=$STATE_ID==$state->id? 'selected':'' ?>><?=$state->name?></option>
<?php endforeach?>
                            </select>
                        </div>
                        <div class="col-md-1">
                            <button class="btn btn-primary" type="submit">Filter</button>
                        </div>
                    </div>
                </form>
                <div class="card-body">
                    <table class="table aiz-table mb-0">
                        <thead>
                            <tr>
                                <th width="10%">#</th>
                                <th>Name</th>
                                <th>State</th>
                                <th>Area Wise Shipping Cost</th>
                                <th>Show/Hide</th>
                                <th class="text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody>
<?php foreach($CITIES as $city) : ?>
                            <tr>
                                <td><?=$city->id?></td>
                                <td><?=$city->name?></td>
                                <td><?=$city->state?></td>
                                <td><?=$city->cost?></td>
                                <td>
                                    <label class="aiz-switch aiz-switch-success mb-0">
                                        <input onchange="update_status(this)" value="<?=$city->id?>" <?=$city->status==1? 'checked' : '' ?> type="checkbox">
                                        <span class="slider round"></span>
                                    </label>
                                </td>
                                <td class="text-right">
                                    <a class="btn btn-soft-primary btn-icon btn-circle btn-sm"
                                        href="<?=site_url('admins/shippings/edit_city/'.$city->id)?>" title="Edit">
                                        <i class="las la-edit"></i>
                                    </a>
                                    <a href="#" class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete" data-href="<?=site_url('admins/shippings/destroy_city/'.$city->id);?>" title="Delete">
                                        <i class="las la-trash"></i>
                                    </a>
                                </td>
                            </tr>
<?php endforeach ?>
                        </tbody>
                    </table>
                    <div class="aiz-pagination">
                        <?php echo $links?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0 h6">Add New City</h5>
                </div>
                <div class="card-body">
<?php echo form_open('admins/shippings/add_city'); ?>
                        <div class="form-group mb-3">
                            <label for="name">Name</label>
                            <input type="text" placeholder="Name" name="name" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="country">State</label>
                            <select class="select2 form-control aiz-selectpicker" name="state_id"
                                data-toggle="select2" data-placeholder="Choose ..." data-live-search="true">
<?php foreach($STATES as $state) : ?>
                                <option value="<?=$state->id?>" ><?=$state->name?></option>
<?php endforeach?>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="name">Cost</label>
                            <input type="number" min=0  name="cost" class="form-control" required>
                        </div>
                        <div class="form-group mb-3 text-right">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
<?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
        <!-- delete Modal -->
<div id="delete-modal" class="modal fade">
    <div class="modal-dialog modal-sm modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title h6">Delete Confirmation</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body text-center">
                <p class="mt-1 fs-14">Are you sure to delete this?</p>
                <button type="button" class="btn btn-secondary rounded-0 mt-2" data-dismiss="modal">Cancel</button>
                <a href="" id="delete-link" class="btn btn-primary rounded-0 mt-2">Delete</a>
            </div>
        </div>
    </div>
</div><!-- /.modal -->
<script src="<?=base_url('assets/js/vendors.js')?>"></script>
<script src="<?=base_url('assets/js/aiz-core.js')?>"></script>
<script type="text/javascript">

    function update_status(el){
        if(el.checked){
            var status = 1;
        }
        else{
            var status = 0;
        }
        $.post("<?=site_url('admins/setups/update_status')?>", {_token: AIZ.data.csrf , id:el.value, status:status,table:'tbl_cities'}, function(data){
            if(data == 1){
                AIZ.plugins.notify('success', 'State status updated successfully');
            }
            else{
                AIZ.plugins.notify('danger', 'Something went wrong!');
            }
        });
    }

</script>