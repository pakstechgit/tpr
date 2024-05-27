<style>
    .more_segment[aria-expanded="false"]::after{
        content:'+';
    }
    .more_segment[aria-expanded="true"]::after{
        content:'-';
    }
</style>
<section class="px-16 mt-16 flex ">
    <div class="side_nav w-2/7 flex flex-col space-y-20">
        <div>
            <p class="text-secondary-200 text-2xs font-medium">Home / Athletic/Sports</p>
            <p class="font-semibold text-22 mt-2">Markets We Serve</p>

            <div id="accordion-color" data-accordion="collapse" 
            data-active-classes="bg-none text-primary underline font-semibold"
            data-inactive-classes="text-gray-600"
            >
<?php foreach($MARKET_SEGMET_LIST as $index => $segment) :  ?>
    <?php if($index<=13) { ?> 
                <h2 id="accordion-<?=$index?>">
                    <button type="button" 
                    class=" w-full relative text-left mb-3 " 
                    data-accordion-target="#accordion-color-body-<?=$index?>" aria-expanded="<?= $segment['id']==$market_id ? 'true'  : 'false'?>" aria-controls="accordion-color-body-<?=$index?>">
                    <span><?=$segment['name']?></span>
                    
                    </button>
                </h2>
                <div id="accordion-color-body-<?=$index?>" class="ps-5 hidden" aria-labelledby="accordion-<?=$index?>">
                    <ul class="flex  flex-col space-y-2">
    <?php foreach($segment['categories'] as $category) : ?>
                        <li class="text-gray-700 <?= $segment['id']==$market_id && $category->id==$category_id? 'text-primary underline' : '' ?>">
                            <a href="<?=site_url('market_segments?market='.$segment['id'].'&category='.$category->id)?>"><?=$category->name?></a>
                        </li>
    <?php endforeach?>
                    </ul>
                </div>
    <?php } ?>
<?php endforeach ?>
<?php if(count($MARKET_SEGMET_LIST)>13) { ?>
                <h2 id="accordion-more">
                    <button type="button" 
                    class=" more_segment after:text-black   w-full relative text-left mb-3 no-underline 
                    "
                    data-accordion-target="#accordion-color-body-more" aria-expanded="false" aria-controls="accordion-color-body-more">
                    <span class="font-semibold text-black ">View More</span>
                    </button>
                </h2>
                <div id="accordion-color-body-more" class="hidden" aria-labelledby="accordion-more">
                    <div id="accordion-nested-collapse" data-accordion="collapse"
                    data-active-classes="bg-none text-primary underline font-semibold"
                    data-inactive-classes="text-gray-600">
        <?php $index=14; for($index;$index<count($MARKET_SEGMET_LIST);$index++) : ?>
                        <h2 id="accordion-nested-collapse-heading-<?=$index?>">
                            <button type="button" 
                            class="w-full relative text-left mb-3 " 
                            data-accordion-target="#accordion-nested-collapse-body-<?=$index?>" 
                            aria-expanded="false" aria-controls="accordion-nested-collapse-body-<?=$index?>">
                                <span><?=$MARKET_SEGMET_LIST[$index]['name']?></span>
                            </button>
                        </h2>
                        <div id="accordion-nested-collapse-body-<?=$index?>" class="bg-none hidden" aria-labelledby="accordion-nested-collapse-heading-<?=$index?>">
                            <ul class="flex  flex-col space-y-2">
    <?php foreach($MARKET_SEGMET_LIST[$index]['categories'] as $category) : ?>
                            <li class="text-gray-700">
                                <a href=""><?=$category->name?></a>
                            </li>
    <?php endforeach?>
                            </ul>
                        </div>
        <?php endfor ?>
                       
                    </div>

                </div>
<?php } ?>
            </div>
        </div>
        <!--Category and Filter-->
        <div>
            <div>
                <p class="my-5 text-22 font-semibold">Filter By:</p>
                <div class="flex flex-col space-y-5">
                    <div>
                        <p class="text-sm font-semibold">Materials</p>
                        <ul class="flex flex-col space-y-2 mt-6 w-max">
                            <li>
                                <label class="flex items-center cursor-pointer">
                                    <input  type="checkbox" value="" 
                                    class="w-4 h-4 text-primary rounded focus:ring-0 focus:outline-none focus:offset-0">
                                    <span class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nitrile</span>
                                </label>
                            </li>
                            <li>
                                <label class="flex items-center cursor-pointer">
                                    <input  type="checkbox" value="" 
                                    class="w-4 h-4 text-primary rounded focus:ring-0 focus:outline-none focus:offset-0">
                                    <span  class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Latex</span>
                                </label>
                            </li>
                            <li>
                                <label class="flex items-center cursor-pointer">
                                    <input  type="checkbox" value="" 
                                    class="w-4 h-4 text-primary rounded focus:ring-0 focus:outline-none focus:offset-0">
                                    <span  class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Vinyl</span>
                                </label>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <p class="text-sm font-semibold">Size</p>
                        <ul class="flex flex-col space-y-2 mt-6 w-max">
                            <li>
                                <label class="flex items-center cursor-pointer">
                                    <input  type="checkbox" value="" 
                                    class="w-4 h-4 text-primary rounded focus:ring-0 focus:outline-none focus:offset-0">
                                    <span class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Small</span>
                                </label>
                            </li>
                            <li>
                                <label class="flex items-center cursor-pointer">
                                    <input  type="checkbox" value="" 
                                    class="w-4 h-4 text-primary rounded focus:ring-0 focus:outline-none focus:offset-0">
                                    <span  class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Medium</span>
                                </label>
                            </li>
                            <li>
                                <label class="flex items-center cursor-pointer">
                                    <input  type="checkbox" value="" 
                                    class="w-4 h-4 text-primary rounded focus:ring-0 focus:outline-none focus:offset-0">
                                    <span  class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Large</span>
                                </label>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <p class="text-sm font-semibold">Brand</p>
                        <ul class="flex flex-col space-y-2 mt-6 w-max">
                            <li>
                                <label class="flex items-center cursor-pointer">
                                    <input  type="checkbox" value="" 
                                    class="w-4 h-4 text-primary rounded focus:ring-0 focus:outline-none focus:offset-0">
                                    <span class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Dynarex</span>
                                </label>
                            </li>
                            <li>
                                <label class="flex items-center cursor-pointer">
                                    <input  type="checkbox" value="" 
                                    class="w-4 h-4 text-primary rounded focus:ring-0 focus:outline-none focus:offset-0">
                                    <span  class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Emerald</span>
                                </label>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <p class="text-sm font-semibold">Colors</p>
                        <ul class="flex flex-col space-y-2 mt-6 w-max">
                            <li>
                                <label class="flex items-center cursor-pointer">
                                    <input  type="checkbox" value="" 
                                    class="w-4 h-4 text-primary rounded focus:ring-0 focus:outline-none focus:offset-0">
                                    <span class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Blue</span>
                                </label>
                            </li>
                            <li>
                                <label class="flex items-center cursor-pointer">
                                    <input  type="checkbox" value="" 
                                    class="w-4 h-4 text-primary rounded focus:ring-0 focus:outline-none focus:offset-0">
                                    <span  class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Transparent</span>
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--End Category and Filter-->
    </div>
    <div class="main_content w-full">
        <div class="flex flex-col space-y-6">
<?php foreach($PRODUCTS as $product) : ?>
        <?php if($product->product) :  ?>
            <div>
                <p class="text-22 my-5"><?=$product->name?></p>
                <div class="grid grid-cols-3 gap-5">
        <?php foreach($product->product as $item ) : ?>
                    <a href="<?=site_url('products/item/'.urlencode($item->slug))?>">
                        <div class="border rounded-lg border-secondary-100 w-max">
                            <img class="w-360px aspect-square " src="<?=base_url($item->photo)?>" />
                            <div class="mt-3 px-2 pb-2">
                                <p class="font-semibold text-sm"><?=$item->name?></p>
                                <p class="text-gray-600 text-sm"><?=$item->brand?></p>
                                <div class="mt-3">
                                    <p class="font-semibold"><span class="font-sans">₱</span><?=$item->unit_price?></p>
                                    <p class="text-2xs">3 sizes available</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    
        <?php endforeach ?>
                </div>
            </div>
        <?php endif ?>
<?php endforeach ?>
            
        </div>
        
    </div>
</section>
<?php $this->load->view('client_page/partials/_pre_footer_container') ?>