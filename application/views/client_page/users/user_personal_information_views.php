<section class="p-md-5">
    <p class="text-600 text-center h5">Personal Information</p>
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
                <div class="card-body  py-5">
                    <div class="d-flex flex-column py-3 justify-content-between h-100">
                        <div class="row h-100 justify-content-center align-items-center">
                            <div class="col col-md-7 m-auto">
                               <div class="row h-100 align-items-center mb-3">
                                   <div class="col ">
                                       <label class="text-500" style="font-size:1rem">Name</label>
                                   </div>
                                   <div class="col-8">
                                        <input type="text" class="form-control form-control-sm" value="Juan Dela Cruz">
                                   </div>
                               </div>
                               <div class="row h-100 align-items-center mb-3">
                                   <div class="col ">
                                       <label class="text-500">Email Address</label>
                                   </div>
                                   <div class="col-8">
                                        <input type="text" class="form-control form-control-sm" value="juand@gmail.com" >
                                   </div>
                               </div>
                               <div class="row h-100 align-items-center mb-3">
                                   <div class="col">
                                       <label class="text-500">Mobile Number</label>
                                   </div>
                                   <div class="col-8">
                                        <input type="text" class="form-control form-control-sm"  value="09659021589" >
                                   </div>
                               </div>
                               <div class="row h-100 align-items-center mb-3">
                                   <div class="col">
                                       <label class="text-500">Gender</label>
                                   </div>
                                   <div class="col-8">
                                        <div class="d-flex justify-content-between">
                                            <div class="form-check">
                                              <input class="form-check-input form-check-input-sm" checked type="radio" name="gender"  value="male">
                                              <label class="form-check-label" >
                                                  Male
                                              </label>
                                            </div>
                                            <div class="form-check">
                                              <input class="form-check-input" type="radio" name="gender"  value="female">
                                              <label class="form-check-label" >
                                                  Female
                                              </label>
                                            </div>
                                            <div class="form-check">
                                              <input class="form-check-input" type="radio" name="gender"  value="other">
                                              <label class="form-check-label" >
                                                  Other
                                              </label>
                                            </div>
                                        </div>
                                   </div>
                               </div>
                               <div class="row h-100 align-items-center mb-3">
                                   <div class="col">
                                       <label class="text-500">Birthday</label>
                                   </div>
                                   <div class="col-8">
                                        <div class="row">
                                            <div class="col-4">
                                                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                                  <option value="1">1</option>
                                                  <option value="2">2</option>
                                                  <option value="3">3</option>
                                                </select>
                                            </div>
                                            <div class="col-4">
                                                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                                  <option value="1">1</option>
                                                  <option value="2">2</option>
                                                  <option value="3">3</option>
                                                </select>
                                            </div>
                                            <div class="col-4">
                                                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                                  <option value="1">1</option>
                                                  <option value="2">2</option>
                                                  <option value="3">3</option>
                                                </select>
                                            </div>
                                        </div>
                                   </div>
                               </div>
                            </div>
                        </div>
                        <div class="w-max m-auto">
                            <button class="btn py-3 px-5 border text-500 btn-md rounded">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>