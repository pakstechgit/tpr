<html>
    <?php $this->load->view('templates/head_template'); ?>
<div class="aiz-main-content">
    <div class="px-15px px-lg-25px">
        <div class="aiz-titlebar text-left mt-2 mb-3">
            <div class="text-md-right">
                <a href="<?=base_url('products/digital_create')?>" class="btn btn-circle btn-info">
                    <span>Add New Digital Product</span>
                </a>
            </div>
        </div>

        <div class="card">
            <div class="card-header row gutters-5">
                <div class="col text-center text-md-left">
                    <h5 class="mb-md-0 h6">Digital Products</h5>
                </div>
                <div class="col-md-4">
                    <form class="" id="sort_digital_products" action="" method="GET">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" id="search" name="search"
                                placeholder="Type name &amp; Enter" />
                        </div>
                    </form>
                </div>
            </div>
            <div class="card-body">
                <table class="table aiz-table mb-0" style="color:black">
                    <thead>
                        <tr>
                            <th data-breakpoints="lg">#</th>
                            <th width="30%">Name</th>
                            <th data-breakpoints="lg">Added By</th>
                            <th data-breakpoints="lg">Photo</th>
                            <th data-breakpoints="lg">Base Price</th>
                            <th data-breakpoints="lg">Todays Deal</th>
                            <th data-breakpoints="lg">Published</th>
                            <th data-breakpoints="lg">Featured</th>
                            <th data-breakpoints="lg">Options</th>
                        </tr>
                    </thead>
                    <tbody>
<?php foreach($C_PRODUCTS as $product) { ?>
                        <tr>
                            <td>1</td>
                            <td>
                                <a href=""
                                    class="text-muted"><b><?=$product->product_name?></b></a>
                            </td>
                            <td><?=$product->added_by?></td>
                            <td>
                                <!--<img src="https://favori-dev.technos.app/public/uploads/all/Qe3laA4LmuCL8Rspuqf6I8lRMEhrzJrTBW9F2Gg1.png"-->
                                <!--    alt="Image" class="w-50px" />-->
                            </td>
                            <td><?=$product->unit_price?></td>
                            <td>
                                <label class="aiz-switch aiz-switch-success mb-0">
                                    <input onchange="update_todays_deal(this)"  value="<?=$product->id?>" <?=$product->todays_deal!=0?'checked' : ''?> type="checkbox" />
                                    <span class="slider round"></span>
                                </label>
                            </td>
                            <td>
                                <label class="aiz-switch aiz-switch-success mb-0">
                                    <input onchange="update_published(this)" value="<?=$product->id?>" <?=$product->published!=0?'checked' : ''?> type="checkbox" />
                                    <span class="slider round"></span>
                                </label>
                            </td>
                            <td>
                                <label class="aiz-switch aiz-switch-success mb-0">
                                    <input onchange="update_featured(this)" value="<?=$product->id?>" <?=$product->featured!=0?'checked' : ''?> type="checkbox" />
                                    <span class="slider round"></span>
                                </label>
                            </td>
                            <td class="text-right">
                                <a class="btn btn-soft-primary btn-icon btn-circle btn-sm"
                                    href="<?=base_url('products/edit_product/'.$product->id)?>"
                                    title="Edit">
                                    <i class="las la-edit"></i>
                                </a>
                                <a href="#" class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete"
                                    data-href="https://favori-dev.technos.app/admin/digitalproducts/destroy/192"
                                    title="Delete">
                                    <i class="las la-trash"></i>
                                </a>
                                <a class="btn btn-soft-primary btn-icon btn-circle btn-sm"
                                    href=""
                                    title="Download">
                                    <i class="las la-download"></i>
                                </a>
                            </td>
                        </tr>
<?php } ?>
                    </tbody>
                </table>
                <div class="aiz-pagination"></div>
            </div>
        </div>
    </div>
</div>
<script src="<?=base_url('assets/js/vendors.js')?>" ></script>
<script src="<?=base_url('assets/js/aiz-core.js')?>" ></script>
</html>