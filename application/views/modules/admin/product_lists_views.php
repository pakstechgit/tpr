<div class="px-15px px-lg-25px">
  <div class="aiz-titlebar text-left mt-2 mb-3">
    <div class="row align-items-center">
      <div class="col-auto">
        <h1 class="h3">All products</h1>
      </div>
      <div class="col text-right">
        <a href="<?=base_url('admins/products/create')?>" class="btn btn-circle btn-info">
          <span>Add New Product</span>
        </a>
      </div>
    </div>
  </div>
  <br />
  <div class="card">
    <form class="" id="sort_products" action="" method="GET">
      <div class="card-header row gutters-5 d-none">
        <div class="col">
          <h5 class="mb-md-0 h6">All Product</h5>
        </div>

        <div class="dropdown mb-2 mb-md-0">
          <button
            class="btn border dropdown-toggle"
            type="button"
            data-toggle="dropdown"
          >
            Bulk Action
          </button>
          <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="#" onclick="bulk_delete()">
              Delete selection</a
            >
          </div>
        </div>

        <div class="col-md-2 ml-auto">
          <div
            class="dropdown bootstrap-select form-control form-control-sm aiz- mb-2 mb-md-0"
          >
            <select
              class="form-control form-control-sm aiz-selectpicker mb-2 mb-md-0"
              id="user_id"
              name="user_id"
              onchange="sort_products()"
              tabindex="-98"
            >
              <option value="">All Sellers</option>
              <!-- <option value="3">Mr. Seller</option> -->
              <option value="9">admin</option></select
            >
          </div>
        </div>
        <div class="col-md-2 ml-auto">
          <div
            class="dropdown bootstrap-select form-control form-control-sm aiz- mb-2 mb-md-0"
          >
            <select
              class="form-control form-control-sm aiz-selectpicker mb-2 mb-md-0"
              name="type"
              id="type"
              onchange="sort_products()"
              tabindex="-98"
            >
              <option value="">Sort by</option>
              <option value="rating,desc">Rating (High &gt; Low)</option>
              <option value="rating,asc">Rating (Low &gt; High)</option>
              <option value="num_of_sale,desc">
                Num of Sale (High &gt; Low)
              </option>
              <option value="num_of_sale,asc">
                Num of Sale (Low &gt; High)
              </option>
              <option value="unit_price,desc">
                Base Price (High &gt; Low)
              </option>
              <option value="unit_price,asc">
                Base Price (Low &gt; High)
              </option>
            </select>
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-group mb-0">
            <input
              type="text"
              class="form-control form-control-sm"
              id="search"
              name="search"
              placeholder="Type &amp; Enter"
            />
          </div>
        </div>
      </div>

      <div class="card-body">
        <table
          class="table aiz-table mb-0 footable footable-1 breakpoint-xl"
          style=""
        >
          <thead>
            <tr class="footable-header">
              <th style="display: table-cell">
                <div class="form-group">
                  <div class="aiz-checkbox-inline">
                    <label class="aiz-checkbox">
                      <input type="checkbox" class="check-all" />
                      <span class="aiz-square-check"></span>
                    </label>
                  </div>
                </div>
              </th>
              <th style="display: table-cell">Name</th>
              <!--<th data-breakpoints="lg" style="display: table-cell">-->
              <!--  Added By-->
              <!--</th>-->
              <th data-breakpoints="sm" style="display: table-cell">Info</th>
              <th data-breakpoints="md" style="display: table-cell">
                Total Stock
              </th>
              <!--<th data-breakpoints="lg" style="display: table-cell">-->
              <!--  Todays Deal-->
              <!--</th>-->
              <!--<th data-breakpoints="lg" style="display: table-cell">-->
              <!--  Published-->
              <!--</th>-->
              <th data-breakpoints="lg" style="display: table-cell">
                Featured
              </th>
              <th data-breakpoints="lg" style="display: table-cell">
                New
              </th>
              <th
                data-breakpoints="sm"
                class="text-right"
                style="display: table-cell"
              >
                Options
              </th>
            </tr>
          </thead>
          <tbody>
<?php foreach($PRODUCTS as $product) { ?>
              <tr>
                    <td>
                        <div class="form-group d-inline-block">
                            <label class="aiz-checkbox">
                                <input type="checkbox" class="check-one" name="id[]" value="{{$product->id}}">
                                <span class="aiz-square-check"></span>
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="row gutters-5 w-200px w-md-300px mw-100">
                            <div class="col-auto">
                                <img src="<?=base_url($product->thumbnail_img)?>" alt="Image" class="size-50px img-fit">
                            </div>
                            <div class="col">
                                <span class="text-muted text-truncate-2"><?=$product->name?></span>
                            </div>
                        </div>
                    </td>
                    <td>
                        <strong>Num of Sale:</strong><?=$product->num_of_sale?> times</br>
                        <strong>Base Price:</strong> <?='&#8369;'.$product->unit_price?></br>
                        <strong>Rating:</strong> <?=$product->rating?></br>
                    </td>
                    <td>
<?php $has_variant=false ?>
<?php if($product->product_variants) { ?>
    <?php foreach($product->product_variants as $variant) { ?>
        <?php if($variant->variant) { ?>
            <?php $has_variant=true ?>
                    <?=$variant->variant.' - '.$variant->qty.'<br>'?>
        <?php } ?>
    <?php } ?>
                        
<?php } if(!$has_variant) { ?>
            <?=$product->current_stock?>
<?php if($product->current_stock<=$product->low_stock_quantity) { ?>
                        <span class="badge badge-inline badge-danger">Low</span>
<?php } ?>
<?php } ?>


                    </td>
                    <!--<td>-->
                    <!--    <label class="aiz-switch aiz-switch-success mb-0">-->
                    <!--        <input onchange="update_todays_deal(this)" value="<?=$product->id ?>" type="checkbox" <?php if ($product->todays_deal == 1) echo "checked"; ?> >-->
                    <!--        <span class="slider round"></span>-->
                    <!--    </label>-->
                    <!--</td>-->
                    <!--<td>-->
                    <!--    <label class="aiz-switch aiz-switch-success mb-0">-->
                    <!--        <input onchange="update_published(this)" value="<?= $product->id ?>" type="checkbox" <?php if ($product->published == 1) echo "checked"; ?> >-->
                    <!--        <span class="slider round"></span>-->
                    <!--    </label>-->
                    <!--</td>-->
                    <td>
                        <label class="aiz-switch aiz-switch-success mb-0">
                            <input onchange="update_featured(this)" value="<?= $product->id ?>" type="checkbox" <?php if ($product->featured == 1) echo "checked"; ?> >
                            <span class="slider round"></span>
                        </label>
                    </td>
                    <td>
                        <label class="aiz-switch aiz-switch-success mb-0">
                            <input onchange="update_new(this)" value="<?= $product->id ?>" type="checkbox" <?php if ($product->new == 1) echo "checked"; ?> >
                            <span class="slider round"></span>
                        </label>
                    </td>
                    <td class="text-right">
                        <a class="btn btn-soft-success btn-icon btn-circle btn-sm"  href="<?=site_url('products/item/'.urlencode($product->slug))?>" target="_blank" title="View">
                            <i class="las la-eye"></i>
                        </a>
                        
                        <a class="btn btn-soft-primary btn-icon btn-circle btn-sm" href="<?=site_url('admins/products/edit/'.$product->id)?>" title="Edit">
                            <i class="las la-edit"></i>
                        </a>
                        <a class="btn btn-soft-warning btn-icon btn-circle btn-sm" href="<?=site_url('admins/products/setup_options/'.$product->id)?>" title="">
                               <i class="las la-cog"></i>
                        </a>
                        <a href="#" class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete" data-href="<?=site_url('admins/products/destroy/'.$product->id)?>" title="Delete">
                            <i class="las la-trash"></i>
                        </a>
                    </td>
              </tr>
<?php } ?>
          </tbody>
        </table>
        <!---->
        <div class="aiz-pagination" >
            <?php echo $links ?>
        </div>
      </div>
    </form>
  </div>
</div>
<!-- <div class="bg-white text-center py-3 px-15px px-lg-25px mt-auto">
    <p class="mb-0">&copy;</p>
</div> -->
<div id="delete-modal" class="modal fade">
    <div class="modal-dialog modal-sm modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title h6">Delete Confirmation</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body text-center">
                <p class="mt-1 fs-14">Are you sure to delete this?</p>
                <button type="button" class="btn btn-secondary rounded-0 mt-2" data-dismiss="modal">Cancel</button>
                <a href="" id="delete-link" class="btn btn-primary rounded-0 mt-2">Delete</a>
            </div>
        </div>
    </div>
</div><!-- /.modal -->
<script src="<?=base_url('assets/js/vendors.js')?>"></script>
<script src="<?=base_url('assets/js/aiz-core.js')?>"></script>
<script>
    function update_featured(el){
        if(el.checked){
            var status = 1;
        }
        else{
            var status = 0;
        }
        $.post("<?=site_url('admins/products/featured')?>", {_token:AIZ.data.csrf,table:'tbl_products', id:el.value, status:status}, function(data){
           
            if(data == 1){
                AIZ.plugins.notify('success', 'Featured product updated successfully');
            }
            else{
                AIZ.plugins.notify('danger', 'Something went wrong!');
            }
        });
    }
    function update_new(el){
        if(el.checked){
            var status = 1;
        }
        else{
            var status = 0;
        }
        $.post("<?=site_url('admins/products/assign_to_new')?>", {_token:AIZ.data.csrf,table:'tbl_products', id:el.value, status:status}, function(data){
           
            if(data == 1){
                AIZ.plugins.notify('success', 'Product updated successfully');
            }
            else{
                AIZ.plugins.notify('danger', 'Something went wrong!');
            }
        });
    }
</script>
