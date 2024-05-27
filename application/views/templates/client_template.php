<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?= $this->security->get_csrf_hash() ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css"
        integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- <link href="https://cdn.jsdelivr.net/npm/daisyui@4.9.0/dist/full.min.css" rel="stylesheet" type="text/css" /> -->
    <!--<script src="https://cdn.tailwindcss.com"></script>-->
    <script src="<?=base_url('assets/js/tailwind.js')?>"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <style>

        body{
            zoom:75%;
        }
        @media only screen and (min-width: 1700px) {
            body{
                /* zoom:100%; */
            }
        }
    </style>
      <style type="text/tailwindcss">
        @tailwind base;
        @tailwind components;
        @tailwind utilities;
        @layer utilities {
            
        }
        @layer components {
            .btn{
                display: inline-block;
                font-weight: 400;
                text-align: center;
                white-space: nowrap;
                vertical-align: middle;
                user-select: none;
                border: 1px solid transparent;
                padding: 0.375rem 0.75rem;
                font-size: 1rem;
                line-height: 1.5;
                border-radius: 0.25rem;
                transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
                cursor: pointer;
              } 
             .card{
                position: relative;
                display: flex;
                flex-direction: column;
                min-width: 0;
                word-wrap: break-word;
                background-color: #fff;
                background-clip: border-box;
                border: 1px solid rgba(0,0,0,.125);
                border-radius: .25rem;
             }
             .card-body{
                flex: 1 1 auto;
                padding: 1rem 1rem;
             }
             .form-control{
                display: block;
                width: 100%;
                padding: .375rem .75rem;
                font-size: 1rem;
                font-weight: 400;
                line-height: 1.5;
                color: #212529;
                background-color: #fff;
                background-clip: padding-box;
                border: 1px solid #ced4da;
                -webkit-appearance: none;
                -moz-appearance: none;
                appearance: none;
                border-radius: .25rem;
                transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
             } 
        }
        @layer base {
          html {
            font-family: "Poppins"
          }
        }
      </style>
    <script>
        tailwind.config = {
          theme: {
            extend: {
                colors: {
                'primary': '#0235B5',
                'secondary':'#C8C8C8',
                'secondary-100':'#EFEFEF',
                'secondary-200':'#9F9F9F'
                },
                width: {
                '2/7':'31.5%',
                '25'   :'6.25rem',
                '18px': '18px',
                '320px':'320px',
                '360px':'360px',
                '334px':'334px',
                '522px':'522px',
                '455px':'455px',
                '812px':'812px',
                '66/43':'66.43%',
                'card' :'328px',
                '15%':'15%',
                '20%'  :'20%',
                '28.64%': '28.64%',
                '32.9%' :'32.9%',
                '37.64%':'37.64%',
                '20.32%':'20.32%',
                '33.46%':'33.46%',
                '70%':'70%',
                
                },
                minWidth: {
                    '334px':'334px',
                    '522px':'522px',
                    '320px':'320px',
                    '328px': '328px',
                },
                maxWidth: {
                '320px':'320px',
                '328px': '328px',
                '334px':'334px',
                '522px':'522px',
                '572px':'572px',
                '1338px':'1338px',
                '25'   :'6.25rem',
                '28.64%': '28.64%',
                '32.9%' :'32.9%',
                '37.64%':'37.64%',
                '20.32%':'20.32%',
                '33.46%':'33.46%'
                },
                maxHeight: {
                  '320px':'320px',
                  '328px':'328px',
                  '334px':'334px',
                  '522px':'522px',
                  '500px':'500px',
                },
                height:{
                  '320px':'320px',
                  '18px':'18px',
                  '328px':'328px',
                  '334px':'334px',
                  '522px':'522px',
                  '371px':'371px',
                  '400px':'400px',
                  'physician_care':'757px',
                  '223':'223px',
                  '60':'60px',
                  '500px':'500px',
                  '511px':'511px'
                },
                fontSize: {
                    '2xs':'0.688rem',
                    '2sm':'0.938rem',
                    '50':'3.125rem',
                    '20':'1.25rem',
                    '22':'1.375rem',
                    '23':'1.438rem',
                    '25':'1.563rem',
                    '26':'1.625rem',
                },
                lineHeight: {
                    '46': '2.875rem',
                    '21':'1.313rem'
                },
                spacing: {
                    '46': '2.75rem',
                },
                borderWidth: {
                    '1.5':'1.5px',
                    '3':'3px',

                },
                content: {
                'arrow_right': 'url("/assets/icons/arrow_right.png")',
                },
                boxShadow: {
                'card_shadow': ' 0 4px 8px 0 rgba(0, 0, 0, 0.1), 0 6px 20px 0 rgba(0, 0, 0, 0.1)',
                 '3xl': '0 35px 60px -15px rgba(0, 0, 0, 0.3)',
                 'flag':'0px 0px 16px 0px #00000029'
                },
                screens: {
                    'laptop': '1024px',
                    'desktop': '1280px',
                    'desktop-lg':'1366px',
                }
            }
          }
        }
    </script>
    
</head>
<body>
<div class="header shadow-lg">
    <div class="relative h-14  p-0 flex justify-center items-center">
        <h1 class="text-xs laptop:text-md desktop:text-lg text-center">Free shipping on all orders over <span class="font-sans">₱</span>5,000</h1>
        <div class="hidden  absolute right-16 desktop:flex items-center">
            <div class="bg-white p-1 me-2 shadow-flag rounded-md cursor-pointer">
                <img src="<?= base_url("assets/icons/philippine_flag.png") ?>" alt="philippine_flag">
            </div>
            <div class="p-1 rounded-md cursor-pointer ">
                <img src="<?= base_url("assets/icons/usa_flag.png") ?>" alt="usa_flag">
            </div>
        </div>
    </div>
    <div class="bg-primary flex justify-between items-center px-4 py-2 laptop:px-8 desktop:py-4 desktop:px-16">
        <div class="desktop:hidden">
            <img src="<?= base_url("assets/icons/sm_menu-white.svg") ?>" >
        </div>
        <div class="cursor-pointer  w-full desktop:w-max ">
            <a href="<?=base_url()?>">
                <img class="h-8 w-max m-auto desktop:m-0 desktop:h-auto" src="<?=base_url("assets/images/tpr_images/tpr_logo_white_qouted.png")?>" />
            </a>
        </div>
        <!-- Mobile cart icon -->
        <div class=" flex space-x-5 desktop:hidden">
            <img class="w-18px  cursor-pointer" src="<?=base_url('assets/icons/search-sm-white.svg')?>" />
            <img class="w-18px h-18px" src="<?= base_url("assets/icons/shopping_cart_icon.png") ?>" alt="user icon">
        </div>
        <div class=" hidden desktop:flex w-1/2 ">
            <div class="h-12 pe-5   w-full flex bg-white rounded-e-md rounded-s-md">
                <select class="w-20 ps-5 bg-gray-100  rounded-s-md shadow appearance-none border-0   focus:ring-0   text-gray-700 leading-tight ">
                    <option>All</option>
                    <option>option long somdasbifdasf</option>
                </select>
                <input class="text-black text-base font-normal  m-0 w-full placeholder:text-black  appearance-none border-0 focus:ring-0" placeholder="Search Products" type="text">
                <img class="w-18px   cursor-pointer" src="<?=base_url('assets/icons/search-lg-black.svg')?>" />
            </div>
        </div>
        <div class="hidden  desktop:flex justify-between items-center  h-11 w-max ">
            <img src="<?=base_url('assets/icons/tpr-user_icon.svg')?>" class=" me-2 w-8 h-8" />
            <div class="text-white mx-2 text-sx cursor-pointer text-xs">
                <a href="<?=site_url('login')?>">
                    <p class="leading-5">Welcome</p>
                    <p>Login/Signup</p>
                </a>
            </div>
            <hr class="border border-white mx-5 d-none d-lg-block" style="height:45px">
            <div class="flex items-center justify-between w-full">
                <img src="<?=base_url("assets/icons/heart_icon.png")?>" class="mx-2 w-8 "  />
                <a href="<?=site_url('products/carts')?>">
                    <img src="<?= base_url("assets/icons/shopping_cart_icon.png") ?>" class="mx-2 w-8 "  alt="user icon">
                </a>
            </div>
        </div>
    </div>
    <div class=" hidden desktop:block p-6 ">
        <ul class="flex justify-between m-auto w-70%">
            <li id="product_nav" data-dropdown_id="product_menu" class="hover:text-primary hover:underline hover:font-semibold nav-link"  data-dropdown-toggle="product_menu"   data-dropdown-trigger="hover">
                <a href="#">Products</a>
            </li>
            <li id="market_nav" data-dropdown_id="market_menu" class="hover:text-primary hover:underline hover:font-semibold nav-link" data-dropdown-toggle="market_menu" data-dropdown-trigger="hover">
                <a href="#">Markets We Serve</a>
            </li> 
            <li id="brand_nav" data-dropdown_id="brand_menu" class="hover:text-primary hover:underline hover:font-semibold nav-link" data-dropdown-toggle="brand_menu"  data-dropdown-trigger="hover">
                <a href="#">Brands</a>
            </li>
            <li class="hover:text-primary hover:underline hover:font-semibold">
                <a href="#">News</a>
            </li>
            <li class="hover:text-primary hover:underline hover:font-semibold">
                <a href="#">About</a>
            </li>
            <li class=" <?=$this->uri->slash_segment(1)=='contact-us/'? 'text-primary font-semibold' : '';?> hover:text-primary active hover:underline hover:font-semibold">
                <a href="<?=site_url('contact-us')?>">Contact Us</a>
            </li>
            <li class="<?=$this->uri->slash_segment(1)=='become-a-dealer/'? 'text-primary font-semibold' : '';?> hover:text-primary hover:underline hover:font-semibold">
                <a href="<?=site_url('become-a-dealer')?>" >Be a Local Dealer</a>
            </li>
        </ul>
    </div>
</div>
<div id="product_menu" data-nav_id="product_nav" class="z-50 dropdown-content p-16 z-10 hidden flex justify-base  bg-white w-full ">
    <div class=" w-28.64% h-max pe-8 ">
        <ul class="flex flex-wrap flex-col space-y-4 -mb-px text-2sm  " id="default-styled-tab" data-tabs-toggle="#product-dropdown-tab-contentt" 
        data-tabs-active-classes="text-primary font-bold after:ms-3 after:content-[url('./assets/icons/arrow_right.png')]" 
        data-tabs-inactive-classes="hover:font-bold hover:text-primary"
        role="tablist">
            <li  role="presentation">
                <button class="inline-block underline after:content-none text-black" type="button" >Shop All Products</button>
            </li>
            <li  role="presentation">
                <button class="inline-block" id="profile-styled-tab" data-tabs-target="#styled-profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Disposable Medical Supplies</button>
            </li>
            <li role="presentation">
                <button class="inline-block " id="dashboard-styled-tab" data-tabs-target="#styled-dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">Durable Medical Equipment</button>
            </li>
        </ul>
    </div>
    <div class="w-full " id="product-dropdown-tab-content" >
        <div class="flex justify-between hidden" id="styled-profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="px-8 w-full">
                <ul class="flex space-b-10 w-full flex-wrap justify-normal flex-start flex-col max-h-72">
<?php if($DISPOSABLES && isset($DISPOSABLES->SUB_CATEGORIES)&& !empty($DISPOSABLES->SUB_CATEGORIES)) { ?>
    <?php foreach($DISPOSABLES->SUB_CATEGORIES as $category) : ?>
                <li class="mb-5 w-max  ">
                    <a href="<?=site_url('products/disposables?name='.$category->name)?>"><?=$category->name?></a>
                </li>
        <?php endforeach ?>
<?php } ?>  
                </ul>
                <div class="w-full border-t pt-5">
                    <div class="w-max ms-auto">
                        <p class="ms-auto">Create your own kit:</p>
                        <p class="text-primary w-max ms-auto">Customized Medical Kits / Pack</p>
                    </div>
                </div>
            </div>
            <div class="flex w-full justify-end relative">
                
                <div class="relative">
                <button class="p-2 bg-white bottom-4 left-4 absolute font-medium rounded-lg">
                    Shop Our Bandages
                </button>
                    <img src="<?=base_url('assets/images/image_dropdown-1.jpg')?>" class="w-455px">
                </div>
            </div>
        </div>
        <div class="flex justify-between hidden" id="styled-dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
             <div class="px-8 w-full">
                <ul class="flex space-b-10 w-full flex-wrap justify-normal flex-start flex-col max-h-72">
<?php if($DURABLES&& isset($DURABLES->SUB_CATEGORIES)&& !empty($DURABLES->SUB_CATEGORIES)) { ?>
    <?php foreach($DURABLES->SUB_CATEGORIES as $category) : ?>
                <li class="mb-5 w-max  ">
                    <a href="<?=site_url('products/durables?name='.$category->name)?>"><?=$category->name?></a>
                </li>
        <?php endforeach ?>
<?php } ?>  
                </ul>
            </div>
            <div class="w-full flex justify-end">
                <div class="relative">
                    <button class="p-2 bg-white bottom-4 left-4 absolute font-medium rounded-lg">
                        Shop Hospital / Emergency
                    </button>
                    <img src="<?=base_url('assets/images/image_dropdown-2.jpg')?>" class="w-455px">
                </div>
            </div>
        </div>
    </div>
</div>
<div data-nav_id="market_nav" class="dropdown-content p-16 z-50 hidden flex justify-between  bg-white w-full " id="market_menu">
        <div class="w-full relative ">
            <ul class="flex  h-full  w-full flex-wrap justify-normal flex-start flex-col max-h-80">
                <li class="mb-5 w-max ">
                    <a href="<?= site_url('market_segments') ?>" class="underline">Shop All Markets We Serve   </a>
                </li>
<?php if($MARKET_SEGMENTS) { ?>
    <?php foreach($MARKET_SEGMENTS as $segment) : ?>
                <li class="mb-5 w-max  ">
                    <a href="<?=site_url('market_segments?market='.$segment->id)?>"><?=$segment->name?></a>
                </li>
        <?php endforeach ?>
<?php } ?>  
            </ul>
<?php if(!$MARKET_SEGMENTS) { ?>
            <div class="absolute top-0 left-1/2 translate-y-1/2">
                <img src="<?=base_url('assets/icons/stack-sm.svg')?>" alt="">
                <p class="text-primary font-semibold">No categories</p>
            </div>
<?php }?>
        </div>
        <div class="flex justify-end w-1/2">
            <div class="relative">
                <button class="p-2 bg-white bottom-4 left-4 absolute font-medium rounded-lg">
                    Shop Our Gloves Section
                </button>
                <img src="<?=base_url('assets/images/image_dropdown-3.jpg')?>" class="w-455px">
            </div>
        </div>
</div>
<div  data-nav_id="brand_nav" id="brand_menu" class="dropdown-content p-16 z-50 hidden flex justify-base  bg-white w-full ">
    <div class=" w-15% h-max  ">
        <ul class="flex flex-wrap flex-col  space-y-4 -mb-px text-2sm font-medium " id="default-styled-tab" data-tabs-toggle="#brand-dropdown-tab-content" 
        data-tabs-active-classes="text-primary font-bold after:ms-3 after:content-[url('/assets/icons/arrow_right.png')]" 
        data-tabs-inactive-classes="text-gray-500 hover:text-primary hover:font-bold" 
        role="tablist">
            <li  role="presentation">
                <a href="<?= site_url('brands') ?>">
                    <button class="inline-block underline after:content-none text-black" type="button" >Shop All Brands</button>
                </a>
            </li>
<?php foreach($BRAND_TABS as $brand_tab) :  ?>
            <li  role="presentation">
                <button class="inline-block" id="profile-styled-tab" data-tabs-target="#styled-<?=$brand_tab['tab_id']?>" type="button" role="tab" aria-controls="<?=$brand_tab['tab_id']?>" aria-selected="false"><?=$brand_tab['name']?></button>
            </li>
<?php endforeach ?>
            <!-- <li role="presentation">
                <button class="inline-block " id="dashboard-styled-tab" data-tabs-target="#styled-dukal" type="button" role="tab" aria-controls="dashboard" aria-selected="false">Dukal</button>
            </li> -->
            
        </ul>
    </div>
    <div class="w-full " id="brand-dropdown-tab-content" >
<?php foreach($BRAND_TAB_CONTENT as $content) : ?>
        <div class="flex justify-between hidden" id="styled-<?=$content['tab_id']?>" role="tabpanel" aria-labelledby="<?=$content['tab_id']?>-tab">
             <div class=" w-full">
<?php if( $content['categories']) { ?>
                <ul class="flex space-b-10 w-full flex-wrap justify-normal flex-start flex-col max-h-80">
<?php foreach($content['categories'] as $category) : ?>
                    <li class="mb-5 w-max ">
                        <a><?=$category->name?></a>
                    </li>
<?php endforeach?>

                    <!-- <li class="mb-5 w-max  ">
                        <a>Dialysis Chairs</a>
                    </li>
                    <li class="mb-5 w-max">
                        <a>Mobility</a>
                    </li>
                    <li class="mb-5  w-max">
                        <a>Patient Accessories</a>
                    </li>
                    <li class="mb-5  w-max">
                        <a>Respiratory</a>
                    </li>
                    <li class="mb-5  w-max">
                        <a>Wheelchairs</a>
                    </li> -->
                </ul>
<?php } ?>
            </div>
        </div>
<?php endforeach?>
    </div>
</div>
  <?= $contents ?>
<footer class="p-16 bg-primary"> 
        <div class="w-max m-auto">
            <img src="<?= base_url("assets/images/tpr_images/tpr-logo-white.png") ?>" class="w-16">
        </div>
        <section class="desktop:flex justify-between align-base mt-16">
            <div class="w-full desktop:max-w-20.32% text-white text-sm flex desktop:flex-col desktop:space-y-8">
                <p>“Your One-Stop Shop for your Healthcare Needs”</p>
                <p>We offer wholesale pricing to all our clients. Our goal is provide high quality products at a low price.</p>
                <p><span class="font-semibold">TRP Medical</span> Copyright c 2023 All rights reserved.</p>
                <p>Privacy and Policy</p>
            </div>
            <div class="flex flex-col space-y-8 w-max h-max text-white text-sm">
                <p class="uppercase font-semibold">COMPANY</p>
                <div class="flex flex-col space-y-3">
                    <p>Overview</p>
                    <p>Core Values</p>
                    <p>Mission & Vision</p>
                    <p>Brands</p>
                </div>
            </div>
            <div class="flex flex-col space-y-8 w-max h-max text-white text-sm">
                <p class="uppercase font-semibold">Links</p>
                <div class="flex flex-col space-y-3">
                    <p>Home</p>
                    <p>Products</p>
                    <p>Be a Local Dealer</p>
                    <p>Contacts</p>
                </div>
            </div>
            <div class="flex flex-col space-y-8 w-max h-max text-white text-sm">
                  <p class="uppercase font-semibold text-center">CONNECT WITH US</p>
                  <div class="flex justify-evenly">
                    <img class="img-fluid m-1" src="<?= base_url('assets/icons/facebook_icon.png') ?>" alt="facebook icon" />
                    <img class="img-fluid m-1" src="<?= base_url('assets/icons/linkedin_icon.png') ?>" alt="facebook icon" />
                    <img class="img-fluid m-1" src="<?= base_url('assets/icons/instagram_icon.png') ?>" alt="facebook icon" />
                </div>
            </div>
            <div class="w-auto ">
                <div class="flex w-full  items-center bg-white rounded-lg ps-3">
                    <input type="text" class=" h-14  w-full rounded-none rounded-s-lg placeholder:text-black placeholder:font-medium form-control border-0 appearance-none focus:outline-none focus:ring-0" placeholder="Enter your email to stay in touch!" />
                    <hr class="border secondary" style="height:37px">
                    <button class="btn rounded-none rounded-e-lg bg-white text-black font-semibold px-5">Sign Up</button>
                </div>
                
                <div class="w-full flex lg:flex-nowrap gap-5 justify-between mt-5 text-white">
                    <div class="flex space-y-6 flex-col ">
                        <div class="flex items-center">
                            <img src="<?= base_url('assets/icons/telephone_icon.png') ?>">
                            <span class="ms-4">Call Us</span>
                        </div>
                        <div class="flex items-base text-xs">
                             <img src="<?= base_url('assets/icons/sm-philippine_flag.png') ?>" class="h-max">
                             <div class="ms-4">
                                 <p>(+63) 9878-765-456</p>
                                 <p>(+63) 2837-227-978</p>
                             </div>
                        </div>
                        <div class="flex items-base text-xs">
                             <img src="<?= base_url('assets/icons/sm-usa_flag.png') ?>" class="h-max">
                             <div class="ms-4">
                                 <p>(+1) 973-542-8130</p>
                             </div>
                        </div>
                    </div>
                    <div class="flex space-y-6 flex-col">
                        <div class="flex items-center">
                            <img src="<?= base_url('assets/icons/mail_icon.png') ?>">
                            <span class="ms-4">Email Us</span>
                        </div>
                        <div class="flex flex-col space-y-1">
                            <div class="flex items-base text-xs">
                                 <img src="<?= base_url('assets/icons/sm-philippine_flag.png') ?>" class="h-max">
                                 <div class="ms-4">
                                     <p>customerservice@tprmedical.com</p>
                                 </div>
                            </div>
                            <div class="flex items-base text-xs">
                                 <img src="<?= base_url('assets/icons/sm-usa_flag.png') ?>" class="h-max">
                                 <div class="ms-4">
                                     <p>tprmedical@aol.com</p>
                                 </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex space-y-6 flex-col">
                        <div class="flex items-center">
                            <img src="<?= base_url('assets/icons/location_icon.png') ?>">
                            <span class="ms-4">Address</span>
                        </div>
                        <div class="flex flex-col space-y-1">
                            <div class="flex items-base text-xs">
                                 <img src="<?= base_url('assets/icons/sm-philippine_flag.png') ?>" class="h-max">
                                 <div class="">
                                     <p class="text-wrap text-left ms-4 max-w-25">G/F Unit 102, 
                                        Corporate 101 
                                        Bldg., Mother
                                        Ignacia Avenue,1103 Quezon City, 
                                        Philippines</p>
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</footer>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
  <!-- <script src="https://cdn.tailwindcss.com"></script> -->
  <script>
    $(document).ready(function(){
        // $('body').css('zoom', '75%');
        function isElementHidden(element) { 
                    return $(element).css('display') === 'none';
                }
    // $('.nav-link').hover(function(){
        
    // },function (){
    //     let dropdown=$(this).data('dropdown_i')
    //     if (isElementHidden('#'+dropdown)) {
    //         $(this).removeClass('text-primary');
    //         $(this).removeClass('font-semibold');
    //     } else {
    //         $(this).addClass('text-primary');
    //         $(this).addClass('font-semibold');
    //     }
    // })
    $('.dropdown-content').hover(function(){
        // Usage example
        let elem=$(this).data('nav_id');
        $('#'+elem).addClass('text-primary');
        $('#'+elem).addClass('font-semibold');

    },function(){
        let elem=$(this).data('nav_id');
        $('#'+elem).removeClass('text-primary');
        $('#'+elem).removeClass('font-semibold');
    })
    $('.product_card').hover(function(){
                console.log('ssss');
                let image=$(this).find('.product_image_top');
                image.attr('src',image.data('thumbnail')).css('transition','src 5.5s ease-in-out')
            },function(){
                console.log('dddd');
                let image=$(this).find('.product_image_top');
                image.attr('src',image.data('default_image'))
        })
    })
  </script>
</body>
</html>