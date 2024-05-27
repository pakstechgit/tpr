<section class="px-16 mt-16 flex ">
    <div class="side_nav w-1/4 flex flex-col space-y-20">
        <div>
            <p class="text-secondary-200 text-2xs font-medium">Home / Brands </p>
            <p class="font-semibold text-22 mt-2">Brands</p>
            <p class="text-primary mb-2 text-sm">SHOP ALL BRANDS <p>
            <div id="accordion-color" data-accordion="collapse" 
            data-active-classes="bg-none after:content-['-'] text-primary underline font-semibold">
                <h2 id="accordion-dynarex">
                    <button type="button" 
                    class=" w-full relative text-left after:top-0 after:text-black after:text-lg after:right-28 after:absolute after:content-['+'] " 
                    data-accordion-target="#accordion-color-body-1" aria-expanded="false" aria-controls="accordion-color-body-1">
                    <span>Dynarex</span>
                    
                    </button>
                </h2>
                <div id="accordion-color-body-1" class="hidden ps-5 mt-2" aria-labelledby="accordion-dynarex">
                    <ul class="flex flex-col space-y-2">
                        <li class="text-gray-700">
                            <a href="">Antiseptics</a>
                        </li>
                        <li class="text-gray-700">
                            <a href="">Armslings</a>
                        </li>
                        <li class="text-gray-700">
                            <a href="">Bandages</a>
                        </li>
                        <li class="text-gray-700">
                            <a href="">Cervical Collars</a>
                        </li>
                        <li class="text-gray-700">
                            <a href="">Cotton Tipped Applicators</a>
                        </li>
                        <li class="text-gray-700">
                            <a href="">Dead End Cups</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- <ul class="text-sm flex flex-col space-y-2">
                <li>
                    <a>Dynarex</a>
                </li>
                <li>
                    <a>Dukal </a>
                </li>
                <li>
                    <a>Rockwell Medical</a>
                </li>
                <li>
                    <a>Emerald</a>
                </li>
                <li>
                    <a>Emerald</a>
                </li>
            </ul> -->
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
        <p class="text-22 font-semibold">Dynarex</p>
        <div class="flex flex-col space-y-6">
            <div>
                <p class="text-22 my-5">Customize Medical Kit</p>
                <div class="flex flex-warp justify-between">
                    <div class="border rounded-lg border-secondary-100 w-max">
                        <img class="w-360px aspect-square " src="<?=base_url('assets/images/shop_product_4.jpg')?>" />
                        <div class="mt-3 px-2 pb-2">
                            <p class="font-semibold text-sm">Syntheticare Powder-Free Vinyl Exam Gloves</p>
                            <p class="text-gray-600 text-sm">Emerald</p>
                            <div class="mt-3">
                                <p class="font-semibold"><span class="font-sans">₱</span>500.00-700.00</p>
                                <p class="text-2xs">3 sizes available</p>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-lg border border-secondary-100 w-max">
                        <img class="w-360px aspect-square" src="<?=base_url('assets/images/shop_product_3.jpg')?>" />
                        <div class="mt-3 px-2 pb-2">
                            <p class="font-semibold text-sm">Syntheticare Powder-Free Vinyl Exam Gloves</p>
                            <p class="text-gray-600 text-sm">Emerald</p>
                            <div class="mt-3">
                                <p class="font-semibold"><span class="font-sans">₱</span>500.00-700.00</p>
                                <p class="text-2xs">3 sizes available</p>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-lg border border-secondary-100 w-max">
                        <img class="w-360px aspect-square" src="<?=base_url('assets/images/shop_product_2.jpg')?>" />
                        <div class="mt-3 px-2 pb-2">
                            <p class="font-semibold text-sm">Syntheticare Powder-Free Vinyl Exam Gloves</p>
                            <p class="text-gray-600 text-sm">Emerald</p>
                            <div class="mt-3">
                                <p class="font-semibold"><span class="font-sans">₱</span>500.00-700.00</p>
                                <p class="text-2xs">3 sizes available</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <p class="text-22 my-5">Sharp Containers </p>
                <div class="flex flex-warp justify-between">
                    <div class="border rounded-lg border-secondary-100 w-max">
                        <img class="w-360px aspect-square " src="<?=base_url('assets/images/sharp_1.jpg')?>" />
                        <div class="mt-3 px-2 pb-2">
                            <p class="font-semibold text-sm">Syntheticare Powder-Free Vinyl Exam Gloves</p>
                            <p class="text-gray-600 text-sm">Emerald</p>
                            <div class="mt-3">
                                <p class="font-semibold"><span class="font-sans">₱</span>500.00-700.00</p>
                                <p class="text-2xs">3 sizes available</p>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-lg border border-secondary-100 w-max">
                        <img class="w-360px aspect-square" src="<?=base_url('assets/images/sharp_2.jpg')?>" />
                        <div class="mt-3 px-2 pb-2">
                            <p class="font-semibold text-sm">Syntheticare Powder-Free Vinyl Exam Gloves</p>
                            <p class="text-gray-600 text-sm">Emerald</p>
                            <div class="mt-3">
                                <p class="font-semibold"><span class="font-sans">₱</span>500.00-700.00</p>
                                <p class="text-2xs">3 sizes available</p>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-lg border border-secondary-100 w-max">
                        <img class="w-360px  aspect-square" src="<?=base_url('assets/images/sharp_3.jpg')?>" />
                        <div class="mt-3 px-2 pb-2">
                            <p class="font-semibold text-sm">Syntheticare Powder-Free Vinyl Exam Gloves</p>
                            <p class="text-gray-600 text-sm">Emerald</p>
                            <div class="mt-3">
                                <p class="font-semibold"><span class="font-sans">₱</span>500.00-700.00</p>
                                <p class="text-2xs">3 sizes available</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <p class="text-22 my-5">Sponges</p>
                <div class="flex flex-warp justify-between">
                    <div class="border rounded-lg border-secondary-100 w-360px">
                        <img class="w-360px aspect-square " src="<?=base_url('assets/images/sponge_1.jpg')?>" />
                        <div class="mt-3 px-2 pb-2">
                            <p class="font-semibold text-sm text-wrap">Advantage Surgical Sponges, Non Sterile - 4x4" - 8ply</p>
                            <p class="text-gray-600 text-sm">Emerald</p>
                            <div class="mt-3">
                                <p class="font-semibold"><span class="font-sans">₱</span>500.00-700.00</p>
                                <p class="text-2xs">3 sizes available</p>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-lg border border-secondary-100 w-max">
                        <img class="w-360px aspect-square" src="<?=base_url('assets/images/sponge_2.jpg')?>" />
                        <div class="mt-3 px-2 pb-2">
                            <p class="font-semibold text-sm">Syntheticare Powder-Free Vinyl Exam Gloves</p>
                            <p class="text-gray-600 text-sm">Emerald</p>
                            <div class="mt-3">
                                <p class="font-semibold"><span class="font-sans">₱</span>500.00-700.00</p>
                                <p class="text-2xs">3 sizes available</p>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-lg border border-secondary-100 w-max">
                        <img class="w-360px aspect-square" src="<?=base_url('assets/images/sponge_3.jpg')?>" />
                        <div class="mt-3 px-2 pb-2">
                            <p class="font-semibold text-sm">Syntheticare Powder-Free Vinyl Exam Gloves</p>
                            <p class="text-gray-600 text-sm">Emerald</p>
                            <div class="mt-3">
                                <p class="font-semibold"><span class="font-sans">₱</span>500.00-700.00</p>
                                <p class="text-2xs">3 sizes available</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <p class="text-22 my-5">Syringes</p>
                <div class="flex flex-warp justify-between">
                    <div class="border rounded-lg border-secondary-100 w-max">
                        <img class="w-360px aspect-square " src="<?=base_url('assets/images/syringes_1.jpg')?>" />
                        <div class="mt-3 px-2 pb-2">
                            <p class="font-semibold text-sm">Syntheticare Powder-Free Vinyl Exam Gloves</p>
                            <p class="text-gray-600 text-sm">Emerald</p>
                            <div class="mt-3">
                                <p class="font-semibold"><span class="font-sans">₱</span>500.00-700.00</p>
                                <p class="text-2xs">3 sizes available</p>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-lg border border-secondary-100 w-max">
                        <img class="w-360px aspect-square" src="<?=base_url('assets/images/syringes_2.jpg')?>" />
                        <div class="mt-3 px-2 pb-2">
                            <p class="font-semibold text-sm">Syntheticare Powder-Free Vinyl Exam Gloves</p>
                            <p class="text-gray-600 text-sm">Emerald</p>
                            <div class="mt-3">
                                <p class="font-semibold"><span class="font-sans">₱</span>500.00-700.00</p>
                                <p class="text-2xs">3 sizes available</p>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-lg border border-secondary-100 w-max">
                        <img class="w-360px aspect-square" src="<?=base_url('assets/images/syringes_3.jpg')?>" />
                        <div class="mt-3 px-2 pb-2">
                            <p class="font-semibold text-sm">Syntheticare Powder-Free Vinyl Exam Gloves</p>
                            <p class="text-gray-600 text-sm">Emerald</p>
                            <div class="mt-3">
                                <p class="font-semibold"><span class="font-sans">₱</span>500.00-700.00</p>
                                <p class="text-2xs">3 sizes available</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section>
<?php $this->load->view('client_page/partials/_pre_footer_container') ?>