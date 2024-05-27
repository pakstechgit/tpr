<section class="p-md-5">
    <p class="text-600 text-center h5">My Payment Methods</p>
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
                           
                            <div class="mt-3  border-bottom pb-5 border-dark">
                                <p class="p-0 m-0 text-500">Credit Card/ Debit Card</p>
                                <img src="<?=base_url('assets/img/payment-visa.png');?>">
                                <div class="row mb-1">
                                    <div class="col-3">
                                        <label>Card Number: </label>
                                    </div>
                                    <div class="col">
                                        <span>418888****************432</span>
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-3">
                                        <label>Expiry: </label>
                                    </div>
                                    <div class="col">
                                        <span>02/28</span>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="w-max m-auto mt-5">
                            <button class="btn py-3 px-5 border text-500 btn-md rounded">+ Add New Payment Method</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>