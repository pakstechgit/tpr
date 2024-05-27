<div class="px-15px px-lg-25px">
  <div class="aiz-titlebar text-left mt-2 mb-3">
    <div class="align-items-center">
      <h1 class="h3">All Brands</h1>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-7">
      <div class="card">
        <div class="card-header row gutters-5">
          <div class="col text-center text-md-left">
            <h5 class="mb-md-0 h6">Brands</h5>
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
                <!--<th>Logo</th>-->
                <th class="text-right">Options</th>
              </tr>
            </thead>
            <tbody>
<?php foreach($BRANDS as $brand) { ?>
              <tr>
                <td><?=$brand->id?></td>
                <td><?=$brand->name?></td>
                <td class="text-right">
                  <a class="btn btn-soft-primary btn-icon btn-circle btn-sm"
                    href="<?=site_url('admins/brands/edit/'.$brand->id)?>" title="Edit">
                    <i class="las la-edit"></i>
                  </a>
                  <a href="#" class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete"
                    data-href="<?=site_url('admins/brands/destroy/'.$brand->id)?>" title="Delete">
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
          <h5 class="mb-0 h6">Add New Brand</h5>
        </div>
        <div class="card-body">
        <?php echo form_open('admins/brands/save') ?>
            <div class="form-group mb-3">
              <label for="name">Name</label>
              <input type="text" placeholder="Name" name="name" class="form-control" required />
            </div>
            <div class="form-group row gutters-5">
                  <div class="col-md-3">
                    <input type="text" class="form-control" value="Categories" disabled />
                  </div>
                  <div class="col-md-9">
                    <select name="category_ids[]" id="choice_categories" class="form-control aiz-selectpicker"
                      data-selected-text-format="count" data-live-search="true" multiple
                      data-placeholder="Choose Categories">
<?php foreach($CATEGORIES as $category) : ?>
                        <option value="<?=$category->id?>"><?=$category->name?></option>
<?php endforeach ?>
                    </select>
                  </div>
            </div>
            <!--<div class="form-group mb-3">-->
            <!--  <label for="name">Logo <small>(120x80)</small></label>-->
            <!--  <div class="input-group" data-toggle="aizuploader" data-type="image">-->
            <!--    <div class="input-group-prepend">-->
            <!--      <div class="input-group-text bg-soft-secondary font-weight-medium">-->
            <!--        Browse-->
            <!--      </div>-->
            <!--    </div>-->
            <!--    <div class="form-control file-amount">Choose File</div>-->
            <!--    <input type="hidden" name="logo" class="selected-files" />-->
            <!--  </div>-->
            <!--  <div class="file-preview box sm"></div>-->
            <!--</div>-->
            <!--<div class="form-group mb-3">-->
            <!--  <label for="name">Meta Title</label>-->
            <!--  <input type="text" class="form-control" name="meta_title" placeholder="Meta Title" />-->
            <!--</div>-->
            <!--<div class="form-group mb-3">-->
            <!--  <label for="name">Meta description</label>-->
            <!--  <textarea name="meta_description" rows="5" class="form-control"></textarea>-->
            <!--</div>-->
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