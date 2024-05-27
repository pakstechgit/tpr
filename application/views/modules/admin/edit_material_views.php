<div class="px-15px px-lg-25px">

  <div class="aiz-titlebar text-left mt-2 mb-3">
    <h5 class="mb-0 h6">Material Information</h5>
  </div>

  <div class="col-lg-8 mx-auto">
    <div class="card">
      <div class="card-body p-0">
        <?php echo form_open('admins/materials/update/'.$MATERIAL->id,array('class'=>'p-4')) ?>
          <div class="form-group row">
            <label class="col-sm-3 col-from-label" for="name">Name</label>
            <div class="col-sm-9">
              <input type="text" placeholder="Name" id="name" name="name" value="<?=$MATERIAL->name?>" class="form-control" required>
            </div>
          </div>
          <!--<div class="form-group row">-->
          <!--  <label class="col-md-3 col-form-label" for="signinSrEmail">Logo <small>(120x80)</small></label>-->
          <!--  <div class="col-md-9">-->
          <!--    <div class="input-group" data-toggle="aizuploader" data-type="image">-->
          <!--      <div class="input-group-prepend">-->
          <!--        <div class="input-group-text bg-soft-secondary font-weight-medium">Browse</div>-->
          <!--      </div>-->
          <!--      <div class="form-control file-amount">Choose File</div>-->
          <!--      <input type="hidden" name="logo" value="" class="selected-files">-->
          <!--    </div>-->
          <!--    <div class="file-preview box sm">-->
          <!--    </div>-->
          <!--  </div>-->
          <!--</div>-->
          <!--<div class="form-group row">-->
          <!--  <label class="col-sm-3 col-from-label">Meta Title</label>-->
          <!--  <div class="col-sm-9">-->
          <!--    <input type="text" class="form-control" name="meta_title" value="" placeholder="Meta Title">-->
          <!--  </div>-->
          <!--</div>-->
          <!--<div class="form-group row">-->
          <!--  <label class="col-sm-3 col-from-label">Meta description</label>-->
          <!--  <div class="col-sm-9">-->
          <!--    <textarea name="meta_description" rows="8" class="form-control"></textarea>-->
          <!--  </div>-->
          <!--</div>-->
          <!--<div class="form-group row">-->
          <!--  <label class="col-sm-3 col-from-label" for="name">Slug</label>-->
          <!--  <div class="col-sm-9">-->
          <!--    <input type="text" placeholder="Slug" id="slug" name="slug" value="Dynarex-io260" class="form-control">-->
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
<div class="bg-white text-center py-3 px-15px px-lg-25px mt-auto">
  <p class="mb-0">&copy;</p>
</div>

<script src="<?=base_url('assets/js/vendors.js')?>"></script>
<script src="<?=base_url('assets/js/aiz-core.js')?>"></script>