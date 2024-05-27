<div class="px-15px px-lg-25px">
  <div class="aiz-titlebar text-left mt-2 mb-3">
    <h5 class="mb-0 h6">Attribute Value Information</h5>
  </div>

  <div class="col-lg-8 mx-auto">
    <div class="card">
      <div class="card-body p-0">
        <?php echo form_open('admins/attributes/update_attribute_value/'.$ATTRIBUTE_VALUE->id,array('class'=>'p-4'))?>
           <input type="hidden" name="attribute_id" value="<?=$ATTRIBUTE_VALUE->attribute_id?>">
          <div class="form-group row">
            <label class="col-sm-3 col-from-label" for="Attribute Value">
              Attribute Value
            </label>
            <div class="col-sm-9">
              <input type="text" placeholder="Attribute Value" id="value" name="value" class="form-control" required
                value="<?=$ATTRIBUTE_VALUE->value?>" />
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
  <p class="mb-0">&copy; </p>
</div>