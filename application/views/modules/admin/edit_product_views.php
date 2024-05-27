<div class="px-15px px-lg-25px">
    <div class="aiz-titlebar text-left mt-2 mb-3">
      <h5 class="mb-0 h6">Edit Product</h5>
    </div>
    <div class="">
      <!-- Error Meassages -->
    <?php echo form_open('admins/products/update/'.$PRODUCT->id,array('class'=>'form form-horizontal mar-top','id'=>'choice_form')) ?>
      <!--<form class="form form-horizontal mar-top" action="<?=base_url('products/update_product/'.$PRODUCT->id)?>"-->
      <!--  method="POST" enctype="multipart/form-data" id="choice_form">-->
      <input type="hidden" name="id" value="<?=$PRODUCT->id?>" />
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
                    <input type="text" class="form-control" name="name" value="<?=$PRODUCT->name?>" placeholder="Product Name"
                      onchange="update_sku()" required />
                  </div>
                </div>
                <div class="form-group row" id="category">
                  <label class="col-md-3 col-from-label">Category <span class="text-danger">*</span></label>
                  <div class="col-md-8">
                    <select class="form-control aiz-selectpicker" data-selected-text-format="count" multiple name="category_id[]" id="category_id"
                      data-live-search="true" required>
                      <?php generate_options_add($CATEGORIES, 0, 0,json_decode($PRODUCT->category_id));?>
                    </select>
                  </div>
                </div>
                <div class="form-group row" id="brand">
                  <label class="col-md-3 col-from-label">Brand</label>
                  <div class="col-md-8">
                    <select class="form-control aiz-selectpicker" name="brand_id" id="brand_id" data-live-search="true">
                      <option value="">Select Brand</option>
<?php foreach($BRANDS as $brand) : ?>
                        <option value="<?=$brand->id?>" <?=$PRODUCT->brand_id==$brand->id? 'selected' : '' ?>><?=$brand->name?></option>
<?php endforeach ?>
                    </select>
                  </div>
                </div>
                <div class="form-group row" id="market_segment">
                  <label class="col-md-3 col-from-label">Market Segment</label>
                  <div class="col-md-8">
                    <select class="form-control aiz-selectpicker" name="market_segment_id[]" id="market_segement_id" 
                    data-live-search="true" data-selected-text-format="count" multiple>
                      <option value="">Select Market Segments</option>
<?php foreach($MARKET_SEGMENTS as $segment) : ?>
                        <option value="<?=$segment->id?>" <?= is_array(json_decode($PRODUCT->market_segment_id)) && in_array($segment->id,json_decode($PRODUCT->market_segment_id)) ? 'selected' : '' ?> ><?=$segment->name?></option>
<?php endforeach ?>
                    </select>
                  </div>
                </div>
                <div class="form-group row" <?=isset($PRODUCT->product_variants) && $PRODUCT->product_variants? 'style="display:none"' : '' ?>>
                  <label class="col-md-3 col-from-label">Unit</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" value="<?=$PRODUCT->unit?>" name="unit" placeholder="Unit (e.g. KG, Pc etc)" />
                  </div>
                </div>
                <div class="form-group row" <?=isset($PRODUCT->product_variants) && $PRODUCT->product_variants? 'style="display:none"' : '' ?>>
                  <label class="col-md-3 col-from-label">Weight <small>(In Kg)</small></label>
                  <div class="col-md-8">
                    <input type="number" class="form-control" value="<?=$PRODUCT->weight?>" name="weight" step="0.01" value="0.00"
                      placeholder="0.00" />
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-md-3 col-from-label">Minimum Purchase Qty
                    <span class="text-danger">*</span></label>
                  <div class="col-md-8">
                    <input type="number" lang="en" class="form-control" value="<?=$PRODUCT->min_qty?>" name="min_qty" value="1" min="1" required />
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-md-3 col-from-label">Tags <span class="text-danger">*</span></label>
                  <div class="col-md-8">
                    <input type="text" class="form-control aiz-tag-input" value="<?=$PRODUCT->tags?>" name="tags[]"
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
                    <div class="input-group" data-toggle="aizuploader" data-type="image" >
                      <div class="input-group-prepend">
                        <div class="input-group-text bg-soft-secondary font-weight-medium">
                          Browse
                        </div>
                      </div>
                      <div class="form-control file-amount">Choose File</div>
                      <input type="hidden" name="photos" value="<?=$PRODUCT->photos?>"  class="selected-files" />
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
                      <input type="hidden" name="thumbnail_img" value="<?=$PRODUCT->thumbnail_img?>" class="selected-files" />
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
            <!--          <option value="dailymotion" <?=$PRODUCT->video_provider =='dailymotion' ? 'selected': '' ?>>Dailymotion</option>-->
            <!--          <option value="vimeo" <?=$PRODUCT->video_provider =='vimeo' ? 'selected': '' ?>>Vimeo</option>-->
            <!--        </select>-->
            <!--      </div>-->
            <!--    </div>-->
            <!--    <div class="form-group row">-->
            <!--      <label class="col-md-3 col-from-label">Video Link</label>-->
            <!--      <div class="col-md-8">-->
            <!--        <input type="text" class="form-control" value="<?=$PRODUCT->video_link ?>" name="video_link" placeholder="Video Link" />-->
            <!--        <small class="text-muted">Use proper link without extra parameter. Don&#039;t use-->
            <!--          short share link/embeded iframe code.</small>-->
            <!--      </div>-->
            <!--    </div>-->
            <!--  </div>-->
            <!--</div>-->
            <div class="card">
              <div class="card-header">
                <h5 class="mb-0 h6">Product Attributes</h5>
              </div>
              <div class="card-body">
                <div class="form-group row gutters-5">
                  <div class="col-md-3">
                    <input type="text" class="form-control" value="Colors" disabled />
                  </div>
                  <div class="col-md-8">
                    <select class="form-control aiz-selectpicker" data-live-search="true"
                      data-selected-text-format="count" name="colors[]" id="colors" multiple <?=empty(json_decode($PRODUCT->colors)) ? 'disabled' : ''?> >
<?php foreach($COLORS as $color) : ?>
                      <option value="<?=$color->code?>"
                        <?= in_array($color->code, json_decode($PRODUCT->colors)) ? 'selected' : ''  ?>
                        data-content="<span><span class='size-15px d-inline-block mr-2 rounded border' style='background:<?=$color->code?>'></span><span><?=$color->name?></span></span>">
                      </option>
<?php endforeach ?>
                    </select>
                  </div>
                  <div class="col-md-1">
                    <label class="aiz-switch aiz-switch-success mb-0">
                      <input value="1" type="checkbox" name="colors_active" <?=!empty(json_decode($PRODUCT->colors)) ? 'checked' : ''?> />
                      <span></span>
                    </label>
                  </div>
                </div>
                <div class="form-group row gutters-5">
                  <div class="col-md-3">
                    <input type="text" class="form-control" value="Unit Options" disabled />
                  </div>
                  <div class="col-md-8">
                    <select name="item_options[]" id="item_options" class="form-control aiz-selectpicker"
                      data-selected-text-format="count" data-live-search="true" multiple
                      data-placeholder="Item Options">
<?php foreach($ITEM_OPTIONS as $option) : ?>
                        <option value="<?=$option->id?>" <?= json_decode($PRODUCT->item_options) && in_array($option->id,json_decode($PRODUCT->item_options)) ? 'selected' : '' ?>><?=$option->name?></option>
<?php endforeach ?>
                    </select>
                  </div>
                </div>
                <div class="form-group row gutters-5">
                  <div class="col-md-3">
                    <input type="text" class="form-control" value="Attributes" disabled />
                  </div>
                  <div class="col-md-8">
                    <select name="choice_attributes[]" id="choice_attributes" class="form-control aiz-selectpicker"
                      data-selected-text-format="count" data-live-search="true" multiple
                      data-placeholder="Choose Attributes">
<?php foreach($ATTRIBUTES as $attribute) : ?>
                        <option value="<?=$attribute->id?>" <?= in_array($attribute->id,json_decode($PRODUCT->attributes))? 'selected' : '' ?>><?=$attribute->name?></option>
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
                <div id="unit_options" class="show-hide-div">
        <?php if(!$PRODUCT->product_variants) : ?>
                      <table id="table-unit_options" class="table table-bordered">
                        <thead>
                          <tr>
                            <th>Unit Option</th>
                            <th>Description</th>
                            <th>Quantity Deduction</th>
                            <th>Price</th>
                          </tr>
                        </thead>
                        <tbody id="tbody-unit_options">
                  <?php if( $PRODUCT->item_option_values && json_decode($PRODUCT->item_option_values)) : ?>
                      <?php foreach(json_decode($PRODUCT->item_option_values) as $index => $option) : ?>
                        <tr>
                            <td>
                                <input type='hidden' name='item_option_values[<?=$index?>][name]' value='<?=$option->name?>' class='form-control'>
                                <input type='text' value='<?=$option->name?>' disabled class='form-control'>
                            </td>
                            <td>
                                <input type='text' name='item_option_values[<?=$index?>][unit]' value="<?=$option->unit?>" class='form-control'>
                            </td>
                            <td>
                                <input type='number' name='item_option_values[<?=$index?>][pieces]' value="<?=$option->pieces?>" class='form-control'>
                            </td>
                            <td>
                                <input type='number' name='item_option_values[<?=$index?>][price]' value="<?=$option->price?>" class='form-control'>
                            </td>
                        </tr>
                      <?php endforeach?>
                  <?php endif ?>
                        </tbody>
                      </table>
        <?php endif?>
        <medium>Note: <span class="font-weight-bold">Quantity Deduction</span> is the number of item to be deducted from the total current stocks.</medium>
                    </div>
                <div class="customer_choice_options" id="customer_choice_options">
<?php foreach (json_decode($PRODUCT->choice_options) as $key => $choice_option): ?>
        <?php $attribute=$this->admin_product_model->GET_DATA_ROW('tbl_attributes','id',$choice_option->attribute_id) ?>
        <?php $attr_value=$this->admin_product_model->GET_ATTRIBUTE_VALUES($choice_option->attribute_id) ?>
                    <div class="form-group row">
                        <div class="col-lg-3">
                            <input type="hidden" name="choice_no[]" value="<?=$choice_option->attribute_id?>">
                            <input type="text" class="form-control" name="choice[]" value="<?=$attribute? $attribute->name : '' ?>" placeholder="Choice Title" disabled>
                        </div>
                        <div class="col-lg-8">
                            
                            <select class="form-control aiz-selectpicker attribute_choice" data-live-search="true" name="choice_options_<?=$choice_option->attribute_id?>[]" multiple>
            <?php foreach($attr_value as $row) :?>
                                <option value="<?=$row->value?>" <?= isset($choice_option->values) && in_array($row->value,$choice_option->values)? 'selected' : '' ?> >
                                    <?=$row->value?>
                                </option>
            <?php endforeach ?>
                            </select>
                        </div>
                    </div>
<?php endforeach; ?>
                </div>
              </div>
            </div>
            <div class="card">
                <div class="card-header">
                  <h5 class="mb-0 h6">Product Configuration</h5>
                </div>
                <div class="card-body">
                    <div class="form-group row show-hide-div " <?=isset($PRODUCT->product_variants) && $PRODUCT->product_variants? 'style="display:none"' : '' ?>>
                      <label class="col-md-3 col-from-label"> Item Number </label>
                      <div class="col-md-6">
                        <input type="text" placeholder="" value="<?=$PRODUCT->item_number?>" name="item_number" class="form-control" />
                      </div>
                    </div>
                  <div class="form-group row">
                    <label class="col-md-3 col-from-label">Unit price <span class="text-danger">*</span></label>
                    <div class="col-md-6">
                      <input type="number" value="<?=$PRODUCT->unit_price?>" lang="en" min="0" value="0" step="0.01" placeholder="Unit price"
                        name="unit_price" class="form-control" required />
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-3 control-label" for="start_date">Discount Date Range</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control aiz-date-range" value="<?= date('d-m-Y H:i:s',$PRODUCT->discount_start_date).' to '.date('d-m-Y H:i:s',$PRODUCT->discount_end_date)?>" name="date_range" placeholder="Select Date"
                        data-time-picker="true" data-format="DD-MM-Y HH:mm:ss" data-separator=" to " autocomplete="off" />
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label class="col-md-3 col-from-label">Discount <span class="text-danger">*</span></label>
                    <div class="col-md-6">
                      <input type="number" lang="en" min="0" value="<?=$PRODUCT->discount?>" step="0.01" placeholder="Discount" name="discount"
                        class="form-control" required />
                    </div>
                    <div class="col-md-3">
                      <select class="form-control aiz-selectpicker" name="discount_type">
                        <option value="amount">Flat</option>
                        <option value="percent" <?= $PRODUCT->discount_type=='percent'? 'selected':''?> >Percent</option>
                      </select>
                    </div>
                  </div>

                    <div class="form-group row show-hide-div" <?=isset($PRODUCT->product_variants) && $PRODUCT->product_variants? 'style="display:none"' : '' ?>>
                      <label class="col-md-3 col-from-label">Quantity <span class="text-danger">*</span></label>
                      <div class="col-md-6">
                        <input type="number" lang="en" min="0" value="<?=$PRODUCT->current_stock?>" step="1" placeholder="Quantity"
                          name="current_stock" class="form-control" required />
                      </div>
                    </div>
                    <!--<div class="form-group row">-->
                    <!--  <label class="col-md-3 col-from-label"> SKU </label>-->
                    <!--  <div class="col-md-6">-->
                    <!--    <input type="text" placeholder="SKU" name="sku" class="form-control" />-->
                    <!--  </div>-->
                    <!--</div>-->
                  <!--<div class="form-group row">-->
                  <!--  <label class="col-md-3 col-from-label"> External link </label>-->
                  <!--  <div class="col-md-9">-->
                  <!--    <input type="text" placeholder="External link" value="<?=$PRODUCT->external_link?>" name="external_link" class="form-control" />-->
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
                  <div class="sku_combination" id="sku_combination">
  <?php if($PRODUCT->product_variants) { $index=0; ?>
                      <table class="table table-bordered aiz-table">
                          <thead>
                              <tr>
                                  <td class="text-center">
                                      Variant
                                  </td>
                          
                                  <td class="text-center" data-breakpoints="lg">
                                      Item Number
                                  </td>
                                  <td class="text-center">
                                      Item Price
                                  </td>
          <?php if($UNIT_OPTIONS) :?>
                <?php foreach($UNIT_OPTIONS as $unit_option) :?>
                                <td class="text-center" data-breakpoints="xl"><?=$unit_option->name?></td>
                <?php endforeach?>
          <?php endif ?>
                                  <td class="text-center">
                                    Unit
                                  </td>
                                  <td class="text-center">
                                    Weight(In Kg)
                                  </td>
                                  <td class="text-center" data-breakpoints="lg">
                                      Quantity
                                  </td>
                                  <td class="text-center" data-breakpoints="lg">
                                      Photo
                                  </td>
                              </tr>
                          </thead>
                          <tbody>
  <?php foreach($PRODUCT->product_variants as $stock) { ?>
      <?php if($stock->variant) {  ?>
                          <tr class="variant">
                          
                              <td>
                                  <input type="hidden" name="variant_stock[<?=$index?>][variant]>" value="<?= $stock->variant ?>" />
                                  <input type="hidden" name="variant_stock[<?=$index?>][product_id]>" value="<?=$stock->product_id?>" />
                                  <label for="" class="control-label"><?php echo $stock->variant; ?></label>
                              </td>
                              <td>
                                  <input type="text" name="variant_stock[<?=$index?>][item_number]>" value="<?=$stock->item_number?>" class="form-control">
                              </td>
                              <td>
                                  <input type="number" lang="en" name="variant_stock[<?=$index?>][price]" value="<?= $stock && $stock->price ? $stock->price :$unit_price?>" min="0" step="0.01" class="form-control" required>
                              </td>
                              <?php if($stock->unit_options && json_decode($stock->unit_options)): ?>
            <?php foreach(json_decode($stock->unit_options) as $index_j => $option) : ?>
                        <td>
                            <input type="hidden" name="variant_stock[<?=$index?>][unit_options][<?=$index_j?>][name]" value="<?=$option->name?>">
                            <div class="form-group row gutters-5">
                                <div class="col-md-3">
                                    <input type="text" class="form-control"  value="Description" disabled />
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="variant_stock[<?=$index?>][unit_options][<?=$index_j?>][description]" value="<?=$option->description?>" />
                                </div>
                            </div>
                            <div class="form-group row gutters-5">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" value="Quantity Deduction"  disabled />
                                </div>
                                <div class="col-md">
                                    <input type="number" class="form-control" value="<?=$option->pieces?>" name="variant_stock[<?=$index?>][unit_options][<?=$index_j?>][pieces]" />
                                </div>
                            </div>
                            <div class="form-group row gutters-5">
                                <div class="col-md-3">
                                    <input type="text" class="form-control" value="Price" disabled />
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" value="<?=$option->price?>" name="variant_stock[<?=$index?>][unit_options][<?=$index_j?>][price]"/>
                                </div>
                            </div>
                        </td>
            <?php endforeach ?>
    <?php endif ?>
                              <td>
                                  <input type="text" name="variant_stock[<?=$index?>][unit]>" value="<?=$stock->unit?>" class="form-control" require/>
                              </td> 
                              <td>
                                  <input type="number" lang="en" name="variant_stock[<?=$index?>][weight]" value="<?= $stock && $stock->weight ? $stock->weight :'0.0'?>" min="0" step="0.01" class="form-control" required>
                              </td>
                              <td>
                                  <input type="number" lang="en" name="variant_stock[<?=$index?>][qty]" value="<?= $stock && $stock->qty ? $stock->qty :'10'?>" min="0" step="1" class="form-control" required>
                              </td>
                              <td>
                                  <div class="input-group" data-toggle="aizuploader" data-type="image">
                                      <div class="input-group-prepend">
                                          <div class="input-group-text bg-soft-secondary font-weight-medium">Browse</div>
                                      </div>
                                      <div class="form-control file-amount text-truncate">Choose File</div>
                                      <input type="hidden" name="variant_stock[<?=$index?>][image]" value="<?= $stock && $stock->image ? $stock->image  : '' ?>" class="selected-files">
                                  </div>
                                  <div class="file-preview box sm">
                      <?php if($stock && $stock->image) { ?>
                                    <div class="d-flex justify-content-between align-items-center mt-2 file-preview-item" data-id="20" title="shop_product_3.jpg">
                                      <div class="align-items-center align-self-stretch d-flex justify-content-center thumb">
                                        <img src="<?=base_url($stock->file_name)?>" class="img-fit">
                                      </div>
                                      <div class="col body">
                                        <h6 class="d-flex">
                                          <span class="text-truncate title"><?=$stock->file_original_name?></span>
                                          <span class="flex-shrink-0 ext">.<?=$stock->extension?></span>
                                        </h6>
                                        <p><?=$stock->file_size?> Bytes</p>
                                      </div>
                                      <div class="remove">
                                        <button class="btn btn-sm btn-link remove-attachment" type="button">
                                          <i class="la la-close"></i>
                                        </button>
                                      </div>
                                    </div>
                    <?php } ?>
                                  </div>
                              </td>
                          </tr>
          <?php } ?>
      <?php $index++; } ?>
  <?php } ?>
                              
                          </tbody>
                      </table>
                  </div>
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
                    <textarea class="aiz-text-editor" name="description"><?=$PRODUCT->description?></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-md-3 col-from-label">Card Description</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" value="<?=$PRODUCT->card_description?>" name="card_description" value="">
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
                      <input type="radio" name="shipping_type" value="free" <?=$PRODUCT->shipping_type=='free'? 'checked' : ''  ?> />
                      <span></span>
                    </label>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-md-6 col-from-label">Flat Rate</label>
                  <div class="col-md-6">
                    <label class="aiz-switch aiz-switch-success mb-0">
                      <input type="radio" name="shipping_type" <?=$PRODUCT->shipping_type=='flat_rate'? 'checked' : ''  ?> value="flat_rate" />
                      <span></span>
                    </label>
                  </div>
                </div>

                <div class="flat_rate_shipping_div" style="display: none">
                  <div class="form-group row">
                    <label class="col-md-6 col-from-label">Shipping cost</label>
                    <div class="col-md-6">
                      <input type="number" lang="en" min="0" value="<?=$PRODUCT->shipping_cost?>" step="0.01" placeholder="Shipping cost"
                        name="flat_shipping_cost"  class="form-control" required />
                    </div>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-md-6 col-from-label">Is Product Quantity Mulitiply</label>
                  <div class="col-md-6">
                    <label class="aiz-switch aiz-switch-success mb-0">
                      <input type="checkbox" name="is_quantity_multiplied" value="1" <?=$PRODUCT->is_quantity_multiplied=='1'? 'checked' : '' ?> />
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
                  <input type="number" name="low_stock_quantity" value="<?=$PRODUCT->low_stock_quantity?>" min="0" step="1" class="form-control" />
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
                      <input type="checkbox" <?=$PRODUCT->featured=='1'? 'checked' : '' ?>  name="featured" value="1" />
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
                  Update
                </button>
              </div>
            </div>
          </div>
        </div>
        <?php echo form_close() ?>
      <!--</form>-->
    </div>
  </div>
  <div class="bg-white text-center py-3 px-15px px-lg-25px mt-auto">
    <p class="mb-0">&copy;</p>
  </div>
 
<script src="<?=base_url('assets/js/vendors.js')?>"></script>
<script src="<?=base_url('assets/js/aiz-core.js')?>"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script type="text/javascript">
    $(document).ready(async function(){
        async function load_attribute_options() {
            console.log(1);
            try {
                let attr_id = [];
                let product_attr = <?= json_encode(json_decode($PRODUCT->choice_options, true)) ?>;
                console.log(product_attr);
        
                $("#choice_attributes option:selected").each(function () {
                    let selectedValue = $(this).val();
                    let matchingProductAttr = product_attr.find(e => e.attribute_id === selectedValue);
                    let values = matchingProductAttr ? matchingProductAttr.values : [];
        
                    attr_id.push({
                        'value': selectedValue,
                        'text': $(this).text(),
                        'product_attr': values
                    });
                });
        
                let sorted_attr_id = await attr_id.sort((a, b) => a['value'] - b['value']);
                console.log(sorted_attr_id);
        
                // Assuming add_more_customer_choice_option is a synchronous function
                await sorted_attr_id.forEach(e => add_more_customer_choice_option(e.value, e.text,e.product_attr)); 
            } catch (e) {
                console.log(e);
            }
            finally {
                  update_sku();
            }
        }

        // let res = await load_attribute_options();
        
    $(document).ready(function(){
        // update_sku();
        $('.remove-files').on('click', function(){
            $(this).parents(".col-md-4").remove();
        });
    });
//         $('form').bind('submit', function (e) {
// 		if ( $(".action-btn").attr('attempted') == 'true' ) {
// 			//stop submitting the form because we have already clicked submit.
// 			e.preventDefault();
// 		}
// 		else {
// 			$(".action-btn").attr("attempted", 'true');
// 		}
//         // Disable the submit button while evaluating if the form should be submitted
//         // $("button[type='submit']").prop('disabled', true);
        
//         // var valid = true;

//         // if (!valid) {
//             // e.preventDefault();
            
//             ////Reactivate the button if the form was not submitted
//             // $("button[type='submit']").button.prop('disabled', false);
//         // }
//     });
    //$('form').validate();
    
    $("[name=shipping_type]").on("change", function (){
        $(".flat_rate_shipping_div").hide();

        if($(this).val() == 'flat_rate'){
            $(".flat_rate_shipping_div").show();
        }

    });

    function add_more_customer_choice_option(i, name,product_attr=[]){
        $.ajax({
            // headers: {
            //     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            // },
            type:"POST",
            url:"<?=site_url('admins/products/add-more-choice-option')?>",
            data:{
               attribute_id: i,
               _token:AIZ.data.csrf,
               product_attr:product_attr
            },
            success: function(data) {
                var obj = JSON.parse(data);
                // console.log(obj);
                $('#customer_choice_options').append('\
                <div class="form-group row">\
                    <div class="col-md-3">\
                        <input type="hidden" name="choice_no[]" value="'+i+'">\
                        <input type="text" class="form-control" name="choice[]" value="'+name+'" placeholder="Choice Title" readonly>\
                    </div>\
                    <div class="col-md-8">\
                        <select class="form-control aiz-selectpicker attribute_choice" data-live-search="true" name="choice_options_'+ i +'[]" multiple>\
                            '+obj+'\
                        </select>\
                    </div>\
                </div>');
                AIZ.plugins.bootstrapSelect('refresh');
           }
       });


    }
    $('#item_options').on('change',function(){
      var selectedValues = $(this).val();
      console.log(selectedValues);
      $.post("<?=site_url('admins/products/add_item_options')?>",{"item_option_ids":selectedValues,"_token":AIZ.data.csrf},function(res){
          console.log(res);
        $('#unit_options').html(res);
        AIZ.plugins.fooSpecificTable('#table-unit_options');
        // AIZ.plugins.fooTable();
        update_sku();
      })
    })
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
    function update_sku(){
        
        $.ajax({
           type:"POST",
           url:"<?=base_url('admins/products/edit_sku_combination')?>",
           data:$('#choice_form').serialize(),
           success: function(data) {
              let temp_data=data;
            //   console.log(JSON.parse(temp_data));
            //   return;
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

    $('#choice_attributes').on('change', function() {
        $('#customer_choice_options').html(null);
        $.each($("#choice_attributes option:selected"), function(){
            add_more_customer_choice_option($(this).val(), $(this).text());
        });

        update_sku();
    });

    })
</script>
