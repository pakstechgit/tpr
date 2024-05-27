<?php if($PRODUCTS) : ?>
<table class="table table-bordered aiz-table">
  <thead>
  	<tr>
  		<td width="50%">
          <span>Product</span>
  		</td>
      <td data-breakpoints="lg" width="20%">
          <span>Base Price</span>
  		</td>
  		<td data-breakpoints="lg" width="20%">
          <span>Discount</span>
  		</td>
      <td data-breakpoints="lg" width="10%">
          <span>Discount Type</span>
      </td>
  	</tr>
  </thead>
  <tbody>
<?php $index=0; foreach($PRODUCTS as $product ) : ?>
        <input type="hidden" name="discount[<?=$index?>][product_id]" value="<?=$product->id?>" />
        <tr>
            <td>
              <div class="from-group row">
                <div class="col-auto">
                  <img class="size-60px img-fit" src="<?=base_url($product->thumbnail)?>">
                </div>
                <div class="col">
                  <span><?=$product->name?></span>
                </div>
              </div>
            </td>
            <td>
                <span><?=$product->unit_price?></span>
            </td>
            <td>
                <input type="number" lang="en" name="discount[<?=$index?>][discount]" value="<?=$product->discount? $product->discount : '0.00' ?>" min="0" step="1" class="form-control" required>
            </td>
            <td>
                <select class="form-control aiz-selectpicker" name="discount[<?=$index?>][discount_type]?>">
                  <option value="amount">Flat</option>
                  <option value="percent">Percent</option>
                </select>
            </td>
        </tr>
<?php $index+=1; ?>
<?php endforeach ?>
  </tbody>
</table>
<?php endif ?>