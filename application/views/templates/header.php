 <header class=" bg-white" style="z-index:100;top:-1px">

        <section class="text-center p-3 position-relative" >

            Free shipping on all orders over ₱5,000 </span>

            <div class=" d-none d-md-flex flag-container position-absolute h-100 justify-content-center align-items-center top-0 p-2 " style="right:100px">

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

                        <div class="logo-container h-100 text-white d-flex justify-content-center align-items-center">

                            <div class="logo_container">
                                <a href="<?= base_url(); ?>">
                                    <img class="img-fluid header-logo" src="<?= base_url("assets_system/images/tpr_images/tpr-logo-white.png") ?>" alt="tpr logo">
                                </a>

                            </div>

                            <div class="m-0 p-0  text-700 header-logo_text">
                                <a class="tpr_quote" href="<?= base_url(); ?>" style="text-decoration: none; color:#fff; ">
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

                                <input type="text" id="header-input" class="form-control  h-100" placeholder="Search Products" aria-label="Text input with dropdown button">
                                <button class="button-search">
                                    <i class='bx bx-search-alt-2' class="pt-2"></i>
                                </button>




                            </div>

                        </div>

                    </div> 

                    <div class="col-3 ">

                        <div class=" h-100 w-100  p-md-2 m-0 d-flex justify-content-evenly align-items-center">

                            <div class="p-md-2 d-md-flex  m-0 justify-content-between align-items-center  h-100 text-white " style="width:150px;">

                                <div class="m-2" style="width:35px;height:35px">

                                    <img class="img-fluid d-none d-md-inline" src="<?= base_url("assets/icons/user_icon.png") ?>" alt="user icon">

                                </div>
                                <div class="m-2 d-none d-lg-inline" style="font-size:12px;max-width:106px"><a href="<?= base_url("login") ?>" class="link text-white text-decoration-none">Welcome Login/Signup</a></div>

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

        <section class="d-none d-lg-block">

            <nav class="navbar navbar-expand-lg  bg-white shadow" style="height:80px">

                <div class="container-fluid ">

                    <div class="collapse navbar-collapse d-flex justify-content-lg-center w-100   " id="navbarNav">

                        <ul class="navbar-nav  nav-list  d-flex justify-content-evenly  w-75">

                            <li class="nav-item" dropdown-id="product_dropdown">

                                <a class="nav-link <?= $active_page == 'product_page' ? 'active' : '' ?>" aria-current="page" link="dropdown">Products</a>

                            </li>

                            <li class="nav-item" dropdown-id="market_we_serve_dropdown">

                                <a class="nav-link <?= $active_page == 'market_we_serve' ? 'active' : '' ?>" href="#" link="dropdown">Markets We Serve</a>

                            </li>

                            <li class="nav-item" dropdown-id="brands_dropdown">

                                <a class="nav-link" href="#" link="dropdown">Brands</a>

                            </li>

                            <li class="nav-item">

                                <a class="nav-link " href="<?= base_url('about-us'); ?>">About Us</a>

                            </li>

                            <li class="nav-item">

                                <a class="nav-link " href="<?= base_url('contact-us'); ?>">Contact Us</a>

                            </li>

                            <li class="nav-item">

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