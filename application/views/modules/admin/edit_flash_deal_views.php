<div class="px-15px px-lg-25px">

    <div class="row">
        <div class="col-lg-10 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0 h6">Flash Deal Information</h5>
                </div>
                <div class="card-body">
<?php echo form_open('admins/marketings/update_flash_deals/'.urlencode($this->technos_encryption->encryptData($FLASH_DEAL->id))) ?>
                        <div class="form-group row">
                            <label class="col-sm-3 control-label" for="name">Title</label>
                            <div class="col-sm-9">
                                <input type="text" value="<?=$FLASH_DEAL->title?>" placeholder="Title" id="name" name="title" class="form-control"
                                    required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 control-label" for="background_color">Background Color
                                <small>(Hexa-code)</small></label>
                            <div class="col-sm-9">
                                <input type="text" placeholder="#FFFFFF" value="<?=$FLASH_DEAL->background_color?>" id="background_color" name="background_color"
                                    class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 control-label" for="name">Text Color</label>
                            <div class="col-lg-9">
                                <select name="text_color" id="text_color" class="form-control aiz-selectpicker"
                                    required>
                                    <option value="">Select One</option>
                                    <option value="white"   <?=$FLASH_DEAL->text_color=='white'? 'selected' : ''?>>White</option>
                                    <option value="dark"    <?=$FLASH_DEAL->text_color=='dark'? 'selected' : ''?>>Dark</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="signinSrEmail">Banner</label>
                            <div class="col-md-9">
                                <div class="input-group" data-toggle="aizuploader" data-type="image">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text bg-soft-secondary font-weight-medium">Browse</div>
                                    </div>
                                    <div class="form-control file-amount">Choose File</div>
                                    <input type="hidden" name="banner" class="selected-files" value="<?=$FLASH_DEAL->banner?>">
                                </div>
                                <div class="file-preview box sm">
                                </div>
                                <span class="small text-muted">This image is shown as cover banner in flash deal details
                                    page.</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 control-label" for="start_date">Date</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control aiz-date-range" name="date_range"
                                    placeholder="Select Date" data-time-picker="true" data-format="DD-MM-Y HH:mm:ss"
                                    data-separator=" to " value="<?=date('d-m-Y H:i:s',$FLASH_DEAL->start_date).' to '.date('d-m-Y H:i:s',$FLASH_DEAL->end_date)?>" autocomplete="off" required>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label class="col-sm-3 control-label" for="products">Products</label>
                            <div class="col-sm-9">
                                <select data-flash_deal_id="<?=$FLASH_DEAL->id?>" name="products[]" id="products" class="form-control aiz-selectpicker" multiple
                                    required data-placeholder="Choose Products" data-live-search="true"
                                    data-selected-text-format="count">
<?php foreach($PRODUCTS as $product) : ?>
                                    <option value="<?=$product->id?>" <?= in_array($product->id,$FLASH_PRODUCTS_IDS) ? 'selected' : '' ?>><?=$product->name?></option>
<?php endforeach?>
                                </select>
                            </div>
                        </div>

                        <div class="alert alert-danger">
                            If any product has discount or exists in another flash deal, the discount will be replaced
                            by this discount &amp; time limit.
                        </div>
                        <br>

                        <div class="form-group" id="discount_table">
                            
                        </div>

                        <div class="form-group mb-0 text-right">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
<?php echo form_close() ?>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?=base_url('assets/js/vendors.js')?>"></script>
<script src="<?=base_url('assets/js/aiz-core.js')?>"></script>
<script type="text/javascript">
    $(document).ready(function(){
        var product_ids     = $('#products').val();
        var flash_deal_id   = $('#products').data('flash_deal_id');
        $.post("<?=site_url('admins/marketings/get_product_discount_edit')?>", {_token: AIZ.data.csrf, product_ids:product_ids,flash_deal_id:flash_deal_id}, function(data){
            $('#discount_table').html(data);
            // console.log(data);
            AIZ.plugins.fooTable();
        });
        $('#products').on('change', function(){
            var product_ids = $('#products').val();
            if(product_ids.length > 0){
                $.post("<?=site_url('admins/marketings/get_product_discount_edit')?>", {_token: AIZ.data.csrf, product_ids:product_ids,flash_deal_id:flash_deal_id}, function(data){
                    $('#discount_table').html(data);
                    AIZ.plugins.fooTable();
                });
            }
            else{
                $('#discount_table').html(null);
            }
        });
    });
</script>