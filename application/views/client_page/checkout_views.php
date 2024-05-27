<section class="p-16">
    <p class="text-xl text-center font-medium mb-5">Checkout</p>
    <?php echo form_open('products/place_order') ?>
    <div class="grid grid-cols-2 gap-x-16">
        <div class="">
            <div class="flex flex-col space-y-5">
                <div class="flex justify-between">
                    <div>
                        <p class="text-base">First Name</p>
                        <input type="text" data-bill_add="bill_add-first_name" name="shipping_address[first_name]" value="" class="shipping-add appearance-none w-[345px] form-control rounded-lg focus:ring-0">
                    </div>
                    <div>
                        <p class="text-base">Last Name</p>
                        <input type="text" data-bill_add="bill_add-last_name" name="shipping_address[last_name]" value="" class="shipping-add appearance-none w-[345px] focus:outline-none form-control rounded-lg focus:ring-0">
                    </div>
                </div>
                <div>
                    <p>Company (required for business addresses)</p>
                    <input type="text" data-bill_add="bill_add-company_add" name="shipping_address[businees_add]" class="shipping-add form-control focus:ring-0">
                </div>
                <div>
                    <p>Address</p>
                    <input type="text" data-bill_add="bill_add-home_add" name="shipping_address[address]" class="shipping-add form-control focus:ring-0">
                </div>
                <div>
                    <p>Apartment, suite, etc (Optional)</p>
                    <input type="text" data-bill_add="bill_add-apartment" name="shipping_address[apartment]"  class="shipping-add form-control focus:ring-0">
                </div>
                <div class="flex justify-between">
                    <div>
                        <p>City</p>
                        <select data-bill_add="bill_add-city"  name="shipping_address[city]" class="shipping-add form-control w-[174px] appearance-none focus:ring-0">
                            <option value="">Select City</option>
                            <option value="tarlac">Tarlac</option>
                            <option value="naga">Naga</option>
                        </select>
                    </div>
                    <div>
                        <p>State/Region</p>
                        <select data-bill_add="bill_add-state" name="shipping_address[state]" class="shipping-add form-control w-[174px] appearance-none focus:ring-0">
                            <option value="">Select Region</option>
                            <option value="region 3">Region 3</option>
                        </select>
                    </div>
                    <div>
                        <p>Zipcode</p>
                        <input type="text" data-bill_add="bill_add-zipcode"  name="shipping_address[zipcode]" class="shipping-add form-control w-[174px] focus:ring-0">
                    </div>
                </div>
                <div>
                    <p class="after:content-['*'] after:text-red-500">Phone</p>
                    <input type="text" data-bill_add="bill_add-phone" name="shipping_address[phone]" class="shipping-add form-control focus:ring-0" value="03965872469">
                </div>
                <div>
                    <p class="">Telephone (Optional)</p>
                    <input type="text" data-bill_add="bill_add-telephone" name="shipping_address[telephone]" class="shipping-add form-control focus:ring-0" value="">
                </div>
                <div>
                    <p>Delivery Instruction</p>
                    <textarea name="shipping_address[instruction]" class="font-medium form-control focus:ring-0 appearance-none min-h-[171px] max-h-[171px]" cols="30" rows="30"></textarea>
                </div>
            </div>
            <div class="mt-16">
                <p class="text-2xl font-medium">Billing Address</p>
                <label>
                    <input type="checkbox" class="set_bill_add text-primary w-4 h-4 focus:ring-0">
                    <span>Same as Shipping Address</span>
                </label>
                <div class="flex flex-col space-y-5 mt-10">
                    <div class="flex justify-between">
                        <div>
                            <p class="text-base">First Name</p>
                            <input type="text" id="bill_add-first_name" name="billing_address[first_name]" value="" class="appearance-none border-primary focus:border-primary w-[345px] form-control rounded-lg focus:ring-0">
                        </div>
                        <div>
                            <p class="text-base">Last Name</p>
                            <input type="text" id="bill_add-last_name" name="billing_address[last_name]" value="" class="appearance-none border-primary focus:border-primary w-[345px] focus:outline-none form-control rounded-lg focus:ring-0">
                        </div>
                    </div>
                    <div>
                        <p>Company (required for business addresses)</p>
                        <input id="bill_add-company_add" name="billing_address[business_add]" type="text" class="border-primary focus:border-primary form-control focus:ring-0">
                    </div>
                    <div>
                        <p>Address</p>
                        <input type="text" id="bill_add-home_add" name="billing_address[address]" class="form-control focus:ring-0 border-primary focus:border-primary">
                    </div>
                    <div>
                        <p>Apartment, suite, etc (Optional)</p>
                        <input type="text" id="bill_add-apartment" name="billing_address[apartment]" class="form-control focus:ring-0 border-primary focus:border-primary">
                    </div>
                    <div class="flex justify-between">
                        <div>
                            <p>City</p>
                            <select id="bill_add-city" name="billing_address[city]" class="form-control w-[174px] appearance-none focus:ring-0 border-primary focus:border-primary">
                                <option value=""></option>
                                <option value="">Tarlac</option>
                            </select>
                        </div>
                        <div>
                            <p>State/Region</p>
                            <select id="bill_add-state" name="billing_address[state]" class="form-control w-[174px] appearance-none focus:ring-0 border-primary focus:border-primary">
                                <option value=""></option>
                                <option value="">Region 3</option>
                            </select>
                        </div>
                        <div>
                            <p>Zipcode</p>
                            <input id="bill_add-zipcode" type="text" name="billing_address[zipcode]" class="form-control w-[174px] focus:ring-0 border-primary focus:border-primary">
                        </div>
                    </div>
                    <div>
                        <p class="after:content-['*'] after:text-red-500">Phone</p>
                        <input id="bill_add-phone" type="text" name="billing_address[phone]" class="form-control focus:ring-0 border-primary focus:border-primary" value="">
                    </div>
                    <div>
                        <p class="">Telephone (Optional)</p>
                        <input type="text" id="bill_add-telephone" name="billing_address[telephone]" class="form-control focus:ring-0 border-primary focus:border-primary" value="">
                    </div>
            </div>
            </div>
        </div>
        <div>
            <p class="text-xl font-medium mb-5">Product Summary </p>
            <div class="flex flex-col space-y-5">
                <!-- 'assets/images/cart_product_image-1.png' -->
    <?php foreach($PRODUCTS as $product) :  ?>
                <div class="card p-5 rounded-lg ">
                    <div class="flex justify-between items-center">
                        <div class="grid grid-cols-2 w-[450px]">
                            <!-- <div class="flex items-center space-x-3">
                                <p class="text-2xl font-semibold">1</p>
                                <p>X</p>
                            </div> -->
                            <div>
                                <img class="max-w-[100px]" src="<?=base_url($product->file_name);?>" alt="">
                            </div>
                            <div>
                                <p><?=$product->name?></p>
            <?php if($product->quantity && is_array(json_decode($product->quantity))) : ?>
                <?php foreach(json_decode($product->quantity) as $quantity) : ?>
                        <?php if($quantity->quantity>0) : ?>
                                <p>Quantity/<?=$quantity->unit?>: <span class="font-semibold"><?=$quantity->quantity?></span></p>
                        <?php endif?>  
                    <?php endforeach?>
            <?php endif?>
                                <p class="font-bold">Item # <?=$product->item_number?></p>
                            </div>
                        </div>
                        <div>
                            <p class="text-2xl font-[800]"><span class="font-sans">₱</span> <?=number_format($product->price,'2')?></p>
                        </div>
                    </div>
                </div>
    <?php endforeach ?>
            </div>
            <div class="mt-16">
                <p>Gift Card or Discount Code</p>
                <div class="flex space-x-10 mt-5">
                    <input type="text" class="form-control h-[56px] rounded-xl" placeholder="Enter Promo Code">
                    <button class="btn h-[56px] rounded-lg border border-gray-300 w-[256px]">Appy</button>
                </div>
                <hr class="mt-2">
                <div class="my-3 flex flex-col space-y-5">
                    <div class="flex justify-between item-center">
                        <p>Subtotal</p>
                        <p class="font-semibold"><span class="font-sans">₱</span> <?=number_format($CHECKOUT_INFO->total_price,'2')?></p>
                    </div>
                    <div class="flex justify-between item-center">
                        <p>Shipping Fee</p>
                        <p class="font-semibold"> Free</p>
                    </div>
                </div>
                <hr class="mt-2">
                <div class="flex justify-between items-center mt-16">
                    <p class="text-[1.25rem]">Total</p>
                    <p class="font-semibold text-2xl"><span class="font-sans">₱</span> <?=number_format($CHECKOUT_INFO->total_price,'2')?></p>
                </div>
                <div class="mt-16">
                    <p class="text-2xl">Payment</p>
                    <p>Select Payment Methods</p>
                </div>
                <div class="flex justify-evenly mt-5">
                    <div class="relative cursor-pointer">
                        <p class="absolute text-md translate-y-1/2 font-semibold text-center w-full bg-primary text-white bottom-1/2">Coming Soon</p>
                        <img src="<?=base_url('assets/icons/visa_image.png')?>" alt="">
                    </div>
                    <div class="relative cursor-pointer">
                    <p class="absolute text-md translate-y-1/2 font-semibold text-center w-full bg-primary text-white bottom-1/2">Coming Soon</p>
                        <img src="<?=base_url('assets/icons/paypal_image.png')?>" alt="">
                    </div>
                    <div class="relative cursor-pointer">
                    <p class="absolute text-md translate-y-1/2 font-semibold text-center w-full bg-primary text-white bottom-1/2">Coming Soon</p>
                        <img src="<?=base_url('assets/icons/gcash_image.png')?>" alt="">
                    </div>
                    <div class="cursor-pointer">
                        <img src="<?=base_url('assets/icons/cod_image.png')?>" alt="">
                    </div>
                </div>
                <button class="block p-5 mt-10 btn w-[484px] m-auto border border-gray-300 font-semibold">Place Order</button>
            </div>
        </div>
    </div>
    <?php echo form_close()?>
</section>
<script>
    $(document).ready(function(){
        $('.set_bill_add').on('change',function(){
            // alert('sss');
            let is_same_as_shipping_add=$(this);
            let shipping_add=$('.shipping-add');
            shipping_add.each(function(){
                let bill_add_id=$(this).data('bill_add');
                let value=$(this).val();
                console.log(value);
                if(is_same_as_shipping_add.prop('checked')){
                    $('#'+bill_add_id).val(value);
                }else{
                    $('#'+bill_add_id).val('');
                }
                
            })
        })
    })
</script>