<div class="px-15px px-lg-25px">
    <div class="aiz-titlebar text-left mt-2 mb-3">
      <h5 class="mb-0 h6">Add New Product</h5>
    </div>
    <div class="">
      <!-- Error Meassages -->
    <?php  echo form_open('admins/products/save', array('id' => 'choice_form', 'class' => 'form form-horizontal mar-top')); ?>
        <div class="row gutters-5">
          <div class="col-lg-8">
            <input type="hidden" name="added_by" value="admin" />
            <div class="card">
              <div class="card-header">
                <h5 class="mb-0 h6">Product Information</h5>
              </div>
              <div class="card-body">
                <div class="form-group row">
                  <label class="col-md-3 col-from-label">Product Name <span class="text-danger">*</span></label>
                  <div class="col-md-8">
                    <input type="text" class="form-control product_field " id="product_name" name="name" placeholder="Product Name"
                      required />
                  </div>
                </div>
                <div class="form-group row" id="category">
                  <label class="col-md-3 col-from-label">Category <span class="text-danger">*</span></label>
                  <div class="col-md-8">
                    <select class="form-control aiz-selectpicker product_field" id="product_category" data-selected-text-format="count" multiple name="category_id" id="category_id"
                      data-live-search="true" required>
                      <?php generate_options_add($CATEGORIES, 0, 0);?>
                    </select>
                  </div>
                </div>
                <div class="form-group row" id="brand">
                  <label class="col-md-3 col-from-label">Brand</label>
                  <div class="col-md-8">
                    <select class="form-control aiz-selectpicker product_field" name="brand_id" id="brand_id" data-live-search="true">
                      <option value="">Select Brand</option>
<?php foreach($BRANDS as $brand) : ?>
                        <option value="<?=$brand->id?>"><?=$brand->name?></option>
<?php endforeach ?>
                    </select>
                  </div>
                </div>
                <div class="form-group row" id="market_segment">
                  <label class="col-md-3 col-from-label">Market Segment</label>
                  <div class="col-md-8">
                    <select  class="form-control aiz-selectpicker product_field" id="market_segment" data-selected-text-format="count" name="market_segment_id[]" multiple id="market_segement_id" data-live-search="true">
                      <option value="">Select Market Segments</option>
<?php foreach($MARKET_SEGMENTS as $segment) : ?>
                        <option value="<?=$segment->id?>" ><?=$segment->name?></option>
<?php endforeach ?>
                    </select>
                  </div>
                </div>
                <div class="form-group row ">
                  <label class="col-md-3 col-from-label">Unit</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control product_field" id="unit" name="unit" placeholder="Unit (e.g. KG, Pc etc)" />
                  </div>
                </div>
                <div class="form-group row ">
                  <label class="col-md-3 col-from-label">Weight <small>(In Kg)</small></label>
                  <div class="col-md-8">
                    <input type="number" class="form-control product_field" id="weight" name="weight" step="0.01" value="0.00"
                      placeholder="0.00" />
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-md-3 col-from-label">Minimum Purchase Qty
                    <span class="text-danger">*</span></label>
                  <div class="col-md-8">
                    <input type="number" lang="en" class="form-control product_field" id="min_qty" name="min_qty" value="1" min="1" required />
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-md-3 col-from-label">Tags</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control aiz-tag-input product_field" id="tags" name="tags[]"
                      placeholder="Type and hit enter to add a tag" />
                    <small class="text-muted">This is used for search. Input those words by which
                      cutomer can find this product.</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header">
                <h5 class="mb-0 h6">Product Images</h5>
              </div>
              <div class="card-body">
                <div class="form-group row">
                  <label class="col-md-3 col-form-label" for="signinSrEmail">Product Image
                    <!--<small>(600x600)</small>-->
                    </label>
                  <div class="col-md-8">
                    <div class="input-group" data-toggle="aizuploader" data-type="image" data-multiple="false">
                      <div class="input-group-prepend">
                        <div class="input-group-text bg-soft-secondary font-weight-medium">
                          Browse
                        </div>
                      </div>
                      <div class="form-control file-amount">Choose File</div>
                      <input type="hidden"  name="photos" class="selected-files" />
                    </div>
                    <div class="file-preview box sm"></div>
                    <!--<small class="text-muted">These images are visible in product details page gallery.-->
                    <!--  Use 600x600 sizes images.</small>-->
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-md-3 col-form-label" for="signinSrEmail">Thumbnail Image
                    <!--<small>(300x300)</small>-->
                    </label>
                  <div class="col-md-8">
                    <div class="input-group" data-toggle="aizuploader" data-type="image">
                      <div class="input-group-prepend">
                        <div class="input-group-text bg-soft-secondary font-weight-medium">
                          Browse
                        </div>
                      </div>
                      <div class="form-control file-amount">Choose File</div>
                      <input type="hidden" name="thumbnail_img" class="selected-files" />
                    </div>
                    <div class="file-preview box sm"></div>
                    <!--<small class="text-muted">This image is visible in all product box. Use 300x300-->
                    <!--  sizes image. Keep some blank space around main object of-->
                    <!--  your image as we had to crop some edge in different-->
                    <!--  devices to make it responsive.</small>-->
                  </div>
                </div>
              </div>
            </div>
            <!--<div class="card">-->
            <!--  <div class="card-header">-->
            <!--    <h5 class="mb-0 h6">Product Videos</h5>-->
            <!--  </div>-->
            <!--  <div class="card-body">-->
            <!--    <div class="form-group row">-->
            <!--      <label class="col-md-3 col-from-label">Video Provider</label>-->
            <!--      <div class="col-md-8">-->
            <!--        <select class="form-control aiz-selectpicker" name="video_provider" id="video_provider">-->
            <!--          <option value="youtube">Youtube</option>-->
            <!--          <option value="dailymotion">Dailymotion</option>-->
            <!--          <option value="vimeo">Vimeo</option>-->
            <!--        </select>-->
            <!--      </div>-->
            <!--    </div>-->
            <!--    <div class="form-group row">-->
            <!--      <label class="col-md-3 col-from-label">Video Link</label>-->
            <!--      <div class="col-md-8">-->
            <!--        <input type="text" class="form-control" name="video_link" placeholder="Video Link" />-->
            <!--        <small class="text-muted">Use proper link without extra parameter. Don&#039;t use-->
            <!--          short share link/embeded iframe code.</small>-->
            <!--      </div>-->
            <!--    </div>-->
            <!--  </div>-->
            <!--</div>-->
            <div class="card">
              <div class="card-header">
                <h5 class="mb-0 h6">Product Variation</h5>
              </div>
              <div class="card-body">
                <div class="form-group row gutters-5">
                  <div class="col-md-3">
                    <input type="text" class="form-control" value="Colors" disabled />
                  </div>
                  <div class="col-md-8">
                    <select class="form-control aiz-selectpicker product_field" data-live-search="true"
                      data-selected-text-format="count" name="colors[]" id="colors" multiple disabled >
<?php foreach($COLORS as $color) : ?>
                      <option value="<?=$color->code?>"
                        data-content="<span><span class='size-15px d-inline-block mr-2 rounded border' style='background:<?=$color->code?>'></span><span><?=$color->name?></span></span>">
                      </option>
<?php endforeach ?>
                    </select>
                  </div>
                  <div class="col-md-1">
                    <label class="aiz-switch aiz-switch-success mb-0">
                      <input value="1" type="checkbox" name="colors_active" />
                      <span></span>
                    </label>
                  </div>
                </div>
                <div class="d-none form-group row gutters-5">
                  <div class="col-md-3">
                    <input type="text" class="form-control" value="Materials" disabled />
                  </div>
                  <div class="col-md-8">
                    <select name="choice_attributes[]" id="materials" class="form-control aiz-selectpicker"
                      data-selected-text-format="count" data-live-search="true" multiple
                      data-placeholder="Materials">
<?php foreach($MATERIALS as $material) : ?>
                        <option value="<?=$material->id?>"><?=$material->name?></option>
<?php endforeach ?>
                    </select>
                  </div>
                </div>
                <div class="form-group row gutters-5">
                  <div class="col-md-3">
                    <input type="text" class="form-control" value="Unit Options" disabled />
                  </div>
                  <div class="col-md-8">
                    <select name="item_options[]" id="item_options" class="form-control aiz-selectpicker product_field"
                      data-selected-text-format="count" data-live-search="true" multiple
                      data-placeholder="Item Options">
<?php foreach($ITEM_OPTIONS as $option) : ?>
                        <option value="<?=$option->id?>"><?=$option->name?></option>
<?php endforeach ?>
                    </select>
                  </div>
                </div>
                <div class="form-group row gutters-5">
                  <div class="col-md-3">
                    <input type="text" class="form-control" value="Attributes" disabled />
                  </div>
                  <div class="col-md-8">
                    <select name="choice_attributes[]" id="choice_attributes" class="form-control aiz-selectpicker product_field"
                      data-selected-text-format="count" data-live-search="true" multiple
                      data-placeholder="Choose Attributes">
<?php foreach($ATTRIBUTES as $attribute) : ?>
                        <option value="<?=$attribute->id?>"><?=$attribute->name?></option>
<?php endforeach ?>
                    </select>
                  </div>
                </div>
                <div>
                  <p>
                    Choose the attributes of this product and then input values
                    of each attribute
                  </p>
                  <br />
                </div>
                <div id="unit_options">
                    
                </div>
                <div class="customer_choice_options" id="customer_choice_options"></div>
              </div>
            </div>
            <div class="card">
              <div class="card-header">
                <h5 class="mb-0 h6">Product configuration</h5>
              </div>
              <div class="card-body">
                  <div class="form-group row show-hide-div">
                    <label class="col-md-3 col-from-label"> Item Code </label>
                    <div class="col-md-6">
                      <input type="text" placeholder="" id="item_code" name="item_number" class="form-control product_field" />
                    </div>
                  </div>
                <div class="form-group row show-hide-div">
                  <label class="col-md-3 col-from-label">Unit price <span class="text-danger">*</span></label>
                  <div class="col-md-6">
                    <input type="number" id="unit_price" lang="en" min="0" value="0" step="0.01" placeholder="Unit price"
                      name="unit_price" class="form-control product_field" />
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-3 control-label" for="start_date">Discount Date Range</label>
                  <div class="col-sm-9">
                    <input type="text" id="discount-date_range" class="form-control aiz-date-range product_field" name="date_range" placeholder="Select Date"
                      data-time-picker="true" data-format="DD-MM-Y HH:mm:ss" data-separator=" to " autocomplete="off" />
                  </div>
                </div>
                
                <div class="form-group row">
                  <label class="col-md-3 col-from-label">Discount <span class="text-danger">*</span></label>
                  <div class="col-md-6">
                    <input type="number" id="discount_value" lang="en" min="0" value="0" step="0.01" placeholder="Discount" name="discount"
                      class="form-control product_field" required />
                  </div>
                  <div class="col-md-3">
                    <select class="form-control aiz-selectpicker product_field" id="discount_type" name="discount_type">
                      <option value="amount">Flat</option>
                      <option value="percent">Percent</option>
                    </select>
                  </div>
                </div>

                <div>
                  <div class="form-group row show-hide-div">
                    <label class="col-md-3 col-from-label">Quantity</label>
                    <div class="col-md-6">
                      <input type="number" id="current_stock" lang="en" min="0" value="0" step="1" placeholder="Quantity"
                        name="current_stock" class="form-control product_field" />
                    </div>
                  </div>
                  <!--<div class="form-group row">-->
                  <!--  <label class="col-md-3 col-from-label"> SKU </label>-->
                  <!--  <div class="col-md-6">-->
                  <!--    <input type="text" placeholder="SKU" name="sku" class="form-control" />-->
                  <!--  </div>-->
                  <!--</div>-->
                </div>
                <!--<div class="form-group row">-->
                <!--  <label class="col-md-3 col-from-label"> External link </label>-->
                <!--  <div class="col-md-9">-->
                <!--    <input type="text" placeholder="External link" name="external_link" class="form-control" />-->
                <!--    <small class="text-muted">Leave it blank if you do not use external site-->
                <!--      link</small>-->
                <!--  </div>-->
                <!--</div>-->
                <!--<div class="form-group row">-->
                <!--  <label class="col-md-3 col-from-label">-->
                <!--    External link button text-->
                <!--  </label>-->
                <!--  <div class="col-md-9">-->
                <!--    <input type="text" placeholder="External link button text" name="external_link_btn"-->
                <!--      class="form-control" />-->
                <!--    <small class="text-muted">Leave it blank if you do not use external site-->
                <!--      link</small>-->
                <!--  </div>-->
                <!--</div>--> 
                <br />
                <div id="unit_options" class="show-hide-div mb-3">
                    
                </div>
                <div class="sku_combination mt-5" id="sku_combination"></div>
              </div>
            </div>
            <div class="card">
              <div class="card-header">
                <h5 class="mb-0 h6">Product Description</h5>
              </div>
              <div class="card-body">
                <div class="form-group row">
                  <label class="col-md-3 col-from-label">Description</label>
                  <div class="col-md-8">
                    <textarea class="aiz-text-editor product_field" id="description"  name="description"></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-md-3 col-from-label">Card Description</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control product_field" id="card_description" value="" name="card_description" value="">
                    <small class="text-muted">
                      Use to display a small description in card.
                      <span class="d-block text-danger">Note: Maximum 100 characters</span>
                    </small>
                  </div>
                </div>
              </div>
            </div>

            <!--                <div class="card">
              <div class="card-header">
                  <h5 class="mb-0 h6">Product Shipping Cost</h5>
              </div>
              <div class="card-body">

              </div>
          </div>-->

            <!--<div class="card">-->
            <!--  <div class="card-header">-->
            <!--    <h5 class="mb-0 h6">PDF Specification</h5>-->
            <!--  </div>-->
            <!--  <div class="card-body">-->
            <!--    <div class="form-group row">-->
            <!--      <label class="col-md-3 col-form-label" for="signinSrEmail">PDF Specification</label>-->
            <!--      <div class="col-md-8">-->
            <!--        <div class="input-group" data-toggle="aizuploader" data-type="document">-->
            <!--          <div class="input-group-prepend">-->
            <!--            <div class="input-group-text bg-soft-secondary font-weight-medium">-->
            <!--              Browse-->
            <!--            </div>-->
            <!--          </div>-->
            <!--          <div class="form-control file-amount">Choose File</div>-->
            <!--          <input type="hidden" name="pdf" class="selected-files" />-->
            <!--        </div>-->
            <!--        <div class="file-preview box sm"></div>-->
            <!--      </div>-->
            <!--    </div>-->
            <!--  </div>-->
            <!--</div>-->
            <!--<div class="card">-->
            <!--  <div class="card-header">-->
            <!--    <h5 class="mb-0 h6">SEO Meta Tags</h5>-->
            <!--  </div>-->
            <!--  <div class="card-body">-->
            <!--    <div class="form-group row">-->
            <!--      <label class="col-md-3 col-from-label">Meta Title</label>-->
            <!--      <div class="col-md-8">-->
            <!--        <input type="text" class="form-control" name="meta_title" placeholder="Meta Title" />-->
            <!--      </div>-->
            <!--    </div>-->
            <!--    <div class="form-group row">-->
            <!--      <label class="col-md-3 col-from-label">Description</label>-->
            <!--      <div class="col-md-8">-->
            <!--        <textarea name="meta_description" rows="8" class="form-control"></textarea>-->
            <!--      </div>-->
            <!--    </div>-->
            <!--    <div class="form-group row">-->
            <!--      <label class="col-md-3 col-form-label" for="signinSrEmail">Meta Image</label>-->
            <!--      <div class="col-md-8">-->
            <!--        <div class="input-group" data-toggle="aizuploader" data-type="image">-->
            <!--          <div class="input-group-prepend">-->
            <!--            <div class="input-group-text bg-soft-secondary font-weight-medium">-->
            <!--              Browse-->
            <!--            </div>-->
            <!--          </div>-->
            <!--          <div class="form-control file-amount">Choose File</div>-->
            <!--          <input type="hidden" name="meta_img" class="selected-files" />-->
            <!--        </div>-->
            <!--        <div class="file-preview box sm"></div>-->
            <!--      </div>-->
            <!--    </div>-->
            <!--  </div>-->
            <!--</div>-->
          </div>

          <div class="col-lg-4">
            <div class="card">
              <div class="card-header">
                <h5 class="mb-0 h6">Shipping Configuration</h5>
              </div>

              <div class="card-body">
                <div class="form-group row">
                  <label class="col-md-6 col-from-label">Free Shipping</label>
                  <div class="col-md-6">
                    <label class="aiz-switch aiz-switch-success mb-0">
                      <input type="radio" name="shipping_type" value="free" checked />
                      <span></span>
                    </label>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-md-6 col-from-label">Flat Rate</label>
                  <div class="col-md-6">
                    <label class="aiz-switch aiz-switch-success mb-0">
                      <input type="radio" name="shipping_type" value="flat_rate" />
                      <span></span>
                    </label>
                  </div>
                </div>

                <div class="flat_rate_shipping_div" style="display: none">
                  <div class="form-group row">
                    <label class="col-md-6 col-from-label">Shipping cost</label>
                    <div class="col-md-6">
                      <input type="number" lang="en" min="0" value="0" step="0.01" placeholder="Shipping cost"
                        name="flat_shipping_cost" class="form-control" required />
                    </div>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-md-6 col-from-label">Is Product Quantity Mulitiply</label>
                  <div class="col-md-6">
                    <label class="aiz-switch aiz-switch-success mb-0">
                      <input type="checkbox" name="is_quantity_multiplied" value="1" />
                      <span></span>
                    </label>
                  </div>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header">
                <h5 class="mb-0 h6">Low Stock Quantity Warning</h5>
              </div>
              <div class="card-body">
                <div class="form-group mb-3">
                  <label for="name"> Quantity </label>
                  <input type="number" name="low_stock_quantity" value="1" min="0" step="1" class="form-control" />
                </div>
              </div>
            </div>

            <!--<div class="card">-->
            <!--  <div class="card-header">-->
            <!--    <h5 class="mb-0 h6">Stock Visibility State</h5>-->
            <!--  </div>-->

            <!--  <div class="card-body">-->
            <!--    <div class="form-group row">-->
            <!--      <label class="col-md-6 col-from-label">Show Stock Quantity</label>-->
            <!--      <div class="col-md-6">-->
            <!--        <label class="aiz-switch aiz-switch-success mb-0">-->
            <!--          <input type="radio" name="stock_visibility_state" value="quantity" checked />-->
            <!--          <span></span>-->
            <!--        </label>-->
            <!--      </div>-->
            <!--    </div>-->

            <!--    <div class="form-group row">-->
            <!--      <label class="col-md-6 col-from-label">Show Stock With Text Only</label>-->
            <!--      <div class="col-md-6">-->
            <!--        <label class="aiz-switch aiz-switch-success mb-0">-->
            <!--          <input type="radio" name="stock_visibility_state" value="text" />-->
            <!--          <span></span>-->
            <!--        </label>-->
            <!--      </div>-->
            <!--    </div>-->

            <!--    <div class="form-group row">-->
            <!--      <label class="col-md-6 col-from-label">Hide Stock</label>-->
            <!--      <div class="col-md-6">-->
            <!--        <label class="aiz-switch aiz-switch-success mb-0">-->
            <!--          <input type="radio" name="stock_visibility_state" value="hide" />-->
            <!--          <span></span>-->
            <!--        </label>-->
            <!--      </div>-->
            <!--    </div>-->
            <!--  </div>-->
            <!--</div>-->

            <div class="card">
              <div class="card-header">
                <h5 class="mb-0 h6">Cash on Delivery</h5>
              </div>
              <div class="card-body">
                <div class="form-group row">
                  <label class="col-md-6 col-from-label">Status</label>
                  <div class="col-md-6">
                    <label class="aiz-switch aiz-switch-success mb-0">
                      <input type="checkbox" name="cash_on_delivery" value="1" checked="" />
                      <span></span>
                    </label>
                  </div>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header">
                <h5 class="mb-0 h6">Featured</h5>
              </div>
              <div class="card-body">
                <div class="form-group row">
                  <label class="col-md-6 col-from-label">Status</label>
                  <div class="col-md-6">
                    <label class="aiz-switch aiz-switch-success mb-0">
                      <input type="checkbox" name="featured" value="1" />
                      <span></span>
                    </label>
                  </div>
                </div>
              </div>
            </div>

            <!--<div class="card">-->
            <!--  <div class="card-header">-->
            <!--    <h5 class="mb-0 h6">Todays Deal</h5>-->
            <!--  </div>-->
            <!--  <div class="card-body">-->
            <!--    <div class="form-group row">-->
            <!--      <label class="col-md-6 col-from-label">Status</label>-->
            <!--      <div class="col-md-6">-->
            <!--        <label class="aiz-switch aiz-switch-success mb-0">-->
            <!--          <input type="checkbox" name="todays_deal" value="1" />-->
            <!--          <span></span>-->
            <!--        </label>-->
            <!--      </div>-->
            <!--    </div>-->
            <!--  </div>-->
            <!--</div>-->

            <!--<div class="card">-->
            <!--  <div class="card-header">-->
            <!--    <h5 class="mb-0 h6">Flash Deal</h5>-->
            <!--  </div>-->
            <!--  <div class="card-body">-->
            <!--    <div class="form-group mb-3">-->
            <!--      <label for="name"> Add To Flash </label>-->
            <!--      <select class="form-control aiz-selectpicker" name="flash_deal_id" id="flash_deal">-->
            <!--        <option value="">Choose Flash Title</option>-->
            <!--      </select>-->
            <!--    </div>-->

            <!--    <div class="form-group mb-3">-->
            <!--      <label for="name"> Discount </label>-->
            <!--      <input type="number" name="flash_discount" value="0" min="0" step="0.01" class="form-control" />-->
            <!--    </div>-->
            <!--    <div class="form-group mb-3">-->
            <!--      <label for="name"> Discount Type </label>-->
            <!--      <select class="form-control aiz-selectpicker" name="flash_discount_type" id="flash_discount_type">-->
            <!--        <option value="">Choose Discount Type</option>-->
            <!--        <option value="amount">Flat</option>-->
            <!--        <option value="percent">Percent</option>-->
            <!--      </select>-->
            <!--    </div>-->
            <!--  </div>-->
            <!--</div>-->

            <div class="card">
              <div class="card-header">
                <h5 class="mb-0 h6">Estimate Shipping Time</h5>
              </div>
              <div class="card-body">
                <div class="form-group mb-3">
                  <label for="name"> Shipping Days </label>
                  <div class="input-group">
                    <input type="number" class="form-control" name="est_shipping_days" min="1" step="1"
                      placeholder="Shipping Days" />
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroupPrepend">Days</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!--<div class="card">-->
            <!--  <div class="card-header">-->
            <!--    <h5 class="mb-0 h6">Vat &amp; TAX</h5>-->
            <!--  </div>-->
            <!--  <div class="card-body">-->
            <!--    <label for="name">-->
            <!--      Tax-->
            <!--      <input type="hidden" value="3" name="tax_id" />-->
            <!--    </label>-->

            <!--    <div class="form-row">-->
            <!--      <div class="form-group col-md-6">-->
            <!--        <input type="number" lang="en" min="0" value="0" step="0.01" placeholder="Tax" name="tax"-->
            <!--          class="form-control" required />-->
            <!--      </div>-->
            <!--      <div class="form-group col-md-6">-->
            <!--        <select class="form-control aiz-selectpicker" name="tax_type">-->
            <!--          <option value="amount">Flat</option>-->
            <!--          <option value="percent">Percent</option>-->
            <!--        </select>-->
            <!--      </div>-->
            <!--    </div>-->
            <!--  </div>-->
            <!--</div>-->
          </div>
          <div class="col-12">
            <div class="btn-toolbar float-right mb-3" role="toolbar" aria-label="Toolbar with button groups">
              <!--<div class="btn-group mr-2" role="group" aria-label="Third group">-->
              <!--  <button type="submit"  value="unpublish" class="btn btn-primary action-btn">-->
              <!--    Save &amp; Unpublish-->
              <!--  </button>-->
              <!--</div>-->
              <div class="btn-group" role="group" aria-label="Second group">
                <button type="submit"  value="publish" class="btn btn-success action-btn">
                  Save &amp; Publish
                </button>
              </div>
            </div>
          </div>
        </div>
      <?php echo form_close()  ?>
    </div>
  </div>
  <div class="bg-white text-center py-3 px-15px px-lg-25px mt-auto">
    <p class="mb-0">&copy;</p>
  </div>
 
<script src="<?=base_url('assets/js/vendors.js')?>"></script>
<script src="<?=base_url('assets/js/aiz-core.js')?>"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
    //     $('form').bind('submit', function (e) {
    //         alert('submit')
    // 		if ( $(".action-btn").attr('attempted') == 'true' ) {
    // 			//stop submitting the form because we have already clicked submit.
    // 			e.preventDefault();
    			
    // 		}
    // 		else {
    // 			$(".action-btn").attr("attempted", 'true');
    // 		}
    //     // Disable the submit button while evaluating if the form should be submitted
    //     // $("button[type='submit']").prop('disabled', true);
        
    //     // var valid = true;

    //     // if (!valid) {
    //         // e.preventDefault();
            
    //         ////Reactivate the button if the form was not submitted
    //         // $("button[type='submit']").button.prop('disabled', false);
    //     // }
    // });
    
    // $('form').validate();
    
    $("[name=shipping_type]").on("change", function (){
        $(".flat_rate_shipping_div").hide();

        if($(this).val() == 'flat_rate'){
            $(".flat_rate_shipping_div").show();
        }

    });

    function add_more_customer_choice_option(i, name){
        $.ajax({
            headers: {
                '_token': $('meta[name="csrf-token"]').attr('content')
            },
            type:"POST",
            url:"<?=base_url('admins/products/add-more-choice-option')?>",
            data:{
                '_token': $('meta[name="csrf-token"]').attr('content'),
               attribute_id: i
            },
            success: function(data) {
                var obj = JSON.parse(data);
                $('#customer_choice_options').append('\
                <div class="form-group row">\
                    <div class="col-md-3">\
                        <input type="hidden" name="choice_no[]" value="'+i+'">\
                        <input type="text" class="form-control" name="choice[]" value="'+name+'" placeholder="Choice Title" readonly>\
                    </div>\
                    <div class="col-md-8">\
                        <select class="form-control aiz-selectpicker attribute_choice product_field" id="'+i+'-attribute_value_data'+'" required data-live-search="true" name="choice_options_'+ i +'[]" multiple>\
                            '+obj+'\
                        </select>\
                    </div>\
                </div>');
                set_draft();
                AIZ.plugins.bootstrapSelect('refresh');
           }
       });


    }
    $('input[name="colors_active"]').on('change', function() {
        if(!$('input[name="colors_active"]').is(':checked')) {
            $('#colors').prop('disabled', true);
            AIZ.plugins.bootstrapSelect('refresh');
        }
        else {
            $('#colors').prop('disabled', false);
            AIZ.plugins.bootstrapSelect('refresh');
        }
        update_sku();
    });

    $(document).on("change", ".attribute_choice",function() {
        update_sku();
    });

    $('#colors').on('change', function() {
        update_sku();
    });

    $('input[name="unit_price"]').on('keyup', function() {
        update_sku();
    });

    $('input[name="name"]').on('keyup', function() {
        update_sku();
    });

    function delete_row(em){
        $(em).closest('.form-group row').remove();
        update_sku();
    }

    function delete_variant(em){
        $(em).closest('.variant').remove();
    }
    $(document).on('change','input.product_field',function(){
      let value   = $(this).val();
      // console.log(value)
      let attr_id = $(this).attr('id');
      sessionStorage.setItem(attr_id, value);
    })
    $(document).on('change','select.product_field',function(){
      let value   = $(this).val();
      if(value){
        let attr_id = $(this).attr('id');
      // console.log(value)
      // console.log('sss');
      sessionStorage.setItem(attr_id, value);
      }
      
    })
    $('.aiz-text-editor').on('summernote.change', function() {
        // Your custom code here
        let value = $(this).val();
        let attr_id = $(this).attr('id');
        sessionStorage.setItem(attr_id, value);
    });
    $('textarea.product_field').on('change',function(){
      let value   = $(this).val();
      let attr_id = $(this).attr('id');
      // console.log('ssss')
      // console.log('sss');
      sessionStorage.setItem(attr_id, value);
    })
    set_draft();
    function set_draft(){
      let input_field   = $(document).find('input.product_field');
      let select_field  = $(document).find('select.product_field')
      let text_area     = $(document).find('textarea.aiz-text-editor');
      input_field.each(function(){
        let session_id= $(this).attr('id');
        
        let value     = sessionStorage.getItem(session_id);
        // console.log(value)
        $(this).val(value);
      })
      select_field.each(async function(){
        let session_id= $(this).attr('id');
        let value     = sessionStorage.getItem(session_id);
        if(value){
          let res= await $(this).val(value.split(','));
          // console.log(value);
          AIZ.plugins.bootstrapSelect('refresh');
          if(session_id=='item_options'){
            set_item_option_draft();
          }
        }
       
      })
      text_area.each(function(){
        let session_id= $(this).attr('id');
        let value     = sessionStorage.getItem(session_id);
        // $(this).text(value);
        // console.log(value)
        $(this).summernote('code', value);
        // $(this).val(value.split(','));
        // AIZ.plugins.bootstrapSelect('refresh');
      })
      // console.log(input_field);
      update_sku();
    }
    // update_sku();
    $(document).on('change','input#product_name',function(){
        update_sku();
    })
    function update_sku(){
        $.ajax({
           type:"POST",
           url:"<?=base_url('admins/products/sku_combination')?>",
           data:$('#choice_form').serialize(),
           success: function(data) {
              // console.log(data)
                $('#sku_combination').html(data);
                AIZ.uploader.previewGenerate();
                AIZ.plugins.fooTable();
                if (data.length > 1) {
                   $('.show-hide-div').hide();
                }
                else {
                    $('.show-hide-div').show();
                }
           },
           error:function(err){
               console.log(err.responseText);
           }
       });
    }
    $('#item_options').on('change',function(){
      set_item_option_draft();
      // update_sku();

    })
    function set_item_option_draft(){
      var selectedValues = $('#item_options').val();
      // console.log(selectedValues);
      $.post("<?=site_url('admins/products/add_item_options')?>",{"item_option_ids":selectedValues,"_token":AIZ.data.csrf},function(res){
          console.log(res);
        $('#unit_options').html(res);
        AIZ.plugins.fooTable();
        // update_sku();
      });
     
    }
    load_attributes();
    function load_attributes(){
      $.each($("#choice_attributes option:selected"), function(){
            add_more_customer_choice_option($(this).val(), $(this).text());
      });
      update_sku();
    }
    $('#choice_attributes').on('change', function() {
        $('#customer_choice_options').html(null);
        $.each($("#choice_attributes option:selected"), function(){
            add_more_customer_choice_option($(this).val(), $(this).text());
        });

        update_sku();
    });

    })
</script>