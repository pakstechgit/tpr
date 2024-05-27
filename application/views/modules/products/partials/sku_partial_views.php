<table class="table table-bordered aiz-table footable footable-2 breakpoint breakpoint-md">
    <thead>
        <tr class="footable-header">
          <td class="text-center" style="display: table-cell">
            Variant
          </td>
          <td class="text-center" style="display: table-cell">
            Variant Price
          </td>
          <td class="text-center" data-breakpoints="lg" style="display: none">
            SKU
          </td>
          <td class="text-center" data-breakpoints="lg" style="display: none">
            Quantity
          </td>
          <td class="text-center" data-breakpoints="lg" style="display: none">
            Photo
          </td>
        </tr>
    </thead>
    <tbody>
<?php foreach($C_COLORS as $color) { ?>
        <tr>
            <td><?=$color?></td>
        </tr>
<?php }?>
    </tbody>
</table>