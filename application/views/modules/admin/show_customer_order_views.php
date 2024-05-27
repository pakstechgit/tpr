<div class="aiz-main-content">
    <div class="px-15px px-lg-25px">

        <div class="card">
            <div class="card-header">
                <h1 class="h2 fs-16 mb-0">Order Details</h1>
            </div>
            <div class="card-body">
                <div class="row gutters-5">
                    <div class="col text-md-left text-center">
                    </div>

                    <!--Assign Delivery Boy-->


                    <div class="col-md-3 ml-auto">
                        <label for="update_payment_status">Payment Status</label>
                        <select class="form-control aiz-selectpicker" data-minimum-results-for-search="Infinity"
                            id="update_payment_status">
                            <option value="unpaid" selected>
                                Un-Paid
                            </option>
                            <option value="paid">
                                Paid
                            </option>
                        </select>
                    </div>
                    <div class="col-md-3 ml-auto">
                        <label for="update_delivery_status">Delivery Status</label>
                        <input type="text" class="form-control" value="cancelled" disabled>
                    </div>
                    <div class="col-md-3 ml-auto">
                        <label for="update_tracking_code">
                            Tracking Code (optional)
                        </label>
                        <input type="text" class="form-control" id="update_tracking_code" value="12234453">
                    </div>
                </div>
                <div class="mb-3">
                    <!-- Todo QRCODE here -->
                <img class="" src="data:image/png;base64,<?= $this->qrcodelib->generate($ORDER->code) ?>" alt="" srcset="">
                </div>
                <div class="row gutters-5">
                    <div class="col text-md-left text-center">
                        <address>
                            <strong class="text-main">
                                <?=$ORDER->name?>
                            </strong><br>
                <?php if(json_decode($ORDER->shipping_address)) : ?>
                           <?= $ORDER->email?><br>
                            <?=json_decode($ORDER->shipping_address)->phone?><br>
                            <?=json_decode($ORDER->shipping_address)->address?>,
                            <?=ucfirst(json_decode($ORDER->shipping_address)->city)?>
                            <?=ucfirst(json_decode($ORDER->shipping_address)->state)?>
                            <br>
                            
                <?php endif?>
                        </address>
                    </div>
                    <div class="col-md-4 ml-auto">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="text-main text-bold">Order #</td>
                                    <td class="text-info text-bold text-right"> <?=$ORDER->code?></td>
                                </tr>
                                <tr>
                                    <td class="text-main text-bold">Order status</td>
                                    <td class="text-right">
                                        <span class="badge badge-inline badge-info">
                                            <?=ucfirst($ORDER->delivery_status)?>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-main text-bold">Order date </td>
                                    <td class="text-right"><?=date('Y-m-d h:i:s A',$ORDER->date)?></td>
                                </tr>
                                <tr>
                                    <td class="text-main text-bold">
                                        Total amount
                                    </td>
                                    <td class="text-right">
                                        ₱<?=number_format($ORDER->grand_total,'2')?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-main text-bold">Payment method</td>
                                    <td class="text-right">
                                    <?=ucwords(str_replace("_"," ",$ORDER->payment_type))?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-main text-bold">Additional Info</td>
                                    <td class="text-right">
                                        <?=$ORDER->additional_info?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <hr class="new-section-sm bord-no">
                <div class="row">
                    <div class="col-lg-12 table-responsive">
                        <table class="table-bordered aiz-table invoice-summary table">
                            <thead>
                                <tr class="bg-trans-dark">
                                    <th data-breakpoints="lg" class="min-col">#</th>
                                    <th width="10%">Photo</th>
                                    <th class="text-uppercase">Description</th>
                                    <th data-breakpoints="lg" class="text-uppercase">Delivery Type</th>
                                    <th data-breakpoints="lg" class="min-col text-uppercase text-center">
                                       Unit Details
                                    </th>
                                    <th data-breakpoints="lg" class="min-col text-uppercase text-right">
                                        Total</th>
                                </tr>
                            </thead>
                            <tbody>
<?php foreach($ORDER_DETAILS as $order_details) : ?>
                                <tr>
                                    <td><?=$order_details->id?></td>
                                    <td>
                                        <a href="" target="_blank">
                                            <img height="50"
                                                src="<?= base_url($order_details->file_name)?>">
                                        </a>
                                    </td>
                                    <td>
                                        <strong>
                                            <a href="" target="_blank"
                                                class="text-muted">
                                                <?=$order_details->product_name?>
                                            </a>
                                        </strong>
                                        <small>
                                            <?=$order_details->variant?>
                                        </small>
                                        <br>
                                        <!-- <small>
                                            SKU:
                                        </small> -->
                                    </td>
                                    <td>
                                        <?=ucwords(str_replace("_"," ",$order_details->shipping_type))?>
                                    </td>
                                    <td class="text-left">
<?php if(json_decode($order_details->quantity_details) && is_array(json_decode($order_details->quantity_details))) :  ?>
    <?php foreach(json_decode($order_details->quantity_details) as $quantity_detail ) : ?>
                                    <medium>Unit: <?=$quantity_detail->unit?></medium><br>
                                    <medium>Quantity: <?=$quantity_detail->quantity?></medium><br>
                                    <medium>Price: <?=number_format($quantity_detail->price,'2')?></medium><br>
    <?php endforeach?>   
<?php endif?>
                                    </td>
                                    <td class="text-center">
                                        ₱<?=$order_details->price?>
                                    </td>
                                </tr>
<?php endforeach ?>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="clearfix float-right">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>
                                    <strong class="text-muted">Sub Total :</strong>
                                </td>
                                <td>
                                    ₱<?=$ORDER->grand_total?>
                                </td>
                            </tr>
                            
                            <!-- <tr>
                                <td>
                                    <strong class="text-muted">Shipping :</strong>
                                </td>
                                <td>
                                    ₱0.00
                                </td>
                            </tr> -->
                            <!-- <tr>
                                <td>
                                    <strong class="text-muted">Coupon :</strong>
                                </td>
                                <td>
                                    ₱0.00
                                </td>
                            </tr> -->
                            <tr>
                                <td>
                                    <strong class="text-muted">Total :</strong>
                                </td>
                                <td class="text-muted h5">
                                    ₱<?=number_format($ORDER->grand_total,'2')?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- <div class="no-print text-right d-none">
                        <a href="" type="button"
                            class="btn btn-icon btn-light"><i class="las la-print"></i></a>
                    </div> -->
                </div>

            </div>
        </div>
    </div>
    <!-- <div class="bg-white text-center py-3 px-15px px-lg-25px mt-auto">
        <p class="mb-0">&copy; FAVORI Scents Ecommerce v7.1.0</p>
    </div> -->
</div><!-- .aiz-main-content -->
<script src="<?=base_url('assets/js/vendors.js')?>"></script>
<script src="<?=base_url('assets/js/aiz-core.js')?>"></script>