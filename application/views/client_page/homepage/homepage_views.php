<head>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css"
        integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/1112982c9a.js" crossorigin="anonymous"></script>
</head>
<style>
.feature_tab .nav .nav-link {
    border: none;
    color: #989898;
}

.feature_tab .nav-tabs {
    position: relative;
    bottom: -11px;
    border-width: 2px;
}

.feature_tab nav .nav-link.active {
    color: var(--blue);
    font-weight: 700;
    /*box-shadow: 0px 3px var(--blue);*/
    /*outline: 2px solid var(--blue);*/
    border-bottom:3px solid var(--blue);
}

.slick-prev.slick-disabled:before,
.slick-next.slick-disabled:before {
    opacity: 1 !important;
}

.slick-prev:before,
.slick-next:before {
    opacity: 1 !important;
    box-shadow: 0px 0px 16px 0px rgba(0, 0, 0, 0.12);
}

.slick-dots {
    position: relative;
}

.slick-dots li button:before {
    color: #0235B5 !important;
    font-size: 15px !important;
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

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

/* Box sizing rules */
*,
*::before,
*::after {
    box-sizing: border-box;
}

/* Remove default margin */
body,
h1,
h2,
h3,
h4,
p,
figure,
blockquote,
dl,
dd {
    margin: 0;
}

/* Remove list styles on ul, ol elements with a list role, which suggests default styling will be removed */
ul[role='list'],
ol[role='list'] {
    list-style: none;
}

/* Set core root defaults */
html:focus-within {
    scroll-behavior: smooth;
}

/* Set core body defaults */
body {
    min-height: 100vh;
    text-rendering: optimizeSpeed;
    line-height: 1.5;
    font-family: 'Poppins', sans-serif;
    /* background-size: 32px 32px; */
    color: var(--dark);
}

/* A elements that don't have a class get default styles */
a:not([class]) {
    text-decoration-skip-ink: auto;
}

/* Inherit fonts for inputs and buttons */
input,
button,
textarea,
select {
    font: inherit;
}

/* Remove all animations, transitions and smooth scroll for people that prefer not to see them */
@media (prefers-reduced-motion: reduce) {
    html:focus-within {
        scroll-behavior: auto;
    }

    *,
    *::before,
    *::after {
        animation-duration: 0.01ms !important;
        animation-iteration-count: 1 !important;
        transition-duration: 0.01ms !important;
        scroll-behavior: auto !important;
    }
}

/* GLOBAL STYLES */
:root {
    --blue: #0235B5;
    --grey: #F5F5F5;
    --grey-d-1: #EEE;
    --grey-d-2: #DDD;
    --grey-d-3: #888;
    --white: #FFF;
    --dark: #222;
    --primary: #0235B5;
}

/* GLOBAL STYLES */
.chat {
    font-size: 1.1rem;
    margin-left: 10px;
}

/* CHATBOX */
.chatbox-wrapper {
    position: fixed;
    bottom: 2rem;
    right: 2rem;
    width: 7rem;
    height: 2.75rem;
    z-index: 11;
}

.chatbox-toggle {
    width: 100%;
    height: 100%;
    background: var(--primary);
    color: var(--white);
    font-size: 2rem;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 10px;
    cursor: pointer;
    transition: .2s;
    position: absolute;
    right: 30px;

}

.chatbox-toggle:active {
    transform: scale(.9);
}

.chatbox-message-wrapper {
    position: absolute;
    bottom: calc(100% + 1rem);
    right: 0;
    width: 375px;
    border-radius: .5rem;
    overflow: hidden;
    box-shadow: .5rem .5rem 2rem rgba(0, 0, 0, .1);
    transform: scale(0);
    transform-origin: bottom right;
    transition: .2s;
    z-index: 111;
}

.chatbox-message-wrapper.show {
    transform: scale(1);
}

.chatbox-message-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: var(--white);
    padding: .75rem 1.5rem;
    position: relative;
}

.chatbox-message-profile {
    display: flex;
    align-items: center;
    grid-gap: .5rem;
}

.chatbox-message-name {
    font-size: 1.125rem;
    font-weight: 600;
    margin: 0;
}

.chatbox-message-status {
    font-size: .875rem;
    color: var(--grey-d-3);
}

.chatbox-message-dropdown {
    position: relative;
}

.chatbox-message-dropdown-toggle {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 2.5rem;
    height: 2.5rem;
    font-size: 1.25rem;
    cursor: pointer;
    border-radius: 50%;
}

.chatbox-message-dropdown-toggle:hover {
    background: var(--grey);
}

.chatbox-message-dropdown-menu {
    list-style: none;
    margin: 0;
    position: absolute;
    top: 100%;
    right: 0;
    background: var(--white);
    padding: .5rem 0;
    width: 120px;
    box-shadow: .25rem .25rem 1.5rem rgba(0, 0, 0, .1);
    transform: scale(0);
    transform-origin: top right;
    transition: .2s;
    border-radius: .5rem;
}

.chatbox-message-dropdown-menu.show {
    transform: scale(1);
}

.chatbox-message-dropdown-menu a {
    font-size: .875rem;
    font-weight: 500;
    color: var(--dark);
    text-decoration: none;
    padding: .5rem 1rem;
    display: block;
}

.chatbox-message-dropdown-menu a:hover {
    background: var(--grey);
}

.chatbox-message-content {
    background: var(--grey);
    padding: 1.5rem;
    display: flex;
    flex-direction: column;
    grid-row-gap: 1rem;
    max-height: 700px;
    height: 350px;
    overflow-y: auto;
}

.chatbox-message-item {
    width: 80%;
    padding: 1rem;
}

.chatbox-message-item.sent {
    align-self: flex-end;
    background: var(--blue);
    color: var(--white);
    border-radius: .75rem 0 .75rem .75rem;
}

.chatbox-message-item.received {
    background: var(--white);
    border-radius: 0 .75rem .75rem .75rem;
    box-shadow: .25rem .25rem 1.5rem rgba(0, 0, 0, .05);
    color: var(--blue);
}

.chatbox-message-item-time {
    float: right;
    font-size: .75rem;
    margin-top: .5rem;
    display: inline-block;
}

.chatbox-message-bottom {
    background: var(--white);
    padding: .75rem 1.5rem;
}

.chatbox-message-form {
    display: flex;
    align-items: center;
    background: var(--grey);
    border-radius: .5rem;
    padding: .5rem 1.25rem;
    position: relative;
}

.chatbox-message-input {
    background: transparent;
    outline: none;
    border: none;
    resize: none;
    scrollbar-width: none;
}

.chatbox-message-input::-webkit-scrollbar {
    display: none;
}

.chatbox-message-submit {
    font-size: 1.25rem;
    color: var(--blue);
    background: transparent;
    border: none;
    outline: none;
    cursor: pointer;
    position: absolute;
    right: 0;
    margin-right: 10px;
}

.chatbox-message-no-message {
    font-size: 1rem;
    font-weight: 600;
    text-align: center;
}

/* CHATBOX */
.close {
    cursor: pointer;
    position: absolute;
    right: 0;
    top: 0;
    margin: 10px;
    opacity: .3;
}

.close:hover {
    border: 1px solid gray;
}

.wrapper-chat {
    display: flex;
}

.logo {
    margin-right: 5px;
    margin-top: 3px;
}

.slide_card_title {
    min-height: 51px;
}

.arrow-up {
    height: 4rem;
    width: 4rem;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: var(--primary);
    border-radius: 50%;
    position: fixed;
    right: 4.5rem;
    bottom: 6rem;
    z-index: 10;

}
.arrow-up:hover{
    border:1px solid white;
    filter: drop-shadow(8px 8px 10px gray);
}
/*.physician_care_image{*/
/*    max-height:300px;*/
/*    max-width:200px;*/
/*}*/
.arrow-up a {
    color: var(--white);
    font-size: 2rem;
    display: flex;
    justify-content: center;
    align-items: center;
    text-decoration: none;
}

.home-gauze_text {
    font-size: 22px;
}

.gauze-img-top {
    max-height: 233px;
}

/* BREAKPOINTS */
@media screen and (max-width: 576px) {
    .chatbox-message-wrapper {
        width: calc(100vw - 2rem);
    }

    .chatbox-wrapper {
        bottom: 1rem;
        right: 1rem;
    }

}

.text-capitalize {
    text-transform: capitalize;
}

.shop-now-btn {
    background-color: #FFF;
}

.shop-now-btn:hover {
    background-color: var(--primary);
    border: 1px solid #0000;
    color: var(--white);
    transition: 300ms ease;
}

.shop-gauzes-btn {
    color: var(--white);
    background-color: var(--primary);
}

.shop-gauzes-btn:hover {
    background-color: var(--white);
    color: black;
    border: 2px solid black !important;
    transition: 400ms ease;
}

.home-header_title {
    font-size: 50px;
}

.home-header_img {
    height: 600px;
}

.home-header_title {
    top: 60px;
    left: 60px;
    font-size: 50px;
}

.home-header_btn {
    width: 239px;
    height: 60px;
    bottom: 150px;
    left: 60px;
}

.home-header_dots {
    bottom: 40px;
    left: 60px;
}

.carousel-indicators {
    margin-left: 0px !important;
    margin-right: 0px !important;
    width: max-content !important;
}

/* BREAKPOINTS */
@media only screen and (max-width: 480px) {
    .home-h2 {
        font-size: 25px;
    }

    .slick-dots {
        text-align: left !important;
    }

    .slick-dots li:nth-child(n+4) {
        display: none;
    }

    .home-gauze_text {
        font-size: 16px;
    }

    .shop-gauzes-btn {
        background-color: white;
    }

    .home-header_img {
        height: 400px;
    }

    .home-header_title {
        font-size: 20px;
        left: 30px;
    }

    .home-header_btn {
        width: 228px;
        height: 44px;
        bottom: 80px;
        left: 30px;
    }

    .home-header_dots {
        bottom: 20px;
        left: 30px;
    }

    .home-footer_h2 {
        font-size: 16px;
        line-height: 20px;
    }

    .home-carousel-image {
        object-fit: cover;
    }
    
}

@media only screen and (min-width: 481px) {
    font-size: 40px;

    .home-carousel-image {
        object-fit: cover !important;
    }
}

@media only screen and (min-width: 1024px) {}
</style>

<div class="container-fluid p-0">
    <section class="main-head position-relative" >
        <!--<div>-->
        <!--    <img class="img-fluid home-header_img w-100" style="object-fit:cover" src="" alt="" srcset="">-->
        <!--</div>-->

        <button class="position-absolute home-header_btn shop-now-btn w-max  btn text-600 px-3 py-2 rounded-10 "
            style="z-index:6">Shop Now</button>
        <div id="homde-carousel" class="carousel slide carousel-fade " style="min-height:inherit"
            data-bs-ride="carousel" data-bs-pause="false">
            <div class="position-absolute home-header_dots carousel-indicators " style="z-index:6">
                <button type="button" class="active rounded-circle" data-bs-target="#homde-carousel"
                    style="width: 10px;height: 10px;" data-bs-slide-to="0" aria-current="true"
                    aria-label="Slide 1"></button>
                <button type="button" class="rounded-circle" data-bs-target="#homde-carousel"
                    style="width: 10px;height: 10px;" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" class="rounded-circle" data-bs-target="#homde-carousel"
                    style="width: 10px;height: 10px;" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" class="rounded-circle" data-bs-target="#homde-carousel"
                    style="width: 10px;height: 10px;" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner" style="min-height:inherit">
                <div class="carousel-item active" style="min-height:inherit">
                    <img class="d-block home-carousel-image w-100 img-fluid home-header_img" alt="slid 1"
                        src="<?= base_url('assets_system/images/tpr_images/banner1.png') ?>" style="object-fit:cover">
                    <div class="position-absolute w-100 h-100 top-0"
                        style="background-color: black;opacity: 0.4;z-index:5"></div>
                    <div class="position-absolute text-white w-50 text-700 home-header_title " style="z-index:6">
                        <p class="p-0">PROVIDING THE BEST QUALITY PRODUCTS TRUSTED BY PROFFESSIONALS</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block home-carousel-image w-100 img-fluid home-header_img"
                        src="<?= base_url('assets_system/images/tpr_images/banner2.png') ?>" class="d-block w-100"
                        alt="slide 2">
                    <div class="position-absolute w-100 h-100 top-0"
                        style="background-color: black;opacity: 0.4;z-index:5"></div>
                    <div class="position-absolute text-white text-700 home-header_title" style="z-index:6">
                        <p class="p-0">YOUR HEALTH, OUR PRIORITY</p>
                        <p class="p-0">SHOP WITH CONFIDENCE</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block home-carousel-image w-100 img-fluid home-header_img"
                        src="<?= base_url('assets_system/images/tpr_images/banner3.png') ?>" class="d-block w-100"
                        alt="slide 3">
                    <div class="position-absolute w-100 h-100 top-0"
                        style="background-color: black;opacity: 0.4;z-index:5"></div>
                    <div class="position-absolute text-white text-700 home-header_title" style="z-index:6">
                        <p class="p-0">MEDICAL ESSENTIALS</p>
                        <p class="p-0">TRUSTED DELIVERY EVERY TIME</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block home-carousel-image w-100 img-fluid home-header_img"
                        src="<?= base_url('assets_system/images/tpr_images/banner4.png') ?>" class="d-block w-100"
                        alt="slide 4">
                    <div class="position-absolute w-100 h-100 top-0"
                        style="background-color: black;opacity: 0.4;z-index:5"></div>
                    <div class="position-absolute text-white text-700 home-header_title" style="z-index:6">
                        <p class="p-0">QUALITY HEALTH PRODUCTS</p>
                        <p class="p-0">CERTIFIED TRUST</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php if($FEATURED_TAB) : ?>
    <section class="px-md-5"> 
        <div class="d-flex justify-content-between align-items-center justify-content-md-center">
            <h2 class="my-3 px-2 px-md-0  my-md-5 text-md-center text-start text-600 home-h2">Featured Products</h2>
            <p class="text-decoration-underline d-md-none home-view_all_products text-500 text-center p-0 m-0"
                style="font-size: 10px;">View All Products</p>
        </div>
        <div class="container-fluid mb-5 feature_tab ">
            <nav class="position-relative border-3 border-bottom p-0 ">
                <div class="row justify-content-md-center">
                    <div class="col col-md-8">
                        <div class="nav nav-tabs d-flex  flex-nowrap w-90 m-md-auto border-0  justify-content-md-evenly" style="top:2px;overflow:auto;"
                            id="nav-tab" role="tablist" style="overflow-x:auto;overflow-y:hidden">
                            <?php foreach($FEATURED_TAB as $key=> $tab) { ?>
        
                            <button style="width: 200px;"
                                class="text-nowrap nav-link <?=$key==0? 'active' : ''?> my-0 text-500 text-capitalize"
                                id="nav-<?=$tab['tab_id']?>-tab" data-bs-toggle="tab" data-bs-target="#nav-<?=$tab['tab_id']?>" type="button"
                                role="tab" aria-controls="nav-gloves"
                                aria-selected="true"><?=$tab['tab_name']?></button>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="tab-content my-5 position-relavite " id="nav-tabContent" style="min-height:511px">
<?php for($i=0;$i<count($FEATURED_CAT);$i++) { ?>
                <div class="tab-pane fade  <?=$i==0? 'show active': ''?>" id="nav-<?=$FEATURED_CAT[$i]['tab_id']?>"
                    role="tabpanel" aria-labelledby="nav-<?=$FEATURED_CAT[$i]['tab_id']?>-tab">
                    <div class="container-fluid px-md-5 h-100">
<?php if(count($FEATURED_CAT[$i]['products'])==0) { ?>
                        <h2 class="text-center" style="height:570px">No Product Found</h2>
<?php } ?>  
                        <div class="feature_slide  position-raltive px-4" style="left:0px">
<?php foreach($FEATURED_CAT[$i]['products'] as $item) {  ?>
                            <div class="card product_slide_card rounded-15 border m-3 cursor-pointer" style="border-radius:15px;min-height:511px;max-height:511px;">
                                <div class="" style="min-height:511px;max-height:511px">
                                    <a href="<?=site_url('products/shop/'.$item->slug)?>" class="">
                                        <img class="product_img h-100 w-100 card-img-top img-fluid rounded-top-10" width="328px" height="328px"
                                            style="object-fit: cover;max-height:328px;border-radius:15px 15px 0px 0px"
                                            src="<?= base_url($item->photos) ?>" data-default_image="<?= base_url($item->photos) ?>" data-alt_src="<?= base_url($item->thumbnail) ?>"  alt="product image">
                                    </a>
                                    <div class="bg-white h-100 px-3">
                                        <a class="d-flex flex-column justify-content-evenly m-0 p-0 text-dark text-decoration-none"
                                            href="<?=site_url('products/shop/'.$item->slug)?>"  style="height:170px">
                                            <p class="text-600 card-title text-dark p-0 m-0" style="font-size:1rem"><?=$item->name?></p>
                                            <div>
                                                <p class="text-secondary mb-2"><?=$item->brand?></p>
                                                <p class="text-600 text-dark mb-2">P <?=$item->unit_price?></p>
                                                <p class="text-dark">Only Extra Large </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            
<?php } ?>
                        
                        </div>
                       
                    </div>
                    
                </div>             

<?php } ?>
                 <a href=""
                class="text-decoration-underline align-self-end   d-none d-md-block  text-500 text-center"
                style="font-size: 20px;color:black">Explore More Products</a>
                <!--<div class="align-self-baseline">Aligned flex item</div>-->
                <!--<div class="bg-secondary text-white align-items-end">Flex Item 2 (Aligned to Bottom)</div>-->
                 
            </div>
        </div>
    </section>
<?php endif ?>
    <section class="">
        <div class="container-fluid d-none d-md-block  p-5"
            style="height:700px;background-image:url(<?=base_url('assets/images/physician_care_bg.jpg')?>);">
            <div class="d-flex justify-content-between px-md-3">
                <div class="text-white">
                    <span class="text-500" style="font-size:50px">Physician Care</span>
                    <p>Antiseptic % Cleansing</p>
                </div>
                <button class="btn shop-now-btn  text-600 " style="height:60px;width:431px">SHOP ALCOHOL PREP
                    PODS</button>
            </div>
            <div class="container-fluid p-0 mt-5">
                <div class="row justify-content-between px-md-3">
                    <div class="col-4">
                        <div class="physician_care_image_container position-relative w-100">
                            <img class="img-fluid physician_care_image w-100"
                                src="<?= base_url('assets/images/home-sphygmomanometer.jpg') ?>"
                                alt="physician_care_image" style="object-fit:cover;max-height:426px">
                            <p class="position-absolute text-white"
                                style="bottom:20px;left:20px;font-size:1.5rem;z-index:2">Sphygmomanometer</p>
                            <div class="position-absolute w-100 h-100 top-0"
                                style="background: linear-gradient(230.34deg, rgba(255, 255, 255, 0) 17.38%, rgba(0, 0, 0, 0.56) 95.19%);">
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="physician_care_image_container position-relative w-100">
                            <img class="img-fluid physician_care_image w-100"
                                src="<?= base_url('assets/images/home-thermometers.jpg') ?>" alt="physician_care_image"
                                style="object-fit:cover;max-height:426px">
                            <p class="position-absolute text-white "
                                style="bottom:20px;left:20px;font-size:1.5rem;z-index:2">Thermometers</p>
                            <div class="position-absolute w-100 h-100 top-0"
                                style="background: linear-gradient(230.34deg, rgba(255, 255, 255, 0) 17.38%, rgba(0, 0, 0, 0.56) 95.19%);">
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="physician_care_image_container position-relative w-100 ms-auto"
                            style="max-height:426px">
                            <img class="img-fluid physician_care_image w-100"
                                src="<?= base_url('assets/images/home-stethoscope.jpg') ?>" alr="physician_care_image"
                                style="object-fit:cover;max-height:426px">
                            <p class="position-absolute text-white "
                                style="bottom:20px;left:20px;font-size:1.5rem;z-index:2">Stethoscope</p>
                            <div class="position-absolute w-100 h-100 top-0"
                                style="background: linear-gradient(230.34deg, rgba(255, 255, 255, 0) 17.38%, rgba(0, 0, 0, 0.56) 95.19%);">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="px-md-5">
        <div class="d-flex justify-content-between align-items-center justify-content-md-center">
            <h2 class="my-3 px-2 px-md-0  my-md-5 text-md-center text-start text-600 home-h2">New Arrivals</h2>
            <p class="text-decoration-underline d-md-none home-view_all_products text-500 text-center p-0 m-0"
                style="font-size: 10px;">View All Products</p>
        </div>
        <div class="container-fluid mb-5 feature_tab ">

            <div class=" position-relavite " id="nav-tabContent" style="min-height:511px">
                <div>
                    <div class="container-fluid px-md-5 h-100">
                        <div class="feature_slide  position-raltive px-4" style="left:0px">
            <?php for($i=1;$i<5;$i++) {?>
                            <div class="card product_slide_card rounded-15 border m-3 cursor-pointer" style="border-radius:15px;min-height:511px;max-height:511px;">
                                <div class="" style="min-height:511px;max-height:511px">
                                    <a href="" class="">
                                        <img class="product_img h-100 w-100 card-img-top img-fluid rounded-top-10" width="328px" height="328px"
                                            style="object-fit: cover;max-height:328px;border-radius:15px 15px 0px 0px"
                                            src="<?=base_url('assets/images/new_product_'.$i.'.jpg')?>" data-default_image="<?=base_url('assets/images/new_product_'.$i.'.jpg')?>" data-alt_src="<?=base_url('assets/images/new_product_'.$i.'.jpg')?>"  alt="product image">
                                    </a>
                                    <div class="bg-white h-100 px-3">
                                        <a class="d-flex flex-column justify-content-evenly m-0 p-0 text-dark text-decoration-none"
                                            href=""  style="height:170px">
                                            <p class="text-600 card-title text-dark p-0 m-0">Urinary Drainage Bags - 2000mL</p>
                                            <div>
                                                <p class="text-secondary mb-2">Dynarex</p>
                                                <p class="text-600 text-dark mb-2">P 500</p>
                                                <p class="text-dark">Only Extra Large </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
            <?php } ?>
                            <div class="card product_slide_card rounded-15 border m-3 cursor-pointer" style="border-radius:15px;min-height:511px;max-height:511px;">
                                <div class="" style="min-height:511px;max-height:511px">
                                    <a href="" class="">
                                        <img class="product_img h-100 w-100 card-img-top img-fluid rounded-top-10" width="328px" height="328px"
                                            style="object-fit: cover;max-height:328px;border-radius:15px 15px 0px 0px"
                                            src="<?=base_url('assets/images/new_product_4.jpg')?>" data-default_image="<?=base_url('assets/images/new_product_4.jpg')?>" data-alt_src="<?=base_url('assets/images/new_product_4.jpg')?>"  alt="product image">
                                    </a>
                                    <div class="bg-white h-100 px-3">
                                        <a class="d-flex flex-column justify-content-evenly m-0 p-0 text-dark text-decoration-none"
                                            href=""  style="height:170px">
                                            <p class="text-600 card-title text-dark p-0 m-0">Urinary Drainage Bags - 2000mL</p>
                                            <div>
                                                <p class="text-secondary mb-2">Dynarex</p>
                                                <p class="text-600 text-dark mb-2">P 500</p>
                                                <p class="text-dark">Only Extra Large </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                    
                </div>
                 <a href=""
                class="text-decoration-underline align-self-end   d-none d-md-block  text-500 text-center"
                style="font-size: 20px;color:black">Explore More Products</a>
            </div>
        </div>
    </section>
    <section class="m-5">
        <div class="container-fluid p-0">
            <div class="row justify-content-evenly">
                <div class="col-6" >
                    <div class="m-auto" style="max-width:500px">
                        <p class="text-600 text-center " style="font-size:3.125rem">Gauzes & Sponges</p>
                        <div class="my-3 text-center home-gauze_text text-justify text-500 "
                            style="color:rgba(30, 30, 30, 0.69)">
                            <p>"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet,
                                consectetur, adipisci velit..." "There is no one who loves
                                pain itself, who seeks after it and wants to have it, simply because it is pain..."</p>
                        </div>
                        <button class=" shop-gauzes-btn border-0 py-3  text-600 w-100 mt-5 rounded-10  d-block m-auto" style="font-size:1.25rem">SHOP
                            GAUZES & SPONGES</button>
                    </div>
                </div>
                <div class="col-6">
                    <div class="container ">
                        <div class="row g-4">
                            <div class="col-6 p-0 w-max m-md-3">
                                <div class="card" style="width:323px;height:472px">
                                    <img src="<?= base_url('assets/images/gauze_sponges-1.png') ?>"
                                        class="h-100 w-100 gauze-img-top card-img-top img-fluid" alt="image header" />
                                    <div class="card-body bg-light">
                                        <p class="text-600 text-center p-2" style="font-size:23px">Save On Little Shoes
                                        </p>
                                        <p class="text-center" style="font-size:14px;line-height:21.98px">Spend $100 and
                                            get 50% off a pair of
                                            Smallbirds kids' shoes with code
                                            KIDDOS at checkout.</p>
                                        <button
                                            class="btn d-block m-auto border text-500 shop-now-btn py-2 rounded-10 w-100 mt-3"
                                            style="max-width:180px">Shop Now</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 p-0 w-max m-md-3">
                                <div class="card" style="width:323px;height:472px">
                                    <img src="<?= base_url('assets/images/card_header-2.jpg') ?>"
                                        class="h-100 w-100 gauze-img-top card-img-top img-fluid" alt="image header" />
                                    <div class="card-body bg-light">
                                        <p class="text-600 text-center p-2" style="font-size:23px">Save On Little Shoes
                                        </p>
                                        <p class="text-center" style="font-size:14px;line-height:21.98px">Spend $100 and
                                            get 50% off a pair of
                                            Smallbirds kids' shoes with code
                                            KIDDOS at checkout.</p>
                                        <button
                                            class="btn d-block m-auto border text-500 shop-now-btn py-2 rounded-10 w-100 mt-3"
                                            style="max-width:180px">Shop Now</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 p-0  w-max m-md-3">
                                <div class="card" style="width:323px;height:472px">
                                    <img src="<?= base_url('assets/images/card_header-3.jpg') ?>"
                                        class="h-100 w-100 gauze-img-top  card-img-top img-fluid" alt="image header" />
                                    <div class="card-body bg-light">
                                        <p class="text-600 text-center p-2" style="font-size:23px">Save On Little Shoes
                                        </p>
                                        <p class="text-center" style="font-size:14px;line-height:21.98px">Spend $100 and
                                            get 50% off a pair of
                                            Smallbirds kids' shoes with code
                                            KIDDOS at checkout.</p>
                                        <button
                                            class="btn d-block m-auto border text-500 shop-now-btn py-2 rounded-10 w-100 mt-3"
                                            style="max-width:180px">Shop Now</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 p-0 w-max m-md-3 ">
                                <div class="card" style="width:323px;height:472px">
                                    <img src="<?= base_url('assets/images/card_header-4.jpg') ?>"
                                        class="h-100 w-100 gauze-img-top card-img-top img-fluid" alt="image header" />
                                    <div class="card-body bg-light">
                                        <p class="text-600 text-center p-2" style="font-size:23px">Save On Little Shoes
                                        </p>
                                        <p class="text-center" style="font-size:14px;line-height:21.98px">Spend $100 and
                                            get 50% off a pair of
                                            Smallbirds kids' shoes with code
                                            KIDDOS at checkout.</p>
                                        <button
                                            class="btn d-block m-auto border text-500 shop-now-btn py-2 rounded-10 w-100 mt-3"
                                            style="max-width:180px">Shop Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Promo And Deals-->
    <section class="px-md-5">
        <div class="d-flex justify-content-between align-items-center justify-content-md-center">
            <h2 class="my-3 px-2 px-md-0  my-md-5 text-md-center text-start text-600 home-h2">Deals & Promos</h2>
            <p class="text-decoration-underline d-md-none home-view_all_products text-500 text-center p-0 m-0"
                style="font-size: 10px;">View All Products</p>
        </div>
        <div class="container-fluid mb-5 feature_tab ">

            <div class=" position-relavite " id="nav-tabContent" style="min-height:511px">
                <div>
                    <div class="container-fluid px-md-5 h-100">
                        <div class=" d-flex justify-content-between position-raltive px-4" style="left:0px">
            <?php for($i=1;$i<5;$i++) {?>
                            <div class="card position-relative m-3 cursor-pointer" style="border-radius:15px;min-height:511px;max-height:511px;">
                                <img src="<?= base_url('assets/images/promo_deal-'.$i.'.jpg') ?>"
                                    class="h-100 w-100 card-img-top img-fluid" alt="image header" />
                                <div class="card-body bg-light">
                                    <p class="text-600">Sharps Containers - 2gal</p>
                                    <p class="text-secondary m-0 mb-2">Dynarex</p>
                                    <p class="text-secondary p-0 m-0">P
                                        <span class="position-relative prev_price">500.00-700.00
                                        </span>
                                        <span class="text-dark text-600">P 450.00-600.00</span>
                                    </p>
                                    <p class="p-0 m-0">3 sizes available</p>
                                </div>
                                <button class="btn text-danger position-absolute bg-white"
                                    style="font-size:0.938rem;top:20px;left:20px">10% off</button>
                            </div>
            <?php } ?>
                        </div>
                       
                    </div>
                    
                </div>
                 <a href=""
                class="text-decoration-underline align-self-end   d-none d-md-block  text-500 text-center"
                style="font-size: 20px;color:black">Explore More Products</a>
            </div>
        </div>
    </section>
    <div class="container-fluid p-3 p-md-5 my-md-5 my-3">
        <hr class="w-100 my-5 mx-3 d-none d-md-block">
        <div class="container-fluid mt-5">
            <div class="row justify-content-center mt-5">
                <div class="col-12 col-md-6 order-2 order-md-1 p-5">
                    <div class=" m-auto d-flex flex-column justify-content-between" style="max-width:565px;min-height:327px">
                        <p class="text-500 text-center text-md-start" style="font-size:1.5rem">Weekly newsletter about our latest products,
                        new arrivals, and more. </p>
                        <div>
                            <div class="my-3">
                                <input type="text" style="height: 56px;" class="form-control"
                                placeholder="Enter your email address">
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault" style="font-size: 16px;">
                                    I consent TPR to send a Newsletter.
                                </label>
                            </div>
                            <button
                                class="btn btn-sm d-block ms-auto rounded-10 text-600 btn-sm border shop-now-btn mt-3 px-3 py-2"
                                style="font-size:13px">
                                <i class='bx bx-envelope'></i> Subscribe
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6  order-1 order-md-2 p-5">
                    <p style="font-size: 24px;">Become a <span class="text-600">TPR Local Dealer</span></p>
                    <div class="my-md-4">
                        <p class=" mt-md-5 home-">Lorem ipsum dolor sit amet, consectetur adipiscing elit, seddolore
                            magna aliqua. Ut veniam, quis nos. Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut lab dolore magna aliqua. Ut enim ad minim veniam, quis
                            nos.Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit, sed do eiusmod tempor incididunt ut lab dolore
                            magna aliqua. Ut enim ad minim veniam, quis nos.</p>
                    </div>
                    <button
                        class="btn w-100 border d-block mx-auto my-3 m-md-0   rounded-10 btn-lg text-600 shop-now-btn"
                        style="font-size:13px;height:50px;max-width:140px">Get Started</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Arrow nav -->
    <div class="arrow-up" id="arrow-fixed">
        <a href="#">
            <i class='bx bx-up-arrow-alt'></i>
        </a>
    </div>
    <!-- ChatBox -->
    <div class="chatbox-wrapper d-none d-sm-block" id="myFixedDiv">
        <div class="chatbox-toggle">
            <i class='bx bx-chat' style="font-size: 1.3rem;"></i>
            <span class="chat">Chat</span>
        </div>
        <div class="chatbox-message-wrapper">
            <div class="chatbox-message-header">
                <div class="chatbox-message-profile">
                    <div>
                        <h6 class="chatbox-message-name">
                            Ask our in-store Sale Associate
                        </h6>
                        <p class="chatbox-message-status">
                            <small style="color: gray">Virtual Shopping by</small>
                            <span style="color: black"><strong> TPR</strong></span>
                        </p>
                    </div>
                </div>
                <div class="close" title="close">
                    <img
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAzElEQVRIS+1T2w2DMBCDDToKbEBHYANGYKMyQjfoCh2FEbAlqCDcC6GoP0G6D5LIPvt8dZX5qzPjV4XAdfjvFg1ocTLafOCuQ721N5YCgr9QX1QrABD8g2pQvUZiEewBUpL07gmCWVLhzUAiCYOT0CPgmxSQZ7SFqtTONzURgpSE/yHwqAKNQBr8aQwRBZZFLolHIA2UXW7x1CL8U3IlpvuBWhE+2BRdNCkttxeNnYyoSVuiNcKdtsVXUiQtaejMG3IIxHpUCFwLs1u0AGgKLRkwP5Q0AAAAAElFTkSuQmCC" />
                </div>
            </div>
            <div class="chatbox-message-content">
                <div class="wrapper-chat">
                    <span><img src="<?php echo base_url('assets_system/images/tpr_images/group-29280.svg'); ?>" alt=""
                            class="logo"></span>
                    <div class="chatbox-message-item received">
                        <span class="chatbox-message-item-text">
                            How can we help you?
                        </span>
                    </div>
                </div>
            </div>


            <div class="chatbox-message-bottom">
                <form action="#" class="chatbox-message-form">
                    <textarea rows="1" placeholder="Type message..." class="chatbox-message-input"></textarea>
                    <button type="submit" class="chatbox-message-submit">
                        <i class="bx bx-send"></i>
                    </button>
                </form>
            </div>

        </div>
    </div>
</div>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
$(document).ready(function() {
    var homeCarousel = $('#homde-carousel')
    var carousel = new bootstrap.Carousel(homeCarousel, {
        interval: 8000,
        wrap: true
    })
    $('.color_info').slick({
        dots: false,
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 4,
        prevArrow: '<div class="d-none position-absolute justify-content-center align-items-center p-2 rounded-circle border" style="cursor:pointer;top:15%;left:-25px;width:16px;height:16px;background-color:#DBDBDC38"><span><</span></div>',
        nextArrow: '<div class="d-flex position-absolute justify-content-center align-items-center p-2 rounded-circle border" style="cursor:pointer;top:0px;right:-15px;width:16px;height:16px;background-color:#DBDBDC38"><span>></span></div>',
    });
    $('.feature_slide').slick({
        dots: true,
        infinite: false,
        slidesToShow: 4,
        slidesToScroll: 4,
        prevArrow: '<button type="button" class=" d-none d-lg-block rounded-circle border-0 bg-white shadow-lg position-absolute" style="font-size:35px;top:41.5%;left:-50px;width:50px;height:50px"><</button>',
        nextArrow: '<button type="button" class="d-none d-lg-block  rounded-circle border-0 bg-white shadow-lg position-absolute" style="font-size:35px;top:41.5%;right:-50px;width:50px;height:50px">></button>',
        
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 800,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 550,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    }).on('setPosition', function(event, slick) {
        // Align slides to the left when there's only one item
        if (slick.slideCount < 4) {
            slick.$slideTrack.css('margin-left', '0px');
        }
    });
    $('button.nav-link').on('shown.bs.tab', function(e) {
        $('.feature_slide').slick('setPosition');
        $('.color_info').slick('setPosition');
    });
    $('.product_slide_card').hover(function(){
        // product_img
        let image=$(this).find('.product_img');
        image.attr('src',image.data('alt_src')).css('transition','src 5.5s ease-in-out')
    },function(){
        let image=$(this).find('.product_img');
        image.attr('src',image.data('default_image'))
    })
})
</script>
<script>
// MESSAGE INPUT
const textarea = document.querySelector(".chatbox-message-input");
const chatboxForm = document.querySelector(".chatbox-message-form");
textarea.addEventListener("input", function() {
    let line = textarea.value.split("\n").length;
    if (textarea.rows < 6 || line < 6) {
        textarea.rows = line;
    }
    if (textarea.rows > 1) {
        chatboxForm.style.alignItems = "flex-end";
    } else {
        chatboxForm.style.alignItems = "center";
    }
});
// TOGGLE CHATBOX
const chatboxToggle = document.querySelector(".chatbox-toggle");
const chatboxMessage = document.querySelector(".chatbox-message-wrapper");
const closeDiv = document.querySelector(".close"); // Select the close div
chatboxToggle.addEventListener("click", function() {
    chatboxMessage.classList.toggle("show");
    console.log("closeDiv clicked");
});
// Add event listener to the close button
closeDiv.addEventListener("click", function() {
    chatboxMessage.classList.remove("show"); // Hide the chatbox
});
// DROPDOWN TOGGLE
// const dropdownToggle = document.querySelector(
//   ".chatbox-message-dropdown-toggle"
// );
// const dropdownMenu = document.querySelector(
//   ".chatbox-message-dropdown-menu"
// );
// dropdownToggle.addEventListener("click", function () {
//   dropdownMenu.classList.toggle("show");
// });
// document.addEventListener("click", function (e) {
//   if (
//     !e.target.matches(
//       ".chatbox-message-dropdown, .chatbox-message-dropdown *"
//     )
//   ) {
//     dropdownMenu.classList.remove("show");
//   }
// });
// CHATBOX MESSAGE
const chatboxMessageWrapper = document.querySelector(
    ".chatbox-message-content"
);
const chatboxNoMessage = document.querySelector(
    ".chatbox-message-no-message"
);
chatboxForm.addEventListener("submit", function(e) {
    e.preventDefault();
    if (isValid(textarea.value)) {
        writeMessage();
        setTimeout(autoReply, 1000);
    }
});

function addZero(num) {
    return num < 10 ? "0" + num : num;
}

function writeMessage() {
    const today = new Date();
    let message = `
		<div class="chatbox-message-item sent">
			<span class="chatbox-message-item-text">
				${textarea.value.trim().replace(/\n/g, "<br>\n")}
			</span>
			<span class="chatbox-message-item-time">${addZero(today.getHours())}:${addZero(
          today.getMinutes()
        )}</span>
		</div>
	`;
    chatboxMessageWrapper.insertAdjacentHTML("beforeend", message);
    chatboxForm.style.alignItems = "center";
    textarea.rows = 1;
    textarea.focus();
    textarea.value = "";
    chatboxNoMessage.style.display = "none";
    scrollBottom();
}

function autoReply() {
    const today = new Date();
    let message = `
		<div class="chatbox-message-item received">
			<span class="chatbox-message-item-text">
				Thank you for your awesome support!
			</span>
			<span class="chatbox-message-item-time">${addZero(today.getHours())}:${addZero(
          today.getMinutes()
        )}</span>
		</div>
	`;
    chatboxMessageWrapper.insertAdjacentHTML("beforeend", message);
    scrollBottom();
}

function scrollBottom() {
    chatboxMessageWrapper.scrollTo(0, chatboxMessageWrapper.scrollHeight);
}

function isValid(value) {
    let text = value.replace(/\n/g, "");
    text = text.replace(/\s/g, "");
    return text.length > 0;
}
</script>
<!-- fixed position div disappear -->
<script>
document.addEventListener("DOMContentLoaded", function() {
    const fixedDiv = document.getElementById("myFixedDiv");
    const triggerPercentage = 0.55; // 80%
    const windowHeight = window.innerHeight; // Height of the viewport
    const fullPageHeight = document.body.scrollHeight; // Height of the entire page
    const triggerPosition = (fullPageHeight - windowHeight) * triggerPercentage;
    window.addEventListener("scroll", function() {
        if (window.scrollY >= triggerPosition) {
            fixedDiv.style.display = "none";
        } else {
            fixedDiv.style.display = "block";
        }
    });
});
</script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    const fixedDiv = document.getElementById("arrow-fixed");
    const triggerPercentage = 0.55; // 80%
    const windowHeight = window.innerHeight; // Height of the viewport
    const fullPageHeight = document.body.scrollHeight; // Height of the entire page
    const triggerPosition = (fullPageHeight - windowHeight) * triggerPercentage;
    window.addEventListener("scroll", function() {
        if (window.scrollY >= triggerPosition) {
            fixedDiv.style.display = "none";
        } else {
            fixedDiv.style.display = "flex";
        }
    });
});
</script>