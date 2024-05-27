<section class="px-28 my-16">
    <p class="text-center mb-16 text-2xl font-medium">Shopping Cart</p>
    <div class="flex space-x-10">
        <div class="w-full ">
            <div class="flex justify-center space-x-3 w-full    mb-3">
                <button class="btn w-full font-semibold px-14 py-0 border border-secondary">Select All</button>
                <button class="btn w-full font-semibold flex justify-center space-x-1 px-14 py-1 border border-secondary ">
                    <img src="<?=base_url('assets/icons/sm_heart-outline-black.svg')?>">
                    <span>Wishlist</span>
                </button>
                <button class="btn w-full font-semibold flex justify-center space-x-1 px-14 py-1 border border-secondary ">
                    <img src="<?=base_url('assets/icons/sm_trash_can-outline-black.svg')?>">
                    <span>Remove</span>
                </button>
            </div>
            <div class="flex flex-col  space-y-5 mb-5">
<?php foreach($PRODUCTS as $product) : ?>

                <div class="card p-8 flex justify-between w-full flex-row  ">
                    <div class="flex space-x-7 w-max items-start">
                        <input type="checkbox" value="<?=$product->id?>"  class="check-product text-primary mt-5 focus:outline-none focus:ring-0">
                        <a href="<?=site_url('products/item/'.$product->slug)?>">
                            <img class="w-full max-w-28 h-auto" src="<?=base_url($product->file_name)?>" alt="" srcset="">
                        </a>
                        <div class="flex flex-col space-y-7">
                            <div class="flex flex-col space-y-2">
                                <p class="font-bold max-w-[300px]"><?=$product->name?></p>
                                <p><?=$product->variation?></p>
                        <?php if($product->quantity && is_array(json_decode($product->quantity))) : ?>
                            <?php foreach(json_decode($product->quantity) as $quantity) : ?>
                                <?php if($quantity->quantity>0) : ?>
                                <p>Quantity/<?=$quantity->unit?>: <span class="font-semibold"><?=$quantity->quantity?></span></p>
                                <?php endif?>  
                            <?php endforeach?>
                        <?php endif?>
                                <!-- <p>Quantity/Box: Small</p> -->
                                <p class="font-bold">Item # <?=$product->item_number?></p>
                            </div>
                            <div class="flex space-x-3">
                                <a href="" class="underline text-gray-500 hover:text-black">Edit</a>
                                <a href="" class="underline text-gray-500 hover:text-black">Remove</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <p class=" text-2xl font-semibold"><span class="font-sans">₱</span> <?=number_format($product->price)?></p>
                    </div>
                </div>
<?php endforeach ?>
                
            </div>
        </div>
        <div class="w-full">
            <div class="card p-5 bg-gray-200 rounded-lg">
                <p class="text-xl">Gift Card or Discount Code </p>
                <div class="flex space-x-5 mt-10">
                    <input type="text" name="" class="form-control h-[56px]" placeholder="Enter Promo Code">
                    <button class="px-16 py-3 border border-gray-300 w-[233px] h-[56px] bg-white btn">Apply</button>
                </div>
                <p class="text-xl font-semibold mt-10">Order Summary</p>
                <div class="mt-5 flex flex-col space-y-10 text-xl">
                    <div class=" flex justify-between">
                        <p>Subtotal (<span class="item_count">0</span> items )</p>
                        <p class="font-semibold"><span class="font-sans">₱</span> <span id="sub_total_amount">0.00</span></p>
                    </div>
                    <div class=" flex justify-between">
                        <p>Shipping Fee</p>
                        <p class="font-semibold"><span class="font-sans">₱</span> <span>0.00</span></p>
                    </div>
                    <div class=" flex justify-between">
                        <p>Subtotal</p>
                        <p class="font-semibold"><span class="font-sans">₱</span> <span id="total_amount">0.00</span></p>
                    </div>
                </div>
                <div class="mt-5">
    <?php echo form_open("products/process_checkout") ?>
                    <button id="btn_checkout" disabled class="disabled:bg-gray-300 disabled:cursor-not-allowed h-[64px] block m-auto w-[484px] bg-white border border-gray-300">Proceed to Checkout (<span class="item_count">0</span>)</button>
                    <div id="hidden_field">

                    </div>              
    <?php echo form_close() ?>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    $(document).ready(function (){
        let checkout_cart=[];
        let token=$('meta[name="csrf-token"]').attr("content");
        $('input.check-product').on('change',function(){
            add_checkout();

        })
       function add_checkout(){
            checkout_cart=[];
            let product_to_checkout=$('input.check-product');
            product_to_checkout.each(function(){
                if($(this).prop('checked')){
                    checkout_cart.push($(this).val());
                }
            })
            $.post("<?=site_url('products/add_checkout')?>",{cart_id:checkout_cart,_token:token},function(res){
                if(res.length<=0){
                    $('#hidden_field').html("");
                    $('#btn_checkout').prop('disabled',true);
                    $('#sub_total_amount').text('0.00');
                    $('#total_amount').text('0.0');
                    $('.item_count').text('0');
                    return;
                }
                $('#hidden_field').html('<input type="hidden" name="cart_id" value="'+checkout_cart+'" />')
                $('#btn_checkout').prop('disabled',false);
                $('#sub_total_amount').text(res['total_price'].toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
                $('#total_amount').text(res['total_price'].toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
                $('.item_count').text(res['items_count']);
            },'json')
        }
    })
</script>