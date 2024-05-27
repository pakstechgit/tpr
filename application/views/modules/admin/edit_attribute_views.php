<div class="px-15px px-lg-25px">
  <div class="aiz-titlebar text-left mt-2 mb-3">
    <h5 class="mb-0 h6">Attribute Information</h5>
  </div>

  <div class="col-lg-8 mx-auto">
    <div class="card">
      <div class="card-body p-0">
    <?php echo form_open('admins/attributes/update/'.$ATTRIBUTE->id,array('class'=>'p-4')) ?>
          <div class="form-group row">
            <label class="col-sm-3 col-from-label" for="name">Name</label>
            <div class="col-sm-9">
              <input type="text" placeholder="Name" id="name" name="name" class="form-control" required
                value="<?=$ATTRIBUTE->name?>" />
            </div>
          </div>
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