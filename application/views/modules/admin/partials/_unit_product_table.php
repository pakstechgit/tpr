<table id="table-unit_options" class="table table-bordered">
    <thead>
        <tr>
        <th>Unit Option</th>
        <th>Description</th>
        <th>Pieces</th>
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