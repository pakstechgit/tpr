<section class="p-md-5">
    <p class="text-600 text-center h5">My Addresses</p>
    <div class="row p-5 justify-content-between">
        <div class="col-4 ">  
            <div>
                <div class="card py-5 shadow-sm  " style="border:3px solid #AFAFAF;border-radius:15px">
                    <div class="card-body h-100">
                        <div class="user_profile_img_container rounded-circle w-max m-auto">
                            <img class="img-fluid rouded-circle" src="<?=base_url('assets_system/icons/user_default.svg')?>" alt="User Profile"  width='60px' />
                        </div>
                        <h6 class="text-center mt-2 mb-0 h5">Juan Dela Cruz</h6>
                        <a href="" class="text-500 text-decoration-none text-center d-block m-0" style="color:black">Edit profile picture</a>
                        <div class="w-max m-auto">
                            <a href="#" class="text-decoration-none w-max my-4 d-flex align-items-center text_primary">
                                <img class="img-fluid rouded-circle" src="<?=base_url('assets_system/icons/user-circle_outline.svg')?>" alt="User Profile" width="25px" />
                                <span class="text-600 " style="color:black">&nbsp;Profile</span>
                            </a>
                            <a href="#" class="text-decoration-none w-max  my-4 d-flex align-items-center">
                                <img class="img-fluid rouded-circle" src="<?=base_url('assets_system/icons/address-book.svg')?>" alt="User Profile" width="25px" />
                                <span class="text-500" style="color:black">&nbsp;Address Book</span>
                            </a>
                            <a href="#" class="text-decoration-none w-max my-4 d-flex align-items-center">
                                <img class="img-fluid rouded-circle" src="<?=base_url('assets_system/icons/credit-card.svg')?>" alt="User Profile" width="25px" />
                                <span class="text-500" style="color:black">&nbsp;Payment Methods</span>
                            </a>
                            <a href="#" class="text-decoration-none w-max my-4 d-flex align-items-center">
                                <img class="img-fluid rouded-circle" src="<?=base_url('assets_system/icons/order-tracking.svg')?>" alt="User Profile" width="25px" />
                                <span class="text-500" style="color:black">&nbsp;Order & Tracking</span>
                            </a>
                            <a href="#" class="text-decoration-none w-max my-4 d-flex align-items-center">
                                <img class="img-fluid rouded-circle" src="<?=base_url('assets_system/icons/heart-black.svg')?>" alt="User Profile" width="25px" />
                                <span class="text-500" style="color:black">&nbsp;Wish List</span>
                            </a> 
                        </div>
                        <?php echo form_open('login/logout_user');?>
                            <div class="d-grid">
                                <button type="submit"  id="logout_btn" class=" btn btn-light border p-3"  style="letter-spacing: 3px;">Sign Out</button>
                            </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col pe-md-5">
            <div class="card h-100 me-md-5" style="border:3px solid #AFAFAF;border-radius:15px">
                <div class="card-body  pt-5">
                    <div class="container-fluid px-md-5">
                        <div class="mx-md-5 ">
                            <p class="text-500 border-bottom border-dark pb-3" >Address</p>
                            <div class="mt-3">
                                <div class="d-flex justify-content-between">
                                    <p class="m-0"><span class="text-500">Juan Dela Cruz</span>
                                        </span><span>&#124;</span>
                                        <span>09659021589</span>
                                    </p>
                                    <p class="m-0 cursor-pointer"><span class="text-500">Edit</span>
                                        </span><span>&#124;</span>
                                        <span class="text-500">Delete</span>
                                    </p>
                                </div>
                                <p class="p-0 m-0">Purok 5</p>
                                <p class="p-0 m-0">Coral, Ramos, Tarlac 2307</p>
                                <p class="p-0 m-0">Philippines</p>
                                <div class="mt-3 d-flex justify-content-between align-items-center">
                                    <div>
                                        <button class="btn bg-primary btn-sm btn-pill text-white  px-4" style="border-radius:10px">Default</button>
                                        <button class="btn btn-sm bg-white border border-dark text-500  px-md-5 ms-md-4"  style="border-radius:10px">Pickup Address</button>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-5">
                                <div class="d-flex justify-content-between">
                                    <p class="m-0"><span class="text-500">Juan Dela Cruz</span>
                                        </span><span>&#124;</span>
                                        <span>09659021589</span>
                                    </p>
                                    <p class="m-0 cursor-pointer"><span class="text-500">Edit</span>
                                        </span><span>&#124;</span>
                                        <span class="text-500">Delete</span>
                                    </p>
                                </div>
                                <p class="p-0 m-0">Purok 5</p>
                                <p class="p-0 m-0">Coral, Ramos, Tarlac 2307</p>
                                <p class="p-0 m-0">Philippines</p>
                                <div class="mt-3 d-flex justify-content-between align-items-center">
                                    <div>
                                        <button class="btn bg-white btn-sm  border border-dark  px-4" style="border-radius:10px">Default</button>
                                        <button class="btn btn-sm bg-white border border-dark text-500  px-md-5 ms-md-4"  style="border-radius:10px">Pickup Address</button>
                                    </div>
                                    <button type="button" class="btn btn-outline-primary btn-sm px-5" style="border-radius:10px">Set as Default</button>
                                </div>
                            </div>
                        </div>
                        <div class="w-max m-auto mt-5">
                            <button class="btn py-3 px-5 border text-500 btn-md rounded">+ Add New Address</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>