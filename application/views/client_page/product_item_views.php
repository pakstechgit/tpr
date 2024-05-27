<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style>
    .swiper {
        /* width: 600px; */
        height: 838px;
    }
    .mySwiper .swiper-slide img{
        width:160px !important;
        height: 160px !important;
    }
    .mySwiper .swiper-button-prev {
      left: 10px;
      top: 50%;
      transform: translateY(-50%);
    }

    .mySwiper .swiper-button-next {
      right: 10px;
      top: 50%;
      transform: translateY(-50%);
    }
    </style>
</head>
<section class="p-16 w-full">
    <p class="text-secondary-200">Home / Products / Sharps Container</p>
    <div class="flex justify-between space-x-5 w-full mt-5">
        <div class="image_product w-1/2 justify-center">
            <div class="w-full flex">
                <div thumbsSlider="" class="relative w-max  swiper mySwiper ">
                    <div class="swiper-wrapper">
<?php foreach($PRODUCT_STOCKS_IMAGES as $product_images) : ?>
                        <div class="swiper-slide w-full ">
                            <img class="w-full h-full object-contain" src="<?=base_url($product_images->file_name)?>" />
                        </div>
<?php endforeach ?>
                    </div>
                    <!-- <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div> -->
                </div>
                <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" 
                class="swiper mySwiper2 ">
                    <div class="swiper-wrapper pl-5">
<?php foreach($PRODUCT_STOCKS_IMAGES as $product_images) : ?>
                        <div class="swiper-slide w-full">
                            <img class="w-full h-full object-cover" src="<?=base_url($product_images->file_name)?>" />
                        </div>
<?php endforeach ?>
                    </div>
                    <!-- <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div> -->
                </div>
            </div>
        </div>
        <div class="w-1/2 ">
            <p class="text-4xl font-semibold"><?=$PRODUCT->name?></p>
            <p>
                <span class="font-medium">Brand:</span>
                <span>Dynarex</span>
            </p>
            <table class="table-auto w-full">
                <thead>
                    <tr class="text-base text-primary font-semibold">
                        <th class="text-left">Item No.</th>
                        <th>Product Description</th>
    <?php if($UNIT_OPTIONS) { ?>
        <?php foreach($UNIT_OPTIONS as $option) : ?>
                        <th>Per/<?=$option->name?></th>
                        <th>Price</th>
        <?php endforeach ?>
    <?php } else{ ?>
            <td class="text-center">Quantity</td>
            <td class="text-center">Price</td>
    <?php } ?>
                        <!-- <th>Per /Box</th>
                        <th>Price</th> -->
                        <th></th>
                    </tr>
                </thead>
                <tbody>
<?php foreach($PRODUCT_STOCKS as $index => $product) : ?>
                    <tr class="text-center product-stock <?=($index+1)%2!=0 ? 'bg-gray-300': 'bg-white' ?> ">
                        <td class="text-left pl-2"><?=$product->item_number?></td>
                        <td><?= $product->unit?></td>
    <?php if($product->unit_options && json_decode($product->unit_options) ){ ?>
        <?php foreach(json_decode($product->unit_options) as $unit_option) : ?>
                        <td>
                            <div>
                                <span><?=$unit_option->pieces?></span>
                                <div class="item-qty bg-white flex border border-secondary-200 justify-evenly rounded-full items-center">
                                    <div class="item-less text-white flex justify-center items-center w-[1rem] h-[1rem] p-0 m-0 rounded-full bg-secondary-200 cursor-pointer">
                                        <span>-</span>
                                    </div>
                                    <input type="text" data-price="<?=$unit_option->price?>" name="<?=$unit_option->name?>" class="unit_option_value w-10 focus:ring-0 p-1 border-0 bg-white item-number text-center" value="0">
                                    <div class="item-add text-white flex justify-center items-center w-[1rem] h-[1rem] p-0 m-0 rounded-full bg-secondary-200 cursor-pointer">
                                        <span>+</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="font-semibold"><span class="font-sans">₱</span><?=$unit_option->price?></td>
        <?php endforeach ?>
    <?php } else {  ?>
        <?php if(json_decode($PRODUCT->item_option_values)) : ?>
            <?php foreach(json_decode($PRODUCT->item_option_values) as $unit_option) : ?>
                    <td>
                        <div>
                            <span><?=$unit_option->pieces?></span>
                            <div class="item-qty bg-white flex border border-secondary-200 justify-evenly rounded-full items-center">
                                <div class="item-less text-white flex justify-center items-center w-[1rem] h-[1rem] p-0 m-0 rounded-full bg-secondary-200 cursor-pointer">
                                    <span>-</span>
                                </div>
                                <input type="text" data-price="<?=$unit_option->price?>" name="<?=$unit_option->name?>" class="unit_option_value w-10 focus:ring-0 p-1 border-0 bg-white item-number text-center" value="0">
                                <div class="item-add text-white flex justify-center items-center w-[1rem] h-[1rem] p-0 m-0 rounded-full bg-secondary-200 cursor-pointer">
                                    <span>+</span>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="font-semibold"><span class="font-sans">₱</span><?=$unit_option->price?></td>
            <?php endforeach ?>
        <?php endif ?>
    <?php } ?>
                        <td>
                            <button  class="p-4 btn-add_cart text-primary font-semibold" data-variant="<?=$product->variant?>" data-product_id="<?=$this->technos_encryption->encryptData($product->product_id)?>">Add To Cart</button>
                        </td>
                    </tr>
<?php endforeach ?>
                </tbody>
            </table>
            <div class="mt-8 flex items-start ">
                <p class="text-base w-64">Market Segment: </p>
                <div class="flex flex-wrap ">
<?php foreach($ITEM_MARKET_SEGMENTS as $market_segment) : ?>
                <a href="<?=site_url('market_segments?market='.$market_segment->id)?>">
                    <button class="border border-primary rounded-lg mr-3 px-3 py-2 mb-5"><?=$market_segment->name?></button>
                </a>
<?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-16">
        <div class="mb-0 relative">
            <hr class="border-b-2 absolute bottom-0 w-full border-gray-500 ">
            <ul class="flex flex-wrap  border-secondary space-x-10   -mb-px text-sm  text-center" id="default-tab" 
            data-tabs-active-classes    ="border-b-3 text-black font-semibold border-black"
            data-tabs-inactive-classes  ="border-none text-secondary-200"
            data-tabs-toggle="#default-tab-content" role="tablist">
                <li class="me-2 z-10" role="presentation">
                    <button class="inline-block z-50 text-4xl   border-b-2 rounded-t-lg" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Product Details</button>
                </li>
                <li class="me-2 z-10" role="presentation">
                    <button class=" inline-block text-4xl  border-b-2 rounded-t-lg" id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">Reviews</button>
                </li>
                <li class="me-2 z-10" role="presentation">
                    <button class="inline-block text-4xl  border-b-2 rounded-t-lg" id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">Product Questions</button>
                </li>
            </ul>
        </div>
        <div id="default-tab-content" class="pt-10">
            <div class="hidden rounded-lg" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="flex">
                    <div>
                        <p class="text-4xl font-bold">Sharps Container</p>
                        <div class="description_content ml-8 text-[28px] mt-5">
                            <ul class="list-disc">
                                <li>Containers for used medical needles and other sharp medical instruments</li>
                                <li>Designed so needles can be dropped in the container without touching the outside</li>
                                <li>Commonly used in EMS, hospitals, nursing homes, clinics and doctors offices, etc.</li>
                                <li>Transparent lid allows for visual monitoring of contents to avoid overfilling</li>
                                <li>New Sharps Shaft is designed to hold syringes and conveniently fits into bags for EMS, fire and nursing personnel</li>
                                <!-- ... -->
                            </ul>
                        </div>
                    </div>
                    <div>
                        <table class="border-separate table-auto w-[598px]">
                            <tr class="text-center text-[20px]">
                                <td class="bg-[#0235B54D] p-4 w-1/2">
                                    <span>Item No.</span>
                                </td>
                                <td class="bg-[#D9D9D9] p-4 w-1/2">
                                    <span>4628</span>
                                </td>
                            </tr>
                            <tr class="text-center text-[20px]">
                                <td class="bg-[#0235B54D] p-4 w-1/2">
                                    <span>Color</span>
                                </td>
                                <td class="bg-[#D9D9D9] p-4 w-1/2">
                                    <span>Red</span>
                                </td>
                            </tr>
                            <tr class="text-center text-[20px]">
                                <td class="bg-[#0235B54D] p-4 w-1/2">
                                    <span>Count per case</span>
                                </td>
                                <td class="bg-[#D9D9D9] p-4 w-1/2">
                                    <span>12</span>
                                </td>
                            </tr>
                            <tr class="text-center text-[20px]">
                                <td class="bg-[#0235B54D] p-4 w-1/2">
                                    <span>Count per box</span>
                                </td>
                                <td class="bg-[#D9D9D9] p-4 w-1/2">
                                    <span>1</span>
                                </td>
                            </tr>
                            <tr class="text-center text-[20px]">
                                <td class="bg-[#0235B54D] p-4 w-1/2">
                                    <span>Product Category</span>
                                </td>
                                <td class="bg-[#D9D9D9] p-4 w-1/2">
                                    <span>Sharp Container</span>
                                </td>
                            </tr>
                            <tr class="text-center text-[20px]">
                                <td class="bg-[#0235B54D] p-4 w-1/2">
                                    <span>Brand</span>
                                </td>
                                <td class="bg-[#D9D9D9] p-4 w-1/2">
                                    <span>Dynarex</span>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="hidden p-4 rounded-lg" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                <p class="text-4xl text-center">Be the first to review this Product!</p>
                <div class="flex justify-between items-center w-[520px] m-auto mb-4 mt-5 text-4xl">
                    <svg class="w-16 h-16 star_icon cursor-pointer " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"> 
                        <path stroke="currentColor" stroke-width="1" d="M11.083 5.104c.35-.8 1.485-.8 1.834 0l1.752 4.022a1 1 0 0 0 .84.597l4.463.342c.9.069 1.255 1.2.556 1.771l-3.33 2.723a1 1 0 0 0-.337 1.016l1.03 4.119c.214.858-.71 1.552-1.474 1.106l-3.913-2.281a1 1 0 0 0-1.008 0L7.583 20.8c-.764.446-1.688-.248-1.474-1.106l1.03-4.119A1 1 0 0 0 6.8 14.56l-3.33-2.723c-.698-.571-.342-1.702.557-1.771l4.462-.342a1 1 0 0 0 .84-.597l1.753-4.022Z"/> 
                    </svg>
                    <svg class="w-16 h-16 star_icon cursor-pointer " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"> 
                        <path stroke="currentColor" stroke-width="1" d="M11.083 5.104c.35-.8 1.485-.8 1.834 0l1.752 4.022a1 1 0 0 0 .84.597l4.463.342c.9.069 1.255 1.2.556 1.771l-3.33 2.723a1 1 0 0 0-.337 1.016l1.03 4.119c.214.858-.71 1.552-1.474 1.106l-3.913-2.281a1 1 0 0 0-1.008 0L7.583 20.8c-.764.446-1.688-.248-1.474-1.106l1.03-4.119A1 1 0 0 0 6.8 14.56l-3.33-2.723c-.698-.571-.342-1.702.557-1.771l4.462-.342a1 1 0 0 0 .84-.597l1.753-4.022Z"/> 
                    </svg>
                    <svg class="w-16 h-16 star_icon cursor-pointer " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"> 
                        <path stroke="currentColor" stroke-width="1" d="M11.083 5.104c.35-.8 1.485-.8 1.834 0l1.752 4.022a1 1 0 0 0 .84.597l4.463.342c.9.069 1.255 1.2.556 1.771l-3.33 2.723a1 1 0 0 0-.337 1.016l1.03 4.119c.214.858-.71 1.552-1.474 1.106l-3.913-2.281a1 1 0 0 0-1.008 0L7.583 20.8c-.764.446-1.688-.248-1.474-1.106l1.03-4.119A1 1 0 0 0 6.8 14.56l-3.33-2.723c-.698-.571-.342-1.702.557-1.771l4.462-.342a1 1 0 0 0 .84-.597l1.753-4.022Z"/> 
                    </svg>
                    <svg class="w-16 h-16 star_icon cursor-pointer " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"> 
                        <path stroke="currentColor" stroke-width="1" d="M11.083 5.104c.35-.8 1.485-.8 1.834 0l1.752 4.022a1 1 0 0 0 .84.597l4.463.342c.9.069 1.255 1.2.556 1.771l-3.33 2.723a1 1 0 0 0-.337 1.016l1.03 4.119c.214.858-.71 1.552-1.474 1.106l-3.913-2.281a1 1 0 0 0-1.008 0L7.583 20.8c-.764.446-1.688-.248-1.474-1.106l1.03-4.119A1 1 0 0 0 6.8 14.56l-3.33-2.723c-.698-.571-.342-1.702.557-1.771l4.462-.342a1 1 0 0 0 .84-.597l1.753-4.022Z"/> 
                    </svg>
                    <svg class="w-16 h-16 star_icon cursor-pointer " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"> 
                        <path stroke="currentColor" stroke-width="1" d="M11.083 5.104c.35-.8 1.485-.8 1.834 0l1.752 4.022a1 1 0 0 0 .84.597l4.463.342c.9.069 1.255 1.2.556 1.771l-3.33 2.723a1 1 0 0 0-.337 1.016l1.03 4.119c.214.858-.71 1.552-1.474 1.106l-3.913-2.281a1 1 0 0 0-1.008 0L7.583 20.8c-.764.446-1.688-.248-1.474-1.106l1.03-4.119A1 1 0 0 0 6.8 14.56l-3.33-2.723c-.698-.571-.342-1.702.557-1.771l4.462-.342a1 1 0 0 0 .84-.597l1.753-4.022Z"/> 
                    </svg>
                </div>
                <!-- <button class="border m-auto rounded-lg flex justify-center items-center space-x-5 p-4 w-[496px]">
                    <svg class="w-10 h-10 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M10.779 17.779 4.36 19.918 6.5 13.5m4.279 4.279 8.364-8.643a3.027 3.027 0 0 0-2.14-5.165 3.03 3.03 0 0 0-2.14.886L6.5 13.5m4.279 4.279L6.499 13.5m2.14 2.14 6.213-6.504M12.75 7.04 17 11.28"/>
                    </svg>
                    <span class="text-2xl">Write a Review</span>
                </button> -->
                
            <div id="accordion-collapse" data-accordion="collapse" data-active-classes="border-black text-black">
                <h2 id="accordion-collapse-heading-1">
                    <button class="border m-auto rounded-lg flex justify-center items-center space-x-5 p-4 w-[496px]"
                    data-accordion-target="#accordion-collapse-body-1" 
                    
                    aria-expanded="true" aria-controls="accordion-collapse-body-1"
                    >
                        <svg class="w-10 h-10" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M10.779 17.779 4.36 19.918 6.5 13.5m4.279 4.279 8.364-8.643a3.027 3.027 0 0 0-2.14-5.165 3.03 3.03 0 0 0-2.14.886L6.5 13.5m4.279 4.279L6.499 13.5m2.14 2.14 6.213-6.504M12.75 7.04 17 11.28"/>
                        </svg>
                        <span class="text-2xl">Write a Review</span>
                    </button>
                    <!-- <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" 
                    data-accordion-target="#accordion-collapse-body-1" aria-expanded="true" aria-controls="accordion-collapse-body-1">
                    <span>What is Flowbite?</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                    </button> -->
                </h2>
                <div id="accordion-collapse-body-1" class="hidden mt-12 " aria-labelledby="accordion-collapse-heading-1">
                    <div class="flex justify-between">
                        <div class="w-1/2 max-w-[612px]">
                            <form class="">
                                <div class="mb-5">
                                    <label for="name" class="block mb-2 text-xl font-medium text-gray-900 dark:text-white">Name <span class="text-red-500">*</span></label>
                                    <input type="text" id="name" 
                                    class="italic h-[65px] bg-gray-50 border border-gray-300 text-gray-900 text-xl rounded-lg
                                    focus:ring-0  block w-full " placeholder="Enter your name" required />
                                </div>
                                <div class="mb-5">
                                    <label for="email" class=" block mb-2 text-xl font-medium text-gray-900 dark:text-white">Email <span class="text-red-500">*</span></label>
                                    <input type="text" id="email" class=" italic h-[65px] bg-gray-50 border border-gray-300 text-gray-900 text-xl rounded-lg
                                    focus:ring-0  block w-full " placeholder="Enter your email" required />
                                </div>
                                <div class="mb-5">
                                    <label for="title" class=" block mb-2 text-xl font-medium text-gray-900 dark:text-white">Title of Review <span class="text-red-500">*</span></label>
                                    <input type="text" id="title" class=" italic h-[65px] bg-gray-50 border border-gray-300 text-gray-900 text-xl rounded-lg
                                    focus:ring-0  block w-full " placeholder="Review Title" required />
                                </div>
                                <div>
                                    <label for="message" class="block mb-2 text-xl font-medium text-gray-900 dark:text-white">How was your experience <span class="text-red-500">*</span></label>
                                    <textarea id="message" rows="4" class=" italic block p-2.5 w-full text-xl text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-0 " placeholder="Leave a comment..."></textarea>
                                </div>
                            </form>
                        </div>
                        <div class="w-1/2 max-w-[612px] flex flex-col space-y-16">
                            <div>
                                <p class="after:content-['*'] text-xl after:text-red-500">How would you rate the quality?</p>
                                <div class="relative isolate flex justify-between mt-5 ">
                                    <hr class="border-b-2 absolute w-full border-secondary-200 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2" style="z-index:-1">
                                    <label class="flex flex-col items-center after:content-['Bad'] after:absolute after:bottom-[-25px]">
                                        <input type="radio" class="w-8 h-8 text-primary" name="experience_quality">
                                    </label>
                                    <label class="flex flex-col items-center after:content-['Good'] after:absolute after:bottom-[-25px]">
                                        <input type="radio" class="w-8 h-8 text-primary" name="experience_quality">
                                    </label>
                                    <label class="flex flex-col items-center after:content-['Excellent'] after:absolute after:bottom-[-25px]">
                                        <input type="radio" class="w-8 h-8 text-primary" name="experience_quality">
                                    </label>
                                </div>
                            </div>
                            <div>
                                <p class="after:content-['*'] text-xl after:text-red-500">How would you rate the value?</p>
                                <div class="relative isolate flex justify-between mt-5 ">
                                    <hr class="border-b-2 absolute w-full border-secondary-200 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2" style="z-index:-1">
                                    <label class="flex flex-col items-center after:content-['Bad'] after:absolute after:bottom-[-25px]">
                                        <input type="radio" class="w-8 h-8 text-primary" name="experience_value">
                                    </label>
                                    <label class="flex flex-col items-center after:content-['Good'] after:absolute after:bottom-[-25px]">
                                        <input type="radio" class="w-8 h-8 text-primary" name="experience_value">
                                    </label>
                                    <label class="flex flex-col items-center after:content-['Excellent'] after:absolute after:bottom-[-25px]">
                                        <input type="radio" class="w-8 h-8 text-primary" name="experience_value">
                                    </label>
                                </div>
                            </div>
                            <div>
                                <p class="after:content-['*'] text-xl after:text-red-500">How was the delivery experience?</p>
                                <div class="relative isolate flex justify-between mt-5 ">
                                    <hr class="border-b-2 absolute w-full border-secondary-200 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2" style="z-index:-1">
                                    <label class="flex flex-col items-center after:content-['Bad'] after:absolute after:bottom-[-25px]">
                                        <input type="radio" class="w-8 h-8 text-primary" name="experience_delivery">
                                    </label>
                                    <label class="flex flex-col items-center after:content-['Good'] after:absolute after:bottom-[-25px]">
                                        <input type="radio" class="w-8 h-8 text-primary" name="experience_delivery">
                                    </label>
                                    <label class="flex flex-col items-center after:content-['Excellent'] after:absolute after:bottom-[-25px]">
                                        <input type="radio" class="w-8 h-8 text-primary" name="experience_delivery">
                                    </label>
                                </div>
                            </div>
                            <div>
                                <p class="after:content-['*'] text-xl after:text-red-500">Would you recommend this product?</p>
                                <div class="relative isolate flex justify-start space-x-10 mt-5 ">
                                    <label class="flex space-x-5 items-center ">
                                        <input type="radio" class="w-8 h-8 text-primary" name="recommend">
                                        <span>Yes</span>
                                    </label>
                                    <label class="flex space-x-5 items-center ">
                                        <input type="radio" class="w-8 h-8 text-primary" name="recommend">
                                        <span>No</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="border mx-auto mt-16  rounded-lg flex justify-center items-center space-x-5 p-4 w-[496px]"
                    >
                        <span class="text-2xl">Submit Review</span>
                    </button>
                </div>
            </div>

            </div>
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Settings tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
            </div>
        </div>
    </div>
    <dialog id="my_modal_2" class="modal">
        <div class="modal-box absolute right-0 h-full max-h-full rounded-none">
            <form method="dialog" class="w-max ml-auto">
                <button class="btn w-12 ml-auto h-12 btn-sm btn-circle btn-ghost">✕</button>
            </form>
            <div class="flex space-x-2">
                <img class="rounded-lg max-w-[150px] max-h-[150px]" src="<?=base_url('assets/images/sharp_1.jpg')?>" alt="">
                <div class="flex flex-col justify-between">
                    <div>
                        <p class="text-sm">Dynarex</p>
                        <p class="text-sm">1234</p>
                        <p class="font-semibold">Sharps Container 2qt</p>
                        <p class=" text-lg">
                            <span class="font-sans">₱</span>
                            <span>100</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="mt-5">
                <p>Quantity</p>
                <div class="join join-horizontal">
                    <button class="btn join-item">-</button>
                    <input type="text" value="1"  class=" text-center w-max input input-bordered join-item appearance-none"/>
                    <button class="btn join-item">+</button>
                </div>
            </div>
            
        </div>
        <form method="dialog" class="modal-backdrop w-full">
            <button></button>
        </form>
    </dialog>
    <div class="mt-16">
        <p class="text-4xl font-semibold">Also bought with</p>
    </div>
</section>
<div id="success_alert" style="display:none" class="fixed top-0 right-0  flex items-center p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
  <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="false" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
  </svg>
  <span class="sr-only">Info</span>
  <div>
    <span class="font-medium">Success alert!</span> Change a few things up and try submitting again.
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
var swiper = new Swiper(".mySwiper", {
    
    direction: 'vertical',
      spaceBetween: 10,
      slidesPerView: 4,
      freeMode: true,
      watchSlidesProgress: true,
    });
    var swiper2 = new Swiper(".mySwiper2", {
        direction: "vertical",
      spaceBetween: 10,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      thumbs: {
        swiper: swiper,
      },
    });
</script>
<script>
    $(document).ready(function(){
        $(".star_icon").hover(function(){
            $(this).prevAll().addBack().addClass('fill-primary text-primary')
        },function(){
            $(this).prevAll().addBack().removeClass('fill-primary text-primary')
        });
        $('.btn-add_cart').on('click',function(){
            let token=$('meta[name="csrf-token"]').attr("content");
            let product_id      = $(this).data('product_id');
            let parent_stock    = $(this).closest(".product-stock");
            let quantity        = parent_stock.find('.unit_option_value');
            let quantity_value  = [];
            let is_valid=false;
            quantity.each(function() {
                let value = $(this).val();
                let price = $(this).data('price');
                if(value>0){
                    is_valid=true;
                }
                let data={};
                data['unit']            = $(this).attr('name')
                data['quantity']        = $(this).val();
                
                quantity_value.push(data); 
            });
            // console.log(quantity_value);

            // return;
            let variant         = $(this).data('variant');
            if(!is_valid){
                alert('Please add quantity');
                return;
            }
            $.post("<?=site_url('products/add_to_cart')?>",{_token:token,variant:variant,product_id:product_id,qty:quantity_value},
            function(res){
                console.log(res);
                $('#success_alert').toggle('slow');

            });
            // alert();
        })
        $('.item-less').on('click',function(){

            let parent_div  = $(this).parent('.item-qty');
            let item_number = parent_div.find('.item-number');
            let item_number_value=parseInt(item_number.val());
            if(item_number_value>0){
                item_number.val(item_number_value-1);
            }
        })
        $('.item-add').on('click',function(){
            let parent_div  = $(this).parent('.item-qty');
            let item_number = parent_div.find('.item-number');
            let item_number_value=parseInt(item_number.val());
            item_number.val(item_number_value+1);
        })
        $('.item-number').on('change',function(){
            let value=$(this).val();
            if (isNaN(value) || value === ''){
                alert('Please enter a valid value');
            }
        })
    })
</script>