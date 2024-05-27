<section class="px-16 mt-16 flex ">
    <div class="side_nav w-2/7 flex flex-col space-y-20">
        <div>
            <p class="text-secondary-200 text-2xs font-medium">Home / Featured Products </p>
            <p class="font-semibold text-22 my-2">Featured Products</p>
            <ul class="text-sm flex flex-col space-y-2">
                <li><a href="<?= site_url('products/featured_products') ?>">All</a></li>
                <?php foreach ($FEATURE_CAT as $category) : ?>
                    <li class="<?= $this->input->get('category') == $category->id ? 'text-primary font-semibold' : '' ?>">
                        <a href="?category=<?= $category->id ?>"><?= $category->name ?></a>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
        <!--Category and Filter-->
        <div>
            <div>
                <p class="font-semibold my-2">CATEGORY </p>
                <ul class="flex flex-col space-y-2">
                    <li>
                        <a>Athletic</a>
                    </li>
                    <li>
                        <a>Cosmetic Surgery / Dermatology</a>
                    </li>
                    <li>
                        <a>Customized Medical Kits / Pack</a>
                    </li>
                    <li>
                        <a>Dental</a>
                    </li>
                    <li>
                        <a>Diagnostics / Laboratory</a>
                    </li>
                    <li>
                        <a>Dialysis</a>
                    </li>
                    <li>
                        <a>DME (Durable Medical Equipment)</a>
                    </li>
                    <li>
                        <a>Drug Wholesale</a>
                    </li>
                    <li>
                        <a>Emergency</a>
                    </li>
                    <li>
                        <a>Gloves</a>
                    </li>
                    <li class="cursor-pointer font-semibold">
                        <a>View More +</a>
                    </li>
                </ul>
            </div>
            <div>
                <p class="my-5 text-22 font-semibold">Filter By:</p>
                <div class="flex flex-col space-y-5">
                    <div>
                        <p class="text-sm font-semibold">Materials</p>
                        <ul class="flex flex-col space-y-2 mt-6 w-max">
                            <li>
                                <label class="flex items-center cursor-pointer">
                                    <input type="checkbox" value="" class="w-4 h-4 text-primary rounded focus:ring-0 focus:outline-none focus:offset-0">
                                    <span class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nitrile</span>
                                </label>
                            </li>
                            <li>
                                <label class="flex items-center cursor-pointer">
                                    <input type="checkbox" value="" class="w-4 h-4 text-primary rounded focus:ring-0 focus:outline-none focus:offset-0">
                                    <span class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Latex</span>
                                </label>
                            </li>
                            <li>
                                <label class="flex items-center cursor-pointer">
                                    <input type="checkbox" value="" class="w-4 h-4 text-primary rounded focus:ring-0 focus:outline-none focus:offset-0">
                                    <span class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Vinyl</span>
                                </label>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <p class="text-sm font-semibold">Size</p>
                        <ul class="flex flex-col space-y-2 mt-6 w-max">
                            <li>
                                <label class="flex items-center cursor-pointer">
                                    <input type="checkbox" value="" class="w-4 h-4 text-primary rounded focus:ring-0 focus:outline-none focus:offset-0">
                                    <span class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Small</span>
                                </label>
                            </li>
                            <li>
                                <label class="flex items-center cursor-pointer">
                                    <input type="checkbox" value="" class="w-4 h-4 text-primary rounded focus:ring-0 focus:outline-none focus:offset-0">
                                    <span class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Medium</span>
                                </label>
                            </li>
                            <li>
                                <label class="flex items-center cursor-pointer">
                                    <input type="checkbox" value="" class="w-4 h-4 text-primary rounded focus:ring-0 focus:outline-none focus:offset-0">
                                    <span class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Large</span>
                                </label>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <p class="text-sm font-semibold">Brand</p>
                        <ul class="flex flex-col space-y-2 mt-6 w-max">
                            <li>
                                <label class="flex items-center cursor-pointer">
                                    <input type="checkbox" value="" class="w-4 h-4 text-primary rounded focus:ring-0 focus:outline-none focus:offset-0">
                                    <span class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Dynarex</span>
                                </label>
                            </li>
                            <li>
                                <label class="flex items-center cursor-pointer">
                                    <input type="checkbox" value="" class="w-4 h-4 text-primary rounded focus:ring-0 focus:outline-none focus:offset-0">
                                    <span class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Emerald</span>
                                </label>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <p class="text-sm font-semibold">Colors</p>
                        <ul class="flex flex-col space-y-2 mt-6 w-max">
                            <li>
                                <label class="flex items-center cursor-pointer">
                                    <input type="checkbox" value="" class="w-4 h-4 text-primary rounded focus:ring-0 focus:outline-none focus:offset-0">
                                    <span class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Blue</span>
                                </label>
                            </li>
                            <li>
                                <label class="flex items-center cursor-pointer">
                                    <input type="checkbox" value="" class="w-4 h-4 text-primary rounded focus:ring-0 focus:outline-none focus:offset-0">
                                    <span class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Transparent</span>
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--End Category and Filter-->
    </div>
    <div class="main_content w-full h-auto">
        <p class="text-22 font-semibold">Featured Products</p>
        <div class="flex h-full  flex-col space-y-6">
            <?php foreach ($PRODUCTS as $category_product) : ?>
                <?php if ($category_product['products']) {  ?>
                    <div>
                        <p class="text-22 my-5"><?= $category_product['category'] ?></p>
                        <div class="grid grid-cols-3 gap-y-10">
                            <?php foreach ($category_product['products'] as $product) : ?>
                                <div class="border product_card cursor-pointer rounded-lg border-secondary-100 w-max">
                                    <img class="product_image_top w-360px aspect-square " src="<?= base_url($product->photo) ?>" data-default_image="<?= base_url($product->photo) ?>" data-thumbnail="<?= base_url($product->thumbnail) ?>" />
                                    <div class="mt-3 px-2 pb-2">
                                        <p class="font-semibold text-sm"><?= $product->name ?></p>
                                        <p class="text-gray-600 text-sm"><?= $product->brand ?></p>
                                        <div class="mt-3">
                                            <p class="font-semibold"><span class="font-sans">₱</span><?= $product->unit_price ?></p>
                                            <p class="text-sm">3 sizes available</p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                <?php } else{ if($this->input->get('category')) { ?>
                        <div  class="h-full flex justify-center items-start">
                            <div class="h-max w-max mt-60">
                                <img class="w-32 block m-auto" src="<?=base_url('assets/icons/no_product.svg')?>" alt="" srcset="">
                                <p class="text-primary mt-5 text-center font-semibold text-xl">No products found in this category.</p>
                            </div>
                        </div>
                <?php } } ?>
            <?php endforeach ?>
        </div>

    </div>
</section>
<?php $this->load->view('client_page/partials/_pre_footer_container') ?>