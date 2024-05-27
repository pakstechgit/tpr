<div class="px-15px px-lg-25px">
    <div class="aiz-titlebar text-left mt-2 mb-3">
        <h5 class="mb-0 h6">State Information</h5>
    </div>
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0 h6">Edit State</h5>
                </div>
                <div class="card-body p-0">
<?php echo form_open('admins/shippings/update_state/'.$STATE->id,array('class'=>'p-4')) ?>
                        <div class="form-group mb-3">
                            <label for="name">Name</label>
                            <input type="text" placeholder="Name" value="<?=$STATE->name?>" name="name" class="form-control"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="state_id">Country</label>
                            <select class="select2 form-control aiz-selectpicker" name="country_id"
                                data-toggle="select2" data-placeholder="Choose ..." data-live-search="true">
<?php foreach($COUNTRIES as $country) : ?>
                                <option value="<?=$country->id?>" <?=$country->id==$STATE->country_id ? 'selected':'' ?>><?=$country->name?></option>
<?php endforeach?>
                            </select>
                        </div>

                        <div class="form-group mb-3 text-right">
                            <button type="submit" class="btn btn-primary">
                                Update
                            </button>
                        </div>
<?php echo form_close()?>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?=base_url('assets/js/vendors.js')?>"></script>
<script src="<?=base_url('assets/js/aiz-core.js')?>"></script>