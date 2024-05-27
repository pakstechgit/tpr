<div class="px-15px px-lg-25px">
  <div class="aiz-titlebar text-left mt-2 mb-3">
    <div class="align-items-center">
      <h1 class="h3">Attribute Detail</h1>
    </div>
  </div>

  <div class="row">
    <!-- Small table -->
    <div class="col-lg-7">
      <div class="card">
        <div class="card-header">
          <strong class="card-title"> Packages </strong>
        </div>

        <div class="card-body">
          <table class="table aiz-table mb-0">
            <thead>
              <tr>
                <th>#</th>
                <th>Value</th>
                <th class="text-right">Action</th>
              </tr>
            </thead>
            <tbody>
<?php foreach($ATTRIBUTE_VALUES as $value) { ?>
              <tr>
                <td><?=$value->id?></td>
                <td><?=$value->value?></td>
                <td class="text-right">
                  <a class="btn btn-soft-primary btn-icon btn-circle btn-sm"
                    href="<?=base_url('admins/attributes/edit_attribute_value/'.$value->id)?>" title="Edit">
                    <i class="las la-edit"></i>
                  </a>
                  <a href="#" class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete"
                    data-href="<?=base_url('admins/attributes/delete_attribute_value/'.$value->id.'?attr-val='.$value->attribute_id)?>" title="Delete">
                    <i class="las la-trash"></i>
                  </a>
                </td>
              </tr>
<?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="col-md-5">
      <div class="card">
        <div class="card-header">
          <h5 class="mb-0 h6">Add New Attribute Value</h5>
        </div>
        <div class="card-body">
          <!-- Error Meassages -->
        <?php echo form_open('admins/attributes/add_attribute_vallues') ?>
            <div class="form-group mb-3">
              <label for="name">Attribute Name</label>
              <input type="hidden" name="attribute_id" value="<?=$ATTRIBUTE->id?>" />
              <input type="text" placeholder="Name" name="" value="<?=$ATTRIBUTE->name?>" class="form-control" readonly />
            </div>
            <div class="form-group mb-3">
              <label for="name">Attribute Value</label>
              <input type="text" placeholder="Name" id="value" name="value" class="form-control" required />
            </div>
            <div class="form-group mb-3 text-right">
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
        <?php echo form_close() ?>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="bg-white text-center py-3 px-15px px-lg-25px mt-auto">
  <p class="mb-0">&copy;</p>
</div>
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