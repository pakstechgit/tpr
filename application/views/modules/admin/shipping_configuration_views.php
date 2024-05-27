<div class="px-15px px-lg-25px">

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0 h6">Select Shipping Method</h5>
                </div>
                <div class="card-body">
                    <form action="https://favori-dev.technos.app/admin/shipping_configuration/update" method="POST"
                        enctype="multipart/form-data">
                        
                        <div class="radio mar-btm">
                            <input id="product-shipping" class="magic-radio" type="radio" name="shipping_type"
                                value="product_wise_shipping" checked>
                            <label for="product-shipping">
                                <span>Product Wise Shipping Cost</span>
                                <span></span>
                            </label>
                        </div>
                        <div class="radio mar-btm">
                            <input id="flat-shipping" class="magic-radio" type="radio" name="shipping_type"
                                value="flat_rate">
                            <label for="flat-shipping">Flat Rate Shipping Cost</label>
                        </div>
                        <div class="radio mar-btm">
                            <input id="seller-shipping" class="magic-radio" type="radio" name="shipping_type"
                                value="seller_wise_shipping">
                            <label for="seller-shipping">Seller Wise Flat Shipping Cost</label>
                        </div>
                        <div class="radio mar-btm">
                            <input id="area-shipping" class="magic-radio" type="radio" name="shipping_type"
                                value="area_wise_shipping">
                            <label for="area-shipping">Area Wise Flat Shipping Cost</label>
                        </div>
                        <div class="radio mar-btm">
                            <input id="weight-shipping" class="magic-radio" type="radio" name="shipping_type"
                                value="carrier_wise_shipping">
                            <label for="weight-shipping">
                                Carrier Wise Shipping Cost
                            </label>
                        </div>
                        <div class="form-group mb-0 text-right">
                            <button type="submit" class="btn btn-sm btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0 h6">Note</h5>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                            1. Product Wise Shipping Cost calculation: Shipping cost is calculate by addition of each
                            product shipping cost.
                        </li>
                        <li class="list-group-item">
                            2. Flat Rate Shipping Cost calculation: How many products a customer purchase, doesn&#039;t
                            matter. Shipping cost is fixed.
                        </li>
                        <li class="list-group-item">
                            3. Seller Wise Flat Shipping Cost calculation: Fixed rate for each seller. If customers
                            purchase 2 product from two seller shipping cost is calculated by addition of each seller
                            flat shipping cost.
                        </li>
                        <li class="list-group-item">
                            4. Area Wise Flat Shipping Cost calculation: Fixed rate for each area. If customers purchase
                            multiple products from one seller shipping cost is calculated by the customer shipping area.
                            To configure area wise shipping cost go to <a
                                href="https://favori-dev.technos.app/admin/cities">Shipping Cities</a>.
                        </li>
                        <li class="list-group-item">
                            5. Carrier Based Shipping Cost calculation: Shipping cost calculate in addition with
                            carrier. In each carrier you can set free shipping cost or can set weight range or price
                            range shipping cost. To configure carrier based shipping cost go to <a
                                href="https://favori-dev.technos.app/admin/carriers">Shipping Carriers</a>.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0 h6">Flat Rate Cost</h5>
                </div>
                <form action="https://favori-dev.technos.app/admin/shipping_configuration/update" method="POST"
                    enctype="multipart/form-data">
                    <div class="card-body">
                        <input type="hidden" name="_token" value="naNGa8ugi6x9YlxNQva8sD246FlkTuQBck4rlF1O"> <input
                            type="hidden" name="type" value="flat_rate_shipping_cost">
                        <div class="form-group">
                            <div class="col-lg-12">
                                <input class="form-control" type="text" name="flat_rate_shipping_cost" value="50">
                            </div>
                        </div>
                        <div class="form-group mb-0 text-right">
                            <button type="submit" class="btn btn-sm btn-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0 h6">Note</h5>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                            1. Flat rate shipping cost is applicable if Flat rate shipping is enabled.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0 h6">Shipping Cost for Admin Products</h5>
                </div>
                <form action="https://favori-dev.technos.app/admin/shipping_configuration/update" method="POST"
                    enctype="multipart/form-data">
                    <div class="card-body">
                        <input type="hidden" name="_token" value="naNGa8ugi6x9YlxNQva8sD246FlkTuQBck4rlF1O"> <input
                            type="hidden" name="type" value="shipping_cost_admin">
                        <div class="form-group">
                            <div class="col-lg-12">
                                <input class="form-control" type="text" name="shipping_cost_admin" value="50">
                            </div>
                        </div>
                        <div class="form-group mb-0 text-right">
                            <button type="submit" class="btn btn-sm btn-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0 h6">Note</h5>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                            1. Shipping cost for admin is applicable if Seller wise shipping cost is enabled.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?=base_url('assets/js/vendors.js')?>"></script>
<script src="<?=base_url('assets/js/aiz-core.js')?>"></script>