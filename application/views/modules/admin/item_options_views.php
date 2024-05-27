<div class="px-15px px-lg-25px">
  <div class="aiz-titlebar text-left mt-2 mb-3">
    <div class="align-items-center">
      <h1 class="h3">All Item Options</h1>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-7">
      <div class="card">
        <div class="card-header row gutters-5">
          <div class="col text-center text-md-left">
            <h5 class="mb-md-0 h6">Item Options</h5>
          </div>
          <div class="col-md-4">
            <form class="" id="sort_brands" action="" method="GET">
              <div class="input-group input-group-sm">
                <input type="text" class="form-control" id="search" name="search" placeholder="Type name &amp; Enter" />
              </div>
            </form>
          </div>
        </div>
        <div class="card-body">
          <table class="table aiz-table mb-0">
            <thead>
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Level</th>
                <th class="text-right">Options</th>
              </tr>
            </thead>
            <tbody>
<?php foreach($OPTIONS as $option) { ?>
              <tr>
                <td><?=$option->id?></td>
                <td><?=$option->name?></td>
                <td><?=$option->level?></td>
                <td class="text-right">
                  <a class="btn btn-soft-primary btn-icon btn-circle btn-sm"
                    href="<?=site_url('admins/item_options/edit/'.$option->id)?>" title="Edit">
                    <i class="las la-edit"></i>
                  </a>
                  <a href="#" class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete"
                    data-href="<?=site_url('admins/item_options/destroy/'.$option->id)?>" title="Delete">
                    <i class="las la-trash"></i>
                  </a>
                </td>
              </tr>
<?php } ?>
            </tbody>
          </table>
          <div class="aiz-pagination">
              <?=$links?>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-5">
      <div class="card">
        <div class="card-header">
          <h5 class="mb-0 h6">Add New Item Option</h5>
        </div>
        <div class="card-body">
        <?php echo form_open('admins/item_options/save') ?>
            <div class="form-group mb-3">
              <label for="name">Name</label>
              <input type="text" placeholder="Name" name="name" class="form-control" required />
            </div>
            <div class="form-group mb-3">
              <label for="name">Level</label>
              <input type="text" placeholder="Level" name="level" class="form-control" required />
            </div>
            <div class="form-group mb-3 text-right">
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
            <?php echo form_close()?>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="bg-white text-center py-3 px-15px px-lg-25px mt-auto">
  <p class="mb-0">&copy; </p>
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