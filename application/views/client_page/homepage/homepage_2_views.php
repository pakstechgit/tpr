
<style>
    .dots-control .slick-dots{
        display:flex;
        width:100%;
        justify-content:start;
        align-items:center;
    }
    .dots-control .slick-dots li{
        background-color:#DBDBDC;
        width:12px;
        height:12px;
        border-radius:50%;
        margin:5px;
    }
    .dots-control .slick-dots li.slick-active{
        background-color:#FFFFFF;
    }
    .product_slide .slick-dots{
        left:0px;
    }
    .product_slide .slick-dots li button:before{
        content:'';
        width:15px;
        height:15px;
        background-color: #8f8f8f;
        opacity:1;
        border-radius:50%;
    }
    .product_slide .slick-dots li.slick-active button:before{
        content:'';
        background-color: #0235b5;
        color:red;
    }
    .feature_control_dots .slick-dots,
    .new_product_control_dots .slick-dots {
        display: flex;
        bottom: 0;
        width: 100%;
        justify-content: center;
        align-items: center;
    }
    
    .feature_control_dots .slick-dots li,
    .new_product_control_dots .slick-dots li {
        background-color: #8f8f8f;
        width: 15px;
        height: 15px;
        border-radius: 50%;
        margin: 5px;
    }
    
    .feature_control_dots .slick-dots li.slick-active,
    .new_product_control_dots .slick-dots li.slick-active {
        background-color: #0235b5;
    }
    .prev_price {
        position: relative;
    }
    
    .prev_price::after {
        content: "";
        position: absolute;
        left: 0;
        bottom: 50%;
        width: 100%;
        height: 1px;
        background-color: red;
    }
    
    
</style>


<section class="relative mb-12">
    <div class="absolute left-4 z-10  desktop:left-16 bottom-16">
        <button class="bg-white rounded-lg px-24 py-3 desktop:py-4 mb-12 hover:text-white hover:bg-primary font-bold">Shop Now</button>
        <div class="dots-control flex w-52">
            
        </div>
    </div>
    <div class="section-banner">
<?php if($HOME_BANNERS) { ?>
<?php foreach($HOME_BANNERS as $banner) : ?>
        <div class="relative">
             <img class="aspect-[16/7] w-full h-full desktop:h-auto object-cover" alt="slid 1" src="<?= $banner->image ?>" >
             <div class="absolute w-full h-full top-0" style="background-color: black;opacity: 0.4;z-index:5"></div>
             <div class="absolute top-4 left-4 w-3/5 desktop:w-1/2 desktop:left-16 desktop:top-24" style="z-index:12">
                <p class="p-0 text-20 desktop:text-50 text-white font-bold"><?=$banner->slogan?></p>
            </div>
        </div>
<?php endforeach ?>
<?php } else  { ?>
        <div class="relative">
             <img class="w-full h-400px desktop:h-auto object-cover" alt="slid 1" src="<?= base_url('assets_system/images/tpr_images/banner1.png') ?>" >
             <div class="absolute w-full h-full top-0" style="background-color: black;opacity: 0.4;z-index:5"></div>
             <div class="absolute top-4 left-4 w-3/5 desktop:w-1/2 desktop:left-16 desktop:top-24" style="z-index:12">
                <p class="p-0 text-20 desktop:text-50 text-white font-bold">PROVIDING THE BEST QUALITY PRODUCTS TRUSTED BY PROFFESSIONALS</p>
            </div>
        </div>
        <div class="relative">
             <img class="w-full h-400px desktop:h-auto object-cover" alt="slid 1" src="<?= base_url('assets_system/images/tpr_images/banner2.png') ?>" >
             <div class="absolute w-full h-full top-0" style="background-color: black;opacity: 0.4;z-index:5"></div>
             <div class="absolute top-4 left-4 w-3/5 desktop:w-1/2 desktop:left-16 desktop:top-24" style="z-index:12">
                <p class="p-0 text-20 desktop:text-50 text-white font-bold">PROVIDING THE BEST QUALITY PRODUCTS TRUSTED BY PROFFESSIONALS</p>
            </div>
        </div>
        <div class="relative">
             <img class="w-full h-400px desktop:h-auto object-cover" alt="slid 1" src="<?= base_url('assets_system/images/tpr_images/banner3.png') ?>" >
             <div class="absolute w-full h-full top-0" style="background-color: black;opacity: 0.4;z-index:5"></div>
             <div class="absolute top-4 left-4 w-3/5 desktop:w-1/2 desktop:left-16 desktop:top-24" style="z-index:12">
                <p class="p-0 text-20 desktop:text-50 text-white font-bold">PROVIDING THE BEST QUALITY PRODUCTS TRUSTED BY PROFFESSIONALS</p>
            </div>
        </div>
        <div class="relative">
             <img class="w-full h-400px desktop:h-auto object-cover" alt="slid 1" src="<?= base_url('assets_system/images/tpr_images/banner4.png') ?>" >
             <div class="absolute w-full h-full top-0" style="background-color: black;opacity: 0.4;z-index:5"></div>
             <div class="absolute top-4 left-4 w-3/5 desktop:w-1/2 desktop:left-16 desktop:top-24" style="z-index:12">
                <p class="p-0 text-20 desktop:text-50 text-white font-bold">PROVIDING THE BEST QUALITY PRODUCTS TRUSTED BY PROFFESSIONALS</p>
            </div>
        </div>
<?php } ?>

    </div>
</section> 
<section class="desktop:px-16">
    <h1 class="text-50   font-semibold text-center">Featured Products</h1>
    <div class="mb-4 relative">
        <hr class=" z-10 absolute h-0 border-secondary bottom-0 border-1 w-full">
        <ul class="z-50 space-x-20 nav nav-tabs  flex justify-center text-secondary flex-wrap  font-medium text-center" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist" 
        data-tabs-active-classes="text-primary font-bold border-b-1.5 hover:text-primary dark:text-white dark:hover:text-white border-primary dark:border-white">
<?php foreach( $FEATURED_TAB as $tab  ) : ?>
            <li class="z-10 flex justifty-center items-center" role="presentation">
                <button class="feature_tab nav-link inline-block uppercase text-lg p-4  rounded-t-lg" id="<?=$tab['tab_id']?>-tab" data-tabs-target="#<?=$tab['tab_id']?>" type="button" role="tab" aria-controls="<?=$tab['tab_id']?>" aria-selected="false">
                    <?=$tab['tab_name']?>
                </button>
            </li>
<?php endforeach ?>
            
        </ul>
    </div>
    <div id="default-tab-content" >
<?php foreach($FEATURED_CAT as $category) : ?>
        <div class="hidden p-4 rounded-lg tab-content" id="<?=$category['tab_id']?>" role="tabpanel" aria-labelledby="<?=$category['tab_id']?>-tab">
            <div class="feature_product_slide w-full product_slide p-16" id="feature_category-1">
<?php foreach($category['products'] as $item) {   ?>
                
                <div class="w-card min-w-328px h-511px border-2 border-secondary-100 product_card  m-4 bg-white border-0  rounded-2xl cursor-pointer  hover:shadow-card_shadow ">
                    <a href="<?=site_url('products/item/'.urlencode($item->slug))?>">
                        <img class="rounded-t-lg w-328px  h-328px max-h-328px w-full product_image_top rounded-2xl" src="<?= base_url($item->photos) ?>"
                        data-default_image="<?= base_url($item->photos) ?>"
                        data-thumbnail="<?= base_url($item->thumbnail) ?>"
                        alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 leading-6 tracking-wide text-base font-semibold tracking-tight text-gray-900 dark:text-white">
                                <?=$item->name?>
                            </h5>
                        </a>
                        <div>
                            <p class="text-gray-600 mb-2"><?=$item->brand?></p>
                            <p class="font-semibold text-dark mb-2"><span class="font-sans">₱</span> <?=$item->unit_price?></p>
                            <p class="text-dark">Only Extra Large </p>
                        </div>
                    </div>
                </div>
<?php } ?>
                 
            </div>
            <a href="<?=site_url('products/featured_products')?>"><h5 class="font-medium underline text-center text-xl mt-16">View All Products</h5></a>
        </div>
<?php endforeach ?>
        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="settings" role="tabpanel" aria-labelledby="settings-tab">
            
        </div>
        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
            <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Contacts tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
        </div>
    </div>
</section>
<section class="desktop:px-16 flex flex-col justify-evenly  mt-16 bg-no-repeat h-physician_care bg-cover
 bg-[url('<?=base_url( $PHYCIAN_CARE && isset($PHYCIAN_CARE->cover_image) ? $PHYCIAN_CARE->cover_image :'assets/images/physician_care_bg.jpg')?>')]">
    <div class="flex justify-between items-center">
        <h2 class="text-50 font-semibold">Physician Care</h2>
        <button class="btn uppercase bg-white px-14 py-3 font-semibold hover:bg-primary hover:text-white hover:delay-0">SHOP ALCOHOL PREP PODS</button>
    </div>
    <div class="physician_images flex justify-between">
<?php if($PHYCIAN_CARE && isset($PHYCIAN_CARE->images)) { ?>
<?php  foreach($PHYCIAN_CARE->images as $image) : ?>
    <?php if($image && !empty($image->image)) { ?>
        <div class="relative w-max">
            <div class="absolute w-full h-full top-0" style="background-color: black;opacity: 0.4;z-index:5"></div>
            <img class="object-cover min-w-522px min-h-334px max-h-334px" src="<?=  base_url( $image && !empty($image->image) ? $image->image : 'assets/images/home-sphygmomanometer.jpg')  ?>" >
            <p class="z-10 font-medium text-2xl text-white absolute bottom-5 left-5"><?=$image && !empty($image->title) ? $image->title :'' ?></p>
        </div>
    <?php } ?>
<?php endforeach?>
<?php } else { ?>
        <div class="relative w-max">
            <div class="absolute w-full h-full top-0" style="background-color: black;opacity: 0.4;z-index:5"></div>
            <img class="object-cover" src="<?= base_url('assets/images/home-sphygmomanometer.jpg') ?>" >
            <p class="z-10 font-medium text-2xl text-white absolute bottom-5 left-5">Sphygmomanometer</p>
        </div>
        <div class="relative w-max">
            <div class="absolute w-full h-full top-0" style="background-color: black;opacity: 0.4;z-index:5"></div>
            <img class="object-cover" src="<?= base_url('assets/images/home-thermometers.jpg') ?>" >
            <p class="z-10 font-medium text-2xl text-white absolute bottom-5 left-5">Thermometers</p>
        </div>
        <div class="relative w-max">
            <div class="absolute w-full h-full top-0" style="background-color: black;opacity: 0.4;z-index:5"></div>
            <img class="object-cover" src="<?= base_url('assets/images/home-stethoscope.jpg') ?>" >
            <p class="z-10 font-medium text-2xl text-white absolute bottom-5 left-5">Stethoscope</p>
        </div>
<?php } ?>
    </div>
</section>
<section class="desktop:px-16">
    <h1 class="text-50   font-semibold text-center mt-16">New Products</h1>
    <div class="p-4">
        <div class="new_product_slide product_slide p-16">
        <?php foreach($NEW_PRODUCTS as $item) {   ?>

            <div class="w-card min-w-328px h-511px border-2 border-secondary-100 product_card  m-4 bg-white border-0  rounded-2xl cursor-pointer  hover:shadow-card_shadow ">
                <a href="<?=site_url('products/item/'.urlencode($item->slug))?>">
                    <img class="rounded-t-lg w-328px  h-328px max-h-328px w-full product_image_top rounded-2xl" src="<?= base_url($item->photos) ?>"
                    data-default_image="<?= base_url($item->photos) ?>"
                    data-thumbnail="<?= base_url($item->thumbnail) ?>"
                    alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 leading-6 tracking-wide text-base font-semibold tracking-tight text-gray-900 dark:text-white">
                            <?=$item->name?>
                        </h5>
                    </a>
                    <div>
                        <p class="text-gray-600 mb-2"><?=$item->brand?></p>
                        <p class="font-semibold text-dark mb-2"><span class="font-sans">₱</span> <?=$item->unit_price?></p>
                        <p class="text-dark">Only Extra Large </p>
                    </div>
                </div>
            </div>
        <?php } ?>
        </div>
        <div class="w-1/4 relative m-auto new_product_control_dots">
            
        </div>
        <h5 class="font-medium underline text-center text-xl mt-16"><a href="<?= site_url('products/new_products') ?>">View All Products</a></h5>
    </div>
    
</section>
<section class="gauzes_sponges desktop:px-16 desktop:flex justify-evenly items-center mt-16">
    <div class="desktop:w-28.64% grid grid-cols-1 gap-46 h-max" >
        <p class="text-50 font-semibold text-center w-full">Gauzes & Sponges</p>
        <p class="text-22 leading-46 text-center">"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, 
        adipisci velit..." "There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain..."</p>
        <button class="btn hover:text-black hover:border-black hover:bg-white  uppercase h-60 rounded-lg w-full bg-primary py-1  text-white font-semibold">SHOP GAUZES & SPONGES</button>
    </div>
    <div class="grid desktop:grid-cols-2 gap-7">
        <div class="card" style="width:323px">
            <img src="<?= base_url('assets/images/card_header-1.jpg') ?>"
                class="w-full h-223 max-h-223 object-fit" alt="image header" />
            <div class="card-body bg-light">
                <p class="text-seminbold text-center text-23 font-semibold p-2">Save On Little Shoes
                </p>
                <p class="text-center text-sm leading-21">Spend $100 and
                    get 50% off a pair of
                    Smallbirds kids' shoes with code
                    KIDDOS at checkout.</p>
                <button class="btn block px-10 rounded-lg m-auto border-secondary mt-5 font-medium hover:bg-primary hover:text-white">Shop Now</button>
            </div>
        </div>
        <div class="card" style="width:323px">
            <img src="<?= base_url('assets/images/card_header-2.jpg') ?>"
                class="w-full h-223 max-h-223 object-fit" alt="image header" />
            <div class="card-body bg-light">
                <p class="text-seminbold text-center text-23 font-semibold p-2">Save On Little Shoes
                </p>
                <p class="text-center text-sm">Spend $100 and
                    get 50% off a pair of
                    Smallbirds kids' shoes with code
                    KIDDOS at checkout.</p>
                <button class="btn block px-10 rounded-lg m-auto border-secondary mt-5 font-medium hover:bg-primary hover:text-white">Shop Now</button>
            </div>
        </div>
        <div class="card" style="width:323px">
            <img src="<?= base_url('assets/images/card_header-3.jpg') ?>"
                class="w-full h-223 max-h-223 object-fit" alt="image header" />
            <div class="card-body bg-light">
                <p class="text-seminbold text-center text-23 font-semibold p-2">Save On Little Shoes
                </p>
                <p class="text-center text-sm">Spend $100 and
                    get 50% off a pair of
                    Smallbirds kids' shoes with code
                    KIDDOS at checkout.</p>
                <button class="btn block px-10 rounded-lg m-auto border-secondary mt-5 font-medium hover:bg-primary hover:text-white">Shop Now</button>
            </div>
        </div>
        <div class="card" style="width:323px">
            <img src="<?= base_url('assets/images/card_header-4.jpg') ?>"
                class="w-full h-223 max-h-223 object-fit" alt="image header" />
            <div class="card-body bg-light">
                <p class="text-seminbold text-center text-23 font-semibold p-2">Save On Little Shoes
                </p>
                <p class="text-center text-sm">Spend $100 and
                    get 50% off a pair of
                    Smallbirds kids' shoes with code
                    KIDDOS at checkout.</p>
                <button class="btn block px-10 rounded-lg m-auto border-secondary mt-5 font-medium hover:bg-primary hover:text-white">Shop Now</button>
            </div>
        </div>
    </div>
</section>
<section class="desktop:px-16">
    <h1 class="text-50   font-semibold text-center mt-16">Deals & Promos</h1>
    <div class=" mt-16 px-8">
        <div class="deal_promo flex justify-between   flex-wrap px-16">
<?php for($i=1;$i<5;$i++) { ?>
    <div class="card rounded-2xl h-500px mb-5 max-h-500px  position-relative cursor-pointer">
        <img src="<?= base_url('assets/images/promo_deal-'.$i.'.jpg') ?>"
            class="h-320px max-h-320px w-320px min-w-320px max-w-320pxobject-contain img-fluid" alt="image header" />
        <div class="card-body bg-light">
            <p class="font-semibold">Sharps Containers - 2gal</p>
            <p class="text-gray-600 m-0 mb-2">Dynarex</p>
            <div class="flex flex-wrap space-x-4 ">
                <p class="text-gray-500 p-0 m-0 font-medium ">
                    <span class="font-sans">₱</span>
                    <span class="position-relative prev_price">500.00-700.00</span>
                </p>
                <p class="text-black font-semibold ">
                    <span class="font-sans">₱</span>450.00-600.00
                </p>
            </div>
            <p class="p-0 m-0">3 sizes available</p>
        </div>
        <button class="btn text-red-600 absolute bg-white"
            style="font-size:0.938rem;top:20px;left:20px">10% off</button>
    </div>
<?php } ?>
        </div>
        <h5 class="font-medium underline text-center text-xl mt-16 cursor-pointer">View More Promos</h5>
    </div>
    
</section>
<?php $this->load->view('client_page/partials/_pre_footer_container') ?>

<div class="z-50 fixed bottom-5 right-0 me-16" id="chat_box_container">
    <div class="relative">
        <div id="arrow_up_scroll" class="flex border shadow-2xl border-white mb-3 justify-center cursor-pointer items-center rounded-full bg-primary h-16 w-16 ms-auto hover:shadow-3xl">
            <img src="<?=base_url('assets/icons/xs_arrow_up.svg')?>" />
        </div>
        <button class="btn bg-primary text-white rounded-xl flex space-x-3 px-3">
            <img src="<?=base_url('assets/icons/xs_messages-white.svg')?>" />
            <span>Chat</span>
        </button>
    </div>
</div>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
    $(document).ready(function(){
        
        $('.section-banner').slick({
            dots:true,
            autoplay: true,
            autoplaySpeed: 7000,
            prevArrow: false,
            nextArrow: false,
            infinite: true,
            swipe: false,
            pauseOnHover: false,
            appendDots: $('.dots-control'), // specify the container where you want to append the dots
              customPaging: function(slider, i) {
                // return custom HTML for each dot
                return ''; // customize the dot HTML as needed
              }
        });
        $('.new_product_slide').slick({
                dots:true,
                infinite:false,
                slidesToShow: 4,
                // slidesToScroll: 1,
                prevArrow: '<button type="button" class=" drop-shadow-2xl flex justify-center items-center rounded-full bg-white shadow-lg absolute" style="font-size:35px;top:50%;transform: translateY(-50%);left:-15px;width:50px;height:50px"><img src="<?=base_url('assets/icons/chevron-left.svg')?>"/></button>',
                nextArrow: '<button type="button" class=" drop-shadow-2xl rounded-full flex justify-center items-center bg-white shadow-lg absolute" style="font-size:35px;top:50%;transform: translateY(-50%);right:-15px;width:50px;height:50px"><img src="<?=base_url('assets/icons/chevron-right.svg')?>"/></button>',
                responsive: [
                    {
                        breakpoint: '767px',
                        settings: {
                            slidesToShow: 1
                        }
                    },
                    
                    {
                        breakpoint: 520,
                        settings: {
                            slidesToShow: 1
                        }
                    },
                    
                    // Add more breakpoints and settings as needed
                ]
                }).on('setPosition', function(event, slick) {
                    // Align slides to the left when there's only one item
                    if (slick.slideCount < 4) {
                        slick.$slideTrack.css('margin-left', '0px');
                    }
                });
        $('.feature_product_slide').each(function(index, element) {
              let id= $(element).attr('id');
            //   console.log(id)
              
        });
        feature_slick();
        function feature_slick(){
            $('.feature_product_slide').slick({
                dots:true,
                infinite:false,
                slidesToShow: 4,
                slidesToScroll: 1,
                prevArrow: '<button type="button" class=" drop-shadow-2xl flex justify-center items-center rounded-full bg-white shadow-lg absolute" style="font-size:35px;top:50%;transform: translateY(-50%);left:-15px;width:50px;height:50px"><img src="<?=base_url('assets/icons/chevron-left.svg')?>"/></button>',
                nextArrow: '<button type="button" class=" drop-shadow-2xl rounded-full flex justify-center items-center bg-white shadow-lg absolute" style="font-size:35px;top:50%;transform: translateY(-50%);right:-15px;width:50px;height:50px"><img src="<?=base_url('assets/icons/chevron-right.svg')?>"/></button>',
                // responsive: [
                //     {
                //         breakpoint: '767px',
                //         settings: {
                //             slidesToShow: 1
                //         }
                //     },
                    
                //     {
                //         breakpoint: 520,
                //         settings: {
                //             slidesToShow: 1
                //         }
                //     },
                    
                //     // Add more breakpoints and settings as needed
                // ]
                }).on('setPosition', function(event, slick) {
                    // Align slides to the left when there's only one item
                    if (slick.slideCount < 4) {
                        slick.$slideTrack.css('margin-left', '0px');
                    }
                });
                ;
            
        }
        
        $('.feature_tab').on('tab_show', async function(event) {
            let res_slick= await $('.feature_product_slide').slick('unslick');
            feature_slick()
        
    });
         $('.feature_tab').on('click', function (e) {
            // console.log($(this).attr('id'));
             $(this).trigger('tab_show');
            // $('#tab_text').val($(this).attr('id'));
            // $('.feature_product_slide').slick('setPosition');
            
          });
        $(document).on('scroll',function(){
            let page_height=$(document).height();
            if ($(this).scrollTop() >  4000) {
                // If yes, hide the element
                $('#chat_box_container').hide();
            } else {
                // If not, show the element
                $('#chat_box_container').show();
            }
        })
        $('#arrow_up_scroll').on('click',function(){
           $('html, body').animate({scrollTop: 0}, 'slow'); 
        })
        
        
        // $('.product_card').hover(function(){
        //         console.log('ssss');
        //         let image=$(this).find('.product_image_top');
        //         image.attr('src',image.data('thumbnail')).css('transition','src 5.5s ease-in-out')
        //     },function(){
        //         console.log('dddd');
        //         let image=$(this).find('.product_image_top');
        //         image.attr('src',image.data('default_image'))
        // })
    })
</script>