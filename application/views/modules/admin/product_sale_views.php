<div class="px-15px px-lg-25px">

    <div class="aiz-titlebar text-left mt-2 mb-3">
        <div class=" align-items-center">
            <h1 class="h3">Product sale report</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-body">
                    <form action="<?=site_url('admins/reports')?>" method="GET">
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Sort by Category :</label>
                            <div class="col-md-5">
                                <select id="demo-ease" class="aiz-selectpicker" name="category_id" required>
                                    <option value="all">All Category</option>
<?php foreach($CATEGORIES as $category) : ?>
                                    <option value="<?=$category->id?>" <?=$CATEGORY_ID==$category->id? 'selected' : '' ?>><?=$category->name?></option>
<?php endforeach ?>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <button class="btn btn-primary" type="submit">Filter</button>
                            </div>
                        </div>
                    </form>

                    <table class="table table-bordered aiz-table mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Product Name</th>
                                <th>Num of Sale</th>
                            </tr>
                        </thead>
                        <tbody>
<?php foreach($PRODUCTS as $product) : ?>
                            <tr>
                                <td><?=$product->id?></td>
                                <td><?=$product->name?></td>
                                <td><?=$product->num_of_sale?></td>
                            </tr>
<?php endforeach ?>
                        </tbody>
                    </table>
                    <div class="aiz-pagination mt-4">

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<script src="<?=base_url('assets/js/vendors.js')?>"></script>
<script src="<?=base_url('assets/js/aiz-core.js')?>"></script>