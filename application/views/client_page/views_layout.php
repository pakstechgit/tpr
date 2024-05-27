<!DOCTYPE html>
<?php
$active_page = isset($PAGE) ? $PAGE : '';
// echo $active_page;
?>
<html>

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" />
    <link rel="stylesheet"=href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400&display=swap"= />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" /> <!-- Font Awesome Icons -->
    <link href="<?= base_url('assets/css/header.css') ?>" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

    <style>
        :root {
            --blue: #335DFF;
            --grey: #F5F5F5;
            --grey-d-1: #EEE;
            --grey-d-2: #DDD;
            --grey-d-3: #888;
            --white: #FFF;
            --dark: #222;
        }

        .bg_primary,
        .btn_primary {

            background-color: #0235b5;

        }

        .w-min {

            width: min-content;

        }

        .w-max {

            width: max-content;

        }

        .rounded-10 {

            border-radius: 10px;

        }

        .border_primary {

            border-color: #0235b5;

        }

        .text_primary {

            color: #0235b5;

        }

        * {
            /*outline:1px solid red;*/
            font-family: Poppins !important;

        }


        footer input::placeholder {

            color: black !important;

            font-weight: 500;

        }

        input::placeholder {

            color: black !important;

        }

        .flag-container .active {

            border-radius: 4px;

            background: #FFF;

            /* box-shadow: 0px 0px 16px 0px rgba(0, 0, 0, 0.16); */

            padding: 5px;

        }

        .flag-container .flag {

            margin: 5px;

            cursor: pointer;

        }

        header a {
            color: black;
        }

        header a:hover {
            color: black !important;
            cursor: pointer;
        }

        header .nav-list a {

            font-size: 16px;

            line-height: 24px;

            color: black !important;

        }

        header .nav-list .nav-link.active {
            color: #0235B5 !important;
            font-weight: 700;
        }


        /* Search bar */
        .searchbar {
            position: relative;
        }

        .searchbar button {
            position: absolute;
            right: 0rem;
            bottom: 0rem;
            font-size: 1.3rem;
            background-color: transparent;
            border: none;
            height: 100%;
            width: 62px;
            z-index: 111;
        }

        .button-search button i {
            padding-top: 5px;
        }



        .side-tab .nav-link {

            color: black !important;

            font-weight: 700 !important;

        }



        .side-tab .active {

            padding: 0px !important;

            background-color: transparent !important;

            color: #0235B5 !important;

            font-weight: 700 !important;

        }

        .side-tab .active::after {

            content: url("<?= base_url('assets/icons/arrow_right.png') ?>");

            margin-left: 20px;

        }



        .tab-content a {

            font-size: 15px;

            text-decoration: none;

            color: black !important;

        }

        .text-100 {

            font-weight: 100;

        }

        .text-200 {

            font-weight: 200;

        }

        .text-300 {

            font-weight: 300;

        }

        .text-400 {

            font-weight: 400;

        }

        .text-500 {

            font-weight: 500;

        }

        .text-600 {

            font-weight: 600;

        }

        .text-700 {

            font-weight: 700;

        }

        .text-800 {

            font-weight: 800;

        }

        .text-900 {

            font-weight: 900;

        }

        .dropdown-container a {

            color: black;

            text-decoration: none;

        }

        footer {

            position: relative;

            width: 100%;

            bottom: 0px;

        }

        footer .contact_info {

            font-size: 12px;

        }

        .dropdown-container {

            z-index: 100;

        }

        .tpr_quote:hover {
            color: #fff !important;
        }

        .footer_logo {
            height: 3rem;
            width: 3rem;
        }
    </style>



    <title>TPR</title>

</head>

<body class="container-fluid p-0 m-0">
    <header class=" bg-white" style="z-index:100;top:-1px">

        <section class="text-center p-3 position-relative" style="height:70px">

            Free shipping on all orders over ₱5,000 </span>

            <div class=" d-none d-md-flex flag-container position-absolute h-100 justify-content-center align-items-center top-0 p-2 " style="right:65px">

                <div class='flag active'>

                    <img src="<?= base_url("assets/icons/philippine_flag.png") ?>" alt="philippine_flag">

                </div>

                <div class='flag'>

                    <img src="<?= base_url("assets/icons/usa_flag.png") ?>" alt="usa_flag">

                </div>

            </div>

        </section>

        <section class="bg_primary header-blue position-relative">

            <div class="container-fluid">

                <div class="row">
                    <div class="col-3 d-md-none">

                    </div>
                    <div class="col-6 col-md-4">

                        <div class="logo-container h-100 p-1 text-white d-flex justify-content-center align-items-center">

                            <div class="logo_container">
                                <a href="<?= base_url('homepage'); ?>">
                                    <img style="max-width:58px;max-height:52px; padding-right: 6px;" class="img-fluid" src="<?= base_url("assets_system/images/tpr_images/tpr-logo-white.png") ?>" alt="tpr logo">
                                </a>

                            </div>

                            <div class="m-0 p-0" style="font-size:16px;font-weight:700;max-width:215px">
                                <a class="tpr_quote" href="<?= base_url('homepage'); ?>" style="text-decoration: none; color:#fff; ">
                                    Your One-Stop Shop
                                    for your Healthcare Needs
                                </a>
                            </div>

                        </div>

                    </div>

                    <div class="col-5 d-none d-md-block">

                        <div class="search-container h-100  p-0 m-0 d-flex align-items-center">

                            <div class="input-group position-relative searchbar" style="height:50px">

                                <select class="form-select" aria-label="Default select example" style="background-color:#F3F3F3;font-size:16px;max-width:max-content">

                                    <option selected>All</option>

                                    <option value="1">One</option>

                                    <option value="2">Two</option>

                                </select>

                                <input type="text" class="form-control border-right-0 h-100" placeholder="Search Products" aria-label="Text input with dropdown button">
                                <button class="button-search">
                                    <i class='bx bx-search-alt-2' class="pt-2"></i>
                                </button>




                            </div>

                        </div>

                    </div>

                    <div class="col-3 ">

                        <div class=" h-100 w-100  p-2 m-0 d-flex justify-content-evenly align-items-center">

                            <div class="p-2 d-md-flex  m-0 justify-content-between align-items-center  h-100 text-white " style="width:150px;">

                                <div class="m-2" style="width:35px;height:35px">

                                    <img class="img-fluid d-none d-md-inline" src="<?= base_url("assets/icons/user_icon.png") ?>" alt="user icon">

                                </div>

                                <div class="m-2 d-none d-lg-inline" style="font-size:12px;max-width:106px">Welcome Login/Signup</div>

                            </div>

                            <hr class="border border-white d-none d-lg-block" style="height:45px">

                            <div class="p-0 m-0 d-flex justify-content-center align-items-center  h-100 text-white " style="width:150px;">

                                <div class="m-2 d-none d-md-block" style="width:35px;height:35px">

                                    <img src="<?= base_url("assets/icons/heart_icon.png") ?>" alt="user icon">

                                </div>

                                <div class="m-2" style="width:35px;height:35px">

                                    <img src="<?= base_url("assets/icons/shopping_cart_icon.png") ?>" alt="user icon">

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

        <section>

            <nav class="navbar navbar-expand-lg  bg-white shadow" style="height:80px">

                <div class="container-fluid ">

                    <div class="collapse navbar-collapse d-flex justify-content-center w-100   " id="navbarNav">

                        <ul class="navbar-nav  nav-list  d-flex justify-content-evenly  w-75">

                            <li class="nav-item" dropdown-id="product_dropdown">

                                <a class="nav-link <?= $active_page == 'product_page' ? 'active' : '' ?>" aria-current="page" link="dropdown">Products</a>

                            </li>

                            <li class="nav-item" dropdown-id="market_we_serve_dropdown">

                                <a class="nav-link" href="#" link="dropdown">Markets We Serve</a>

                            </li>

                            <li class="nav-item" dropdown-id="brands_dropdown">

                                <a class="nav-link" href="#" link="dropdown">Brands</a>

                            </li>

                            <li class="nav-item">

                                <a class="nav-link " href="#">Videos</a>

                            </li>

                            <li class="nav-item">

                                <a class="nav-link " href="<?= base_url('homepage/about_us'); ?>">About Us</a>

                            </li>

                            <li class="nav-item">

                                <a class="nav-link " href="<?= base_url('homepage/contact_us'); ?>">Contact Us</a>

                            </li>

                            <li class="nav-item">

                                <a class="nav-link" href="<?= base_url('homepage/become_a_dealer'); ?>">Be a Local Dealers</a>

                            </li>

                        </ul>

                    </div>

                </div>

            </nav>

        </section>

    </header>

    <div class="dropdown-container bg-white w-100  shadow position-absolute" id="product_dropdown" style="display:none;top:240px;padding:70px;max-height:520px">

        <div class="d-flex align-items-start">

            <div class="nav side-tab flex-column nav-pills me-3 " id="v-pills-tab" role="tablist" aria-orientation="vertical">

                <a href="#" class="text-dark text-start mb-3 text-decoration-underline">Shop All Products </a>

                <button class="nav-link active  text-start p-0 mb-3 " id="v-pills-disposable-tab" data-bs-toggle="pill" type="button" data-bs-target="#v-pills-disposable" role="tab" aria-controls="v-pills-disposable" aria-selected="true">Disposable Medical Supplies</button>

                <button class="nav-link p-0 text-start text-dark mb-3" id="v-pills-durable-tab" data-bs-toggle="pill" data-bs-target="#v-pills-durable" type="button" role="tab" aria-controls="v-pills-durable" aria-selected="false">Durable Medical Equipment</button>

            </div>

            <div class="tab-content w-75" id="v-pills-tabContent">

                <div class="tab-pane fade show active" id="v-pills-disposable" role="tabpanel" aria-labelledby="v-pills-disposable-tab">

                    <div class="container-fluid ">

                        <div class="row">

                            <div class="col-6">

                                <div class="container-fluid">

                                    <div class="row gy-4 justify-content-between">

                                        <div class="col-6">

                                            <a href="<?= base_url('products/categories?page=product_page&name=antiseptics') ?>">Antiseptics</a>

                                        </div>

                                        <div class="col-6">

                                            <a>Infection Control</a>

                                        </div>

                                        <div class="col-6">

                                            <a>Applicators</a>

                                        </div>

                                        <div class="col-6">

                                            <a>IV Sets</a>

                                        </div>

                                        <div class="col-6">

                                            <a>Bandages</a>

                                        </div>

                                        <div class="col-6">

                                            <a>Sterilization</a>

                                        </div>

                                        <div class="col-6">

                                            <a>Blood Collection</a>

                                        </div>

                                        <div class="col-6">

                                            <a>Tapes</a>

                                        </div>

                                        <div class="col-6">

                                            <a>Wound Care</a>

                                        </div>

                                        <div class="col-6">

                                            <a>Dressing and Sponges</a>

                                        </div>

                                    </div>
                                    <hr>
                                    <div class="text-end">
                                        <p class="text_primary ">Create your own kit:</p>
                                        <p>Customized Medical Kits / Pack</p>
                                    </div>
                                </div>

                            </div>

                            <div class="col-6">

                                <div class="p-0">

                                    <div class="ms-auto w-max p-0 position-relative me-4" style="">

                                        <img class="img-fluid d-block w-max ms-auto" src="<?= base_url("assets/images/image_dropdown-1.jpg") ?>" style="object-fit:cover;max-width:455px;max-height:371px" alt="image sample" />

                                        <button class="btn bg-white position-absolute text-dark " style="width:max-content;bottom:20px;left:20px;font-weight:500">Shop Our Bandages</button>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>


                </div>

                <div class="tab-pane fade" id="v-pills-durable" role="tabpanel" aria-labelledby="v-pills-durable-tab">

                    <div class="container-fluid ">

                        <div class="row">

                            <div class="col-8">

                                <div class="container-fluid">

                                    <ul class="list-group">

                                        <li class="list-group-item border-0">

                                            <a href="#">Beds</a>

                                        </li>

                                        <li class="list-group-item border-0">

                                            <a href="#">Dialysis Chairs</a>

                                        </li>

                                        <li class="list-group-item border-0">

                                            <a href="#">Mobility</a>

                                        </li>

                                        <li class="list-group-item border-0">

                                            <a href="#">Patient Accessories</a>

                                        </li>

                                        <li class="list-group-item border-0">

                                            <a href="#">Respiratory</a>

                                        </li>

                                        <li class="list-group-item border-0">

                                            <a href="#">Wheelchairs</a>

                                        </li>

                                    </ul>

                                </div>

                            </div>

                            <div class="col-4">

                                <div class="p-0">

                                    <div class="container p-0 position-relative" style="width:455px;height:371px">

                                        <img class=" img-fluid" src="<?= base_url("assets/images/image_dropdown-2.jpg") ?>" style="object-fit:cover" alt="image sample" />

                                        <button class="btn bg-white position-absolute text-dark " style="width:max-content;bottom:20px;left:20px;font-weight:500">Shop Hospital / Emergency </button>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!--Markets we serve dropdown-->

    <div class="dropdown-container bg-white w-100  shadow position-absolute" id="market_we_serve_dropdown" style="display:none;top:240px;padding:70px;max-height:520px">

        <div class="d-flex align-items-start">

            <div class="container-fluid ">

                <div class="row">

                    <div class="col-8">

                        <div class="container-fluid">

                            <div class="row gy-4 justify-content-between">

                                <div class="col-4">

                                    <a href="#" class="text-decoration-underline">Shop All Markets We Serve</a>

                                </div>

                                <div class="col-4">

                                    <a>Home / Personal Care</a>

                                </div>

                                <div class="col-4">

                                    <a>Physician Care / Clinic</a>

                                </div>

                                <div class="col-4">

                                    <a href="<?= base_url('products/categories?page=market_we_serve&name=Market We Serve&sub_category=Athletic / Sports') ?>">Athletic / Sports </a>

                                </div>

                                <div class="col-4">

                                    <a>Hospital / Emergency </a>

                                </div>

                                <div class="col-4">

                                    <a>Respiratory</a>

                                </div>

                                <div class="col-4">

                                    <a>Cosmetic Surgery / Dermatology</a>

                                </div>

                                <div class="col-4">

                                    <a>Nursing Home</a>

                                </div>

                                <div class="col-4">

                                    <a>Spa / Salon / Wellness</a>

                                </div>

                                <div class="col-4">

                                    <a>Dental</a>

                                </div>

                                <div class="col-4">

                                    <a>Patient Care</a>

                                </div>

                                <div class="col-4">

                                    <a>Urology</a>

                                </div>

                                <div class="col-4">

                                    <a>Dialysis</a>

                                </div>

                                <div class="col-4">

                                    <a>Pharmacy & Retail</a>

                                </div>

                                <div class="col-4">

                                    <a>Urgent Care </a>

                                </div>

                                <div class="col-4">

                                    <a>Diagnostics / Laboratory</a>

                                </div>

                                <div class="col-4">

                                    <a>Physical Rehabilitation / Chiropractic </a>

                                </div>

                                <div class="col-4">

                                    <a>Veterinary</a>

                                </div>

                                <div class="col-4">

                                    <a>DME (Durable Medical Equipment)</a>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="col-4">

                        <div class="p-0">

                            <div class="container p-0 position-relative" style="width:455px;height:371px">

                                <img class="w-100" src="<?= base_url("assets/images/image_dropdown-3.jpg") ?>" style="object-fit:cover" alt="image sample" />

                                <button class="btn bg-white position-absolute text-dark " style="width:max-content;bottom:20px;left:20px;font-weight:500">Shop Our Gloves Section</button>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!--Brands dropdown-->

    <div class="dropdown-container bg-white w-100  shadow position-absolute" id="brands_dropdown" style="display:none;top:240px;padding:70px;max-height:520px">

        <div class="d-flex align-items-start">

            <div class="nav side-tab flex-column nav-pills me-3 " id="v-pills-tab" role="tablist" aria-orientation="vertical">

                <a href="#" class="text-dark text-start mb-3 text-decoration-underline">Shop All Brands </a>

                <button class="nav-link active  text-start p-0 mb-3 " id="v-pills-dynarex-tab" data-bs-toggle="pill" type="button" data-bs-target="#v-pills-dynarex " role="tab" aria-controls="v-pills-dynarex " aria-selected="true">Dynarex</button>

                <button class="nav-link p-0 text-start text-dark mb-3" id="v-pills-dukal-tab" data-bs-toggle="pill" data-bs-target="#v-pills-dukal" type="button" role="tab" aria-controls="v-pills-dukal" aria-selected="false">Dukal</button>

            </div>

            <div class="tab-content ms-auto" id="v-pills-tabContent" style="width:80%">

                <div class="tab-pane fade show active" id="v-pills-dynarex" role="tabpanel" aria-labelledby="v-pills-dynarex-tab">

                    <div class="container-fluid ">

                        <div class="row gx-5 gy-4 justify-content-start">

                            <div class="col-3">

                                <a href="#">Antiseptics</a>

                            </div>

                            <div class="col-3">

                                <a>Disposable Underpads & Drapes</a>

                            </div>

                            <div class="col-3">

                                <a>Medi-cut Scalpels Disposable</a>

                            </div>

                            <div class="col-3">

                                <a>Syringes without Needle</a>

                            </div>

                            <div class="col-3">

                                <a>Arm Slings</a>

                            </div>

                            <div class="col-3">

                                <a>Dressing & Sponges - Sterile & Non-Sterile</a>

                            </div>

                            <div class="col-3">

                                <a>Personal Protective Equipment</a>

                            </div>

                            <div class="col-3">

                                <a>Syringes with Needle</a>

                            </div>

                            <div class="col-3">

                                <a>Bandages</a>

                            </div>

                            <div class="col-3">

                                <a>Enteral Delivery Gravity Bag Set with ENFIT Connector</a>

                            </div>

                            <div class="col-3">

                                <a>Pressure Dots</a>

                            </div>

                            <div class="col-3">

                                <a>Table Paper</a>

                            </div>

                            <div class="col-3">

                                <a>Cervical Collars</a>

                            </div>

                            <div class="col-3">

                                <a>Foley Insertion Trays without Catheters</a>

                            </div>

                            <div class="col-3">

                                <a>Sharps Container</a>

                            </div>

                            <div class="col-3">

                                <a>Tourniquet</a>

                            </div>

                            <div class="col-3">

                                <a>Cotton Tipped Applicators</a>

                            </div>

                            <div class="col-3">

                                <a>Gloves</a>

                            </div>

                            <div class="col-3">

                                <a>Slipper Socks</a>

                            </div>

                            <div class="col-3">

                                <a>Urinary Drainage Bag</a>

                            </div>

                            <div class="col-3">

                                <a>Dead End Caps</a>

                            </div>

                            <div class="col-3">

                                <a>Hot & Cold Packs</a>

                            </div>

                            <div class="col-3">

                                <a>Sterilization Pouches</a>

                            </div>

                            <div class="col-3">

                                <a>Diagnostics</a>

                            </div>

                            <div class="col-3">

                                <a>IV Administration Sets</a>

                            </div>

                            <div class="col-3">

                                <a>Sutures</a>

                            </div>



                        </div>

                    </div>

                </div>

                <div class="tab-pane fade" id="v-pills-dukal" role="tabpanel" aria-labelledby="v-pills-dukal-tab">

                    <div class="container-fluid ">

                        <div class="row gx-5 gy-4 justify-content-start">

                            <div class="col-3">

                                <a href="#">Tapes</a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <main class="p-0">

        <?= $contents ?>

    </main>

    <footer class="bg_primary  p-5" style="z-index:1">

        <section class="text-center d-flex justify-content-center pb-3">

            <div class="footer_logo text-center">

                <img src="<?= base_url("assets_system/images/tpr_images/tpr-logo-white.png") ?>" class="img-fluid d-block m-auto" alt="tpr logo">

            </div>

        </section>

        <section class="mt-3">

            <div class="container-fluid">

                <div class="row">

                    <div class=" col col-12 text-white col-md-3" style="font-size:14px">
                        <p>“Your One-Stop Shop for your Healthcare Needs”</p>
                        <p>We offer wholesale pricing to all our clients. Our goal is provide high quality products at a low price.</p>
                        <p><span class="text-600">TRP Medical</span> Copyright c 2023 All rights reserved.</p>
                        <p>Privacy and Policy</p>
                    </div>

                    <div class="col-sm-6 col-md-1 text-white" style="font-size:14px">
                        <p class="text-500">COMPANY</p>
                        <p>Overview</p>
                        <p>Core Values</p>
                        <p>Mission & Vision</p>
                        <p>Brands</p>
                    </div>

                    <div class="col text-white" style="font-size:14px">
                        <p class="text-500">LINKS</p>
                        <p>Home</p>
                        <p>Products</p>
                        <p>Be a Local Dealer</p>
                        <p>Contact Us</p>
                    </div>

                    <div class="col text-white" style="font-size:14px">
                        <p class="text-500 text-center">CONNECT WITH US</p>
                        <div class="d-flex justify-content-evenly">
                            <img class="img-fluid m-1" src="<?= base_url('assets/icons/facebook_icon.png') ?>" alt="facebook icon" />
                            <img class="img-fluid m-1" src="<?= base_url('assets/icons/linkedin_icon.png') ?>" alt="facebook icon" />
                            <img class="img-fluid m-1" src="<?= base_url('assets/icons/instagram_icon.png') ?>" alt="facebook icon" />
                        </div>
                    </div>

                    <div class="col col-md-5">

                        <div class="input-group" style="height:50px">

                            <input type="text" class="form-control text-500" placeholder="Enter your email to stay in touch!">

                            <span class=" input-group-text bg-white text-500" id="basic-addon2">Sign Up</span>

                        </div>

                        <div class="contact_info mt-3 p-0  text-white">

                            <div class="row w-100 justify-content-between  m-0">

                                <div class="col-4 ">

                                    <div class="d-flex align-items-center">

                                        <img src="<?= base_url('assets/icons/telephone_icon.png') ?>">

                                        <span class="ms-4">Call Us</span>

                                    </div>

                                    <div class="d-flex align-items-baseline mt-2">

                                        <img src="<?= base_url('assets/icons/sm-philippine_flag.png') ?>">

                                        <div class="ms-4">

                                            <p>(+63) 9878-765-456</p>

                                            <p>(+63) 2837-227-978</p>

                                        </div>

                                    </div>

                                    <div class="d-flex align-items-baseline mt-2">

                                        <img src="<?= base_url('assets/icons/sm-usa_flag.png') ?>">

                                        <div class="ms-4">

                                            <p>(+63) 9878-765-456</p>

                                        </div>

                                    </div>

                                </div>

                                <div class="col-5 ">

                                    <div class="d-flex align-items-center">

                                        <img src="<?= base_url('assets/icons/mail_icon.png') ?>">

                                        <span class="ms-4">Email Us</span>

                                    </div>

                                    <div class="d-flex align-items-baseline mt-2">

                                        <img src="<?= base_url('assets/icons/sm-philippine_flag.png') ?>">

                                        <div class="ms-4">

                                            <p>customerservice@tprmedical.com</p>

                                        </div>

                                    </div>

                                    <div class="d-flex align-items-baseline mt-2">

                                        <img src="<?= base_url('assets/icons/sm-usa_flag.png') ?>">

                                        <div class="ms-4">

                                            <p>tprmedical@aol.com</p>

                                        </div>

                                    </div>

                                </div>

                                <div class="col-2  p-0">

                                    <div class="d-flex align-items-center">

                                        <img src="<?= base_url('assets/icons/location_icon.png') ?>">

                                        <span class="ms-4">Address</span>

                                    </div>

                                    <div class="d-flex align-items-baseline mt-2">

                                        <img src="<?= base_url('assets/icons/sm-philippine_flag.png') ?>">

                                        <div class="ms-4">

                                            <p>G/F Unit 102, Corporate 101 Bldg., Mother Ignacia Avenue,1103 Quezon City, Philippines</p>

                                        </div>

                                    </div>

                                </div>



                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

    </footer>

    <!-- <script>
        $(document).ready(function() {
            $(document).mouseup(function(e) {
                var element = e.target;
                var link_type = $(element).attr('link');

                if ($(e.target).closest(".dropdown-container") === null) {
                    $(".dropdown-container").hide("slow");
                }
                if (link_type === 'dropdown') {
                    return;
                }
                var container = $(".dropdown-container");

                if (!container.is(e.target) && container.has(e.target).length === 0) {
                    $('.dropdown-container').hide('slow')
                }
            });
            $(".nav-item").on("click", function() {

                let dropdown = $(this).attr("dropdown-id");

                $('.dropdown-container').each(function(i, val) {

                    // do something with val

                    if ($(val).attr('id') != dropdown) {


                    }

                });

                $("#" + dropdown).toggle('slow');

            })

            //  Todo: Make the dropdown closable when click outside

            //  $(document).click(function(event) {

            //       var target = $(event.target);

            //       let dropdown= $(this).attr("dropdown-id");

            //       var element = $(".dropdown-container"); // the element you want to toggle



            //       if (!target.is(element) && !target.closest(element).length && target.is(':visible')) {

            //             // if the clicked element is not the element or its children

            //             element.toggle('slow'); // toggle the element

            //           }



            //     });

        })
    </script> -->

    <script>
        $(document).ready(function() {
            $(document).mouseup(function(e) {
                if ($(e.target).closest(".dropdown-container") === null) {
                    $(".dropdown-container").hide("slow");
                }
            });
            $(".nav-item").on("click", function() {
                var dropdown = $(this).attr("dropdown-id");
                $("#" + dropdown).toggle("slow");
            });
        });
    </script>
</body>

</html>