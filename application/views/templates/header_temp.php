<?php $user_id=$this->session->userdata('SESS_USER_ID')?>
<header class=" bg-white" style="z-index:100;top:-1px">
    <section class="text-center px-5 d-flex justify-content-end align-items-center p-3 position-relative" >
        <span class="position-absolute w-max" style="top:50%;left:50%; transform: translate(-50%, -50%);">Free shipping on all orders over ₱5,000</span>
        <div class=" d-none d-lg-flex align-items-center flag-container pe-1">
            <div class='flag active shadow-lg '>
                <img src="<?= base_url("assets/icons/philippine_flag.png") ?>" alt="philippine_flag">
            </div>
            <div class='flag'>
                <img src="<?= base_url("assets/icons/usa_flag.png") ?>" alt="usa_flag">
            </div>
        </div>
    </section>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary p-lg-0 ">
      <div class="container-fluid p-0">
        <div class="logo-container d-lg-none h-100 text-white d-flex justify-content-center align-items-center">
            <div class="logo_container">
                <a href="<?= base_url(); ?>">
                    <img class="img-fluid header-logo" src="<?= base_url("assets_system/images/tpr_images/tpr-logo-white.png") ?>" width="58" height="52" alt="tpr logo">
                </a>
            </div>

            <div class="m-0 p-0 ms-3  text-700 header-logo_text">
                <p class="m-0 p-0">Your One-Stop Shop</p>
                <p class="m-0 p-0">for your Healthcare Needs</p>
            </div>

        </div>
        <div class="navbar-toggler d-flex d-lg-none border-0 m-0 p-0 ">
            <button class="btn " type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown"  aria-expanded="false">
               <img src="<?=base_url('assets/icons/search-sm-white.svg')?>" alt="search icon">
            </button>
            <button class="btn " type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown"  aria-expanded="false">
               <img src="<?=base_url('assets/icons/cart-sm-white.svg')?>" alt="search icon">
            </button>
            <div class="dropdown" >
              <button class="btn" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown"  aria-expanded="false">
               <span class="navbar-toggler-icon text-light"></span>
              </button>
              <ul class="dropdown-menu dropdown-menu-white dropdown-menu-end">
                <li><h6 class="dropdown-header text-end p-1">Menu</h6></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item text-500 p-3" href="<?=site_url('login')?>"><?= $user_id? 'My Profile': 'Login or Signup'?></a></li>
                <li><a class="dropdown-item text-500 p-3" href="#">Products</a></li>
                <li><a class="dropdown-item text-500 p-3" href="#">Brands</a></li>
                <li><a class="dropdown-item text-500 p-3" href="#">News</a></li>
                <li><a class="dropdown-item text-500 p-3" href="#">About</a></li>
                <li><a class="dropdown-item text-500 p-3" href="#">Contact Us</a></li>
                <li><a class="dropdown-item text-500 p-3" href="#">Be a Local Dealer</a></li>
              </ul>
            </div>
        </div>
        <div class="collapse navbar-collapse p-0 ">
            <div class="d-flex ps-5 pe-4 w-100 justify-content-between">
                <div class="">
                    <div class="logo-container ms-md-2 h-100 text-white d-flex justify-content-center align-items-center">

                        <div class="logo_container">
                            <a href="<?= base_url(); ?>">
                                <img class="img-fluid w-100" src="<?= base_url("assets_system/images/tpr_images/tpr_logo_white_qouted.png") ?>" alt="tpr logo">
                            </a>

                        </div>

                    </div>

                </div>

                <div class="d-none d-md-block w-100" style="max-width:812px">

                    <div class="search-container h-100 w-100  p-0 m-0 d-flex align-items-center">

                        <div class="input-group position-relative searchbar" style="height:50px">

                            <select class="form-select" id="header-select_categories" aria-label="Default select example" style="background-color:#F3F3F3;font-size:16px;max-width:100px">

                                <option selected>All</option>

                                <option value="1">One</option>

                                <option value="2">Two</option>

                            </select>

                            <input type="text" id="header-input" class="form-control  h-100" placeholder="Search Products" aria-label="Text input with dropdown button">
                            <button class="button-search  text-center">
                                 <img class=" d-block m-auto" src="<?=base_url('assets/icons/search-lg-black.svg')?>" alt="search icon">
                            </button>
                        </div>

                    </div>

                </div> 

                <div class="p-0">

                    <div class=" h-100 w-100  p-md-0 m-0 d-flex justify-content-between align-items-center">

                        <div class="p-md-0 d-md-flex  m-0 justify-content-between align-items-center  h-100 text-white " style="width:150px;">
                            <div class="">
                                <img class="" src="<?= base_url("assets/icons/tpr-user_icon.svg") ?>" alt="user icon">
                            </div>
                            <div class=" d-none d-lg-inline" style="font-size:12px;max-width:106px">
                                <a href="<?= site_url("login") ?>" class="link text-white text-decoration-none">Welcome Login/Signup</a>
                            </div>
                        </div>

                        <hr class="border border-white mx-1 d-none d-lg-block" style="height:45px">

                        <div class="p-0  m-0 d-flex justify-content-center align-items-center  h-100 text-white " style="width:150px;">

                            <div class="d-none d-md-block mx-2" style="width:35px;height:35px">

                                <img src="<?= base_url("assets/icons/heart_icon.png") ?>" alt="user icon">
 
                            </div>

                            <div class="mx-2" style="width:35px;height:35px">

                                <img src="<?= base_url("assets/icons/shopping_cart_icon.png") ?>" alt="user icon">

                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </div>
      </div>
    </nav>
    <section class="d-none d-lg-block">

        <nav class="navbar navbar-expand-lg  bg-white shadow" style="height:80px">

            <div class="container-fluid ">

                <div class="collapse navbar-collapse d-flex justify-content-lg-center" >

                    <ul class="navbar-nav header-nav_tabs  nav-list  d-flex justify-content-between">

                        <li class="nav-item mx-3 head-nav_link " data-dropdown_id="product_dropdown" >
                            
                            <a class="nav-link" aria-current="page" link="dropdown">Products</a>

                        </li>

                        <li class="nav-item mx-3 head-nav_link" data-dropdown_id="market_we_serve_dropdown">

                            <a class="nav-link <?= $active_page == 'market_we_serve' ? 'active' : '' ?>" href="#" link="dropdown">Markets We Serve</a>

                        </li>

                        <li class="nav-item mx-3 head-nav_link" data-dropdown_id="brands_dropdown">

                            <a class="nav-link" href="#" link="dropdown">Brands</a>

                        </li>
                        <li class="nav-item mx-3" >

                            <a class="nav-link" href="<?= base_url('news'); ?>" link="dropdown">News</a>

                        </li>
                        <li class="nav-item mx-3">

                            <a class="nav-link " href="<?= base_url('about-us'); ?>">About Us</a>

                        </li>

                        <li class="nav-item mx-3">

                            <a class="nav-link " href="<?= base_url('contact-us'); ?>">Contact Us</a>

                        </li>

                        <li class="nav-item mx-3">

                            <a class="nav-link" href="<?= base_url('become-a-dealer'); ?>">Be a Local Dealer</a>

                        </li>

                    </ul>

                </div>

            </div>

        </nav>

        </section>
        <?php $this->load->view('templates/partials/_product_dropdown',$product_dropdown)?>
        <?php $this->load->view('templates/partials/_market_we_serve_dropdown')?>
        <?php $this->load->view('templates/partials/_brand_dropdown')?>
</header>