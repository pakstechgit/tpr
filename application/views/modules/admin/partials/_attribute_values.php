<?php if (count($combinations) > 0 && !empty($combinations[0])): ?>
    
    <table class="table table-bordered aiz-table">
        <thead>
            <tr>
                <td <?=$item_options? 'rowspan="2"' : '' ?> class="text-center">
                    Variant
                </td>
                <td <?=$item_options? 'rowspan="2"' : '' ?> class="text-center" data-breakpoints="lg">
                    Item Number
                </td>
            <?php if(!$item_options) : ?>
                <td <?=$item_options? 'rowspan="2"' : '' ?> class="text-center">
                    Item Price
                </td>
            <?php endif?>
    <?php if($item_options) :?>
            <?php foreach($item_options as $unit_option):?>
                <td class="text-center" data-breakpoints="xl"><?=$unit_option->name?></td>
            <?php endforeach ?>
    <?php endif?>
                <td   class="text-center">
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
            <?php $index=0;?>
            <?php foreach ($combinations as $key => $combination): ?>
                <?php
                $sku = '';
                foreach (explode(' ', $product_name) as $key => $value) {
                    $sku .= substr($value, 0, 1);
                }

                $str = '';
                foreach ($combination as $key => $item) {
                    if ($key > 0) {
                        $str .= '-' . str_replace(' ', '', $item);
                        $sku .= '-' . str_replace(' ', '', $item);
                    } else {
                        if ($colors_active == 1) {
                            $color_name = $this->admin_product_model->GET_COLOR_NAME($item)->name;
                            $str .= $color_name;
                            $sku .= '-' . $color_name;
                        } else {
                            $str .= str_replace(' ', '', $item);
                            $sku .= '-' . str_replace(' ', '', $item);
                        }
                    }
                    // $stock = $this->admin_model->GET_STOCK_DATA($str);
                }
                ?>
                <?php if (strlen($str) > 0): ?>
                    <tr class="variant">
                        
                        <td>
                            <input type="hidden" name="variant_stock[<?=$index?>][variant]>" value="<?=$str?>" />
                            <label for="" class="control-label"><?php echo $str; ?></label>
                        </td>
                        <td>
                            <input type="text" lang="en" name="variant_stock[<?=$index?>][item_number]" value=""  class="form-control" required>
                        </td>
                <?php if(!$item_options) : ?>
                        <td>
                            <input type="number" lang="en" name="variant_stock[<?=$index?>][price]" value="<?php echo $unit_price; ?>" min="0" step="0.01" class="form-control" required>
                        </td>
                <?php endif ?>
                        <?php if($item_options): ?>
            <?php foreach($item_options as $index_j => $option) : ?>
                        <td>
                            <input type="hidden" name="variant_stock[<?=$index?>][unit_options][<?=$index_j?>][name]" value="<?=$option->name?>">
                            <div class="form-group row gutters-5">
                                <div class="col-md-3">
                                    <input type="text" class="form-control"  value="Description" disabled />
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="variant_stock[<?=$index?>][unit_options][<?=$index_j?>][description]" value="" />
                                </div>
                            </div>
                            <div class="form-group row gutters-5">
                                <div class="col-md-5">
                                    <input type="text" class="form-control" value="Quantity Deduction"  disabled />
                                </div>
                                <div class="col-md">
                                    <input type="number" class="form-control" value="" name="variant_stock[<?=$index?>][unit_options][<?=$index_j?>][pieces]" />
                                </div>
                            </div>
                            <div class="form-group row gutters-5">
                                <div class="col-md-3">
                                    <input type="text" class="form-control" value="Price" disabled />
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" value="" name="variant_stock[<?=$index?>][unit_options][<?=$index_j?>][price]"/>
                                </div>
                            </div>
                        </td>
                        <?php endforeach ?>
                <?php endif ?>
                        <td>
                            <input type="text" lang="en" name="variant_stock[<?=$index?>][unit]" value=""  class="form-control" >
                        </td>
                        <td>
                            <input type="number" lang="en" name="variant_stock[<?=$index?>][weight]" value="" min="0" step="0.01" class="form-control" >
                        </td>
                        <td>
                            <input type="number" lang="en" name="variant_stock[<?=$index?>][qty]" value="10" min="0" step="1" class="form-control" required>
                        </td>
                        <td>
                            <div class="input-group" data-toggle="aizuploader" data-type="image">
                                <div class="input-group-prepend">
                                    <div class="input-group-text bg-soft-secondary font-weight-medium">Browse</div>
                                </div>
                                <div class="form-control file-amount text-truncate">Choose File</div>
                                <input type="hidden" name="variant_stock[<?=$index?>][image]" class="selected-files">
                            </div>
                            <div class="file-preview box sm"></div>
                        </td>
                    </tr>
                <?php endif; ?>
            <?php $index=$index+1; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>
