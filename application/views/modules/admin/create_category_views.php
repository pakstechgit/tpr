<div class="px-15px px-lg-25px">
  <div class="row">
    <div class="col-lg-8 mx-auto">
      <div class="card">
        <div class="card-header">
          <h5 class="mb-0 h6">Category Information</h5>
        </div>
        <div class="card-body">
        <?php echo form_open('admins/categories/save') ?>
            <div class="form-group row">
              <label class="col-md-3 col-form-label">Name</label>
              <div class="col-md-9">
                <input type="text" placeholder="Name" id="name" name="name" class="form-control" required />
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label">Parent Category</label>
              <div class="col-md-9">
                <select class="select2 form-control aiz-selectpicker" name="parent_id" data-toggle="select2"
                  data-placeholder="Choose ..." data-live-search="true">
                    <option value="0">No Parent</option>
<?php generate_options($CATEGORIES, 0, 0); ?>
                </select>
              </div>
            </div>
            <!--<div class="form-group row">-->
            <!--  <label class="col-md-3 col-form-label"> Ordering Number </label>-->
            <!--  <div class="col-md-9">-->
            <!--    <input type="number" name="order_level" class="form-control" id="order_level"-->
            <!--      placeholder="Order Level" />-->
            <!--    <small>Higher number has high priority</small>-->
            <!--  </div>-->
            <!--</div>-->
            <!--<div class="form-group row">-->
            <!--  <label class="col-md-3 col-form-label">Type</label>-->
            <!--  <div class="col-md-9">-->
            <!--    <select name="digital" required class="form-control aiz-selectpicker mb-2 mb-md-0">-->
            <!--      <option value="0">Physical</option>-->
            <!--      <option value="1">Digital</option>-->
            <!--    </select>-->
            <!--  </div>-->
            <!--</div>-->
            <!--<div class="form-group row">-->
            <!--  <label class="col-md-3 col-form-label" for="signinSrEmail">Banner <small>(200x200)</small></label>-->
            <!--  <div class="col-md-9">-->
            <!--    <div class="input-group" data-toggle="aizuploader" data-type="image">-->
            <!--      <div class="input-group-prepend">-->
            <!--        <div class="input-group-text bg-soft-secondary font-weight-medium">-->
            <!--          Browse-->
            <!--        </div>-->
            <!--      </div>-->
            <!--      <div class="form-control file-amount">Choose File</div>-->
            <!--      <input type="hidden" name="banner" class="selected-files" />-->
            <!--    </div>-->
            <!--    <div class="file-preview box sm"></div>-->
            <!--  </div>-->
            <!--</div>-->
            <!--<div class="form-group row">-->
            <!--  <label class="col-md-3 col-form-label" for="signinSrEmail">Icon <small>(32x32)</small></label>-->
            <!--  <div class="col-md-9">-->
            <!--    <div class="input-group" data-toggle="aizuploader" data-type="image">-->
            <!--      <div class="input-group-prepend">-->
            <!--        <div class="input-group-text bg-soft-secondary font-weight-medium">-->
            <!--          Browse-->
            <!--        </div>-->
            <!--      </div>-->
            <!--      <div class="form-control file-amount">Choose File</div>-->
            <!--      <input type="hidden" name="icon" class="selected-files" />-->
            <!--    </div>-->
            <!--    <div class="file-preview box sm"></div>-->
            <!--  </div>-->
            <!--</div>-->
            <!--<div class="form-group row">-->
            <!--  <label class="col-md-3 col-form-label" for="signinSrEmail">Cover Image <small>(250x250)</small></label>-->
            <!--  <div class="col-md-9">-->
            <!--    <div class="input-group" data-toggle="aizuploader" data-type="image">-->
            <!--      <div class="input-group-prepend">-->
            <!--        <div class="input-group-text bg-soft-secondary font-weight-medium">-->
            <!--          Browse-->
            <!--        </div>-->
            <!--      </div>-->
            <!--      <div class="form-control file-amount">Choose File</div>-->
            <!--      <input type="hidden" name="cover_image" class="selected-files" />-->
            <!--    </div>-->
            <!--    <div class="file-preview box sm"></div>-->
            <!--  </div>-->
            <!--</div>-->
            <!--<div class="form-group row">-->
            <!--  <label class="col-md-3 col-form-label">Meta Title</label>-->
            <!--  <div class="col-md-9">-->
            <!--    <input type="text" class="form-control" name="meta_title" placeholder="Meta Title" />-->
            <!--  </div>-->
            <!--</div>-->

            <!--<div class="form-group row">-->
            <!--  <label class="col-md-3 col-form-label">Meta description</label>-->
            <!--  <div class="col-md-9">-->
            <!--    <textarea name="meta_description" rows="5" class="form-control"></textarea>-->
            <!--  </div>-->
            <!--</div>-->
            <!--<div class="form-group row">-->
            <!--  <label class="col-md-3 col-form-label">Filtering Attributes</label>-->
            <!--  <div class="col-md-9">-->
            <!--    <select class="select2 form-control aiz-selectpicker" name="filtering_attributes[]"-->
            <!--      data-toggle="select2" data-placeholder="Choose ..." data-live-search="true" multiple>-->
            <!--      <option value="1">Size</option>-->
            <!--      <option value="2">Fabric</option>-->
            <!--      <option value="3">Volume</option>-->
            <!--    </select>-->
            <!--  </div>-->
            <!--</div>-->
            <div class="form-group mb-0 text-right">
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
        <?php echo form_close() ?>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="bg-white text-center py-3 px-15px px-lg-25px mt-auto">
  <p class="mb-0">&copy; FAVORI Scents Ecommerce v7.1.0</p>
</div>
<script src="<?=base_url('assets/js/vendors.js')?>"></script>
<script src="<?=base_url('assets/js/aiz-core.js')?>"></script>