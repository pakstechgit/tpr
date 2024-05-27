<head>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css"
        integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
    .user-order_tracking_tab .nav-item{
        margin:0px 5px;
    }
    .user-order_tracking_tab .nav-item .nav-link{
        font-size:12px;
        color:rgba(0, 0, 0, 0.4);
        border:2px solid #AFAFAF;
        border-bottom:0;
        border-radius:10px 10px 0px 0px;
        width:140px;
        height:50px;
    }
    .user-order_tracking_tab .nav-item .active{
        background-color:#0235B5;
        color:white;
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
</style>
<section class="p-md-5">
    <p class="text-600 text-center h5">Orders and Trackings</p>
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
        <div class="col">
            <div class="card h-100 " style="border:3px solid #AFAFAF;border-radius:15px;overflow:auto;">
                <div class="card-body  pt-5">
                    <div class="container-fluid  ">
                        <ul class="nav user-order_tracking_tab nav-tabs border-0 d-flex justify-content-center" id="myTab" role="tablist">
                          <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="deliver-tab" data-bs-toggle="tab" data-bs-target="#deliver" type="button" role="tab" aria-controls="deliver" aria-selected="true">Delivered</button>
                          </li>
                          <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Follow Up Orders</button>
                          </li>
                          <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">To Process</button>
                          </li> 
                          <li class="nav-item" role="presentation">
                            <button class="nav-link" id="returned-tab" data-bs-toggle="tab" data-bs-target="#returned" type="button" role="tab" aria-controls="returned" aria-selected="false">Returned</button>
                          </li> 
                        </ul>
                        <div class="tab-content m-0">
                          <div class="tab-pane fade show active" id="deliver" role="tabpanel" aria-labelledby="deliver-tab">
                                <div class="card  p-1 mb-3">
                                  <div class="card-body p-0">
                                      <div class="card-header p-0">
                                        <table class="table table-borderless m-0">
                                              <tr>
                                                  <td>Order Date</td>
                                                  <td>Order Number</td>
                                                  <td>Total</td>
                                              </tr>
                                              <tr>
                                                  <td><span class="text-600">August 7, 2020 at 12:54 PM</span></td>
                                                  <td><span class="text-600"># 122-123154325-23574857</span></td>
                                                  <td><span class="text-600">$105</span></td>
                                              </tr>
                                        </table>
                                      </div>
                                      <div class="card-body">
                                            <div class="container-fluid d-flex justify-content-between align-items-center">
                                              <div class="order_tracking_image">
                                                  <img src ="<?=base_url('assets/images/order_tracking-1.png')?>" width="154px" style="max-height:116px" />
                                              </div>
                                              <div class="order_tracking_details">
                                                  <p class="text-600 m-0 p-0">DynaRide™ Series 3 Lite Wheelchairs</p>
                                                  <p class="m-0 p-0"><span>Color: Black</span> <span>Size: 20”x16”-18 </span></p>
                                                  <p class="m-0 p-0">Price: <span class="text_primary text-600">$105</span></p>
                                              </div>
                                              <div>
                                                  <button class="btn btn-md bg-light border rounded-10 border-dark px-5 ">Delivered</button>
                                              </div>
                                            </div>
                                            
                                      </div>
                                  </div>
                                </div>
                          </div>
                          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                              <div class="card  p-1 mb-3">
                                  <div class="card-body p-0">
                                      <div class="card-header p-0">
                                        <table class="table table-borderless m-0">
                                              <tr>
                                                  <td>Order Date</td>
                                                  <td>Order Number</td>
                                                  <td>Total</td>
                                              </tr>
                                              <tr>
                                                  <td><span class="text-600">August 7, 2020 at 12:54 PM</span></td>
                                                  <td><span class="text-600"># 122-123154325-23574857</span></td>
                                                  <td><span class="text-600">$105</span></td>
                                              </tr>
                                        </table>
                                      </div>
                                      <div class="card-body">
                                            <div class="container-fluid d-flex justify-content-between align-items-center">
                                              <div class="order_tracking_image">
                                                  <img src ="<?=base_url('assets/images/order_tracking-1.png')?>" width="154px" style="max-height:116px" />
                                              </div>
                                              <div class="order_tracking_details">
                                                  <p class="text-600 m-0 p-0">DynaRide™ Series 3 Lite Wheelchairs</p>
                                                  <p class="m-0 p-0"><span>Color: Black</span> <span>Size: 20”x16”-18 </span></p>
                                                  <p class="m-0 p-0">Price: <span class="text_primary text-600">$105</span></p>
                                              </div>
                                              <div>
                                                  <button class="btn btn-md rounded-10 text-light px-5 " style="background-color:#DD7311">Pending</button>
                                              </div>
                                            </div>
                                            
                                      </div>
                                  </div>
                                </div>
                          </div>
                          <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                              <div class="card  p-1 mb-3">
                                  <div class="card-body p-0">
                                      <div class="card-header p-0">
                                        <table class="table table-borderless m-0">
                                              <tr>
                                                  <td>Order Date</td>
                                                  <td>Order Number</td>
                                                  <td>Total</td>
                                              </tr>
                                              <tr>
                                                  <td><span class="text-600">August 7, 2020 at 12:54 PM</span></td>
                                                  <td><span class="text-600"># 122-123154325-23574857</span></td>
                                                  <td><span class="text-600">$105</span></td>
                                              </tr>
                                        </table>
                                      </div>
                                      <div class="card-body">
                                            <div class="container-fluid d-flex justify-content-between align-items-center">
                                              <div class="order_tracking_image">
                                                  <img src ="<?=base_url('assets/images/order_tracking-1.png')?>" width="154px" style="max-height:116px" />
                                              </div>
                                              <div class="order_tracking_details">
                                                  <p class="text-600 m-0 p-0">DynaRide™ Series 3 Lite Wheelchairs</p>
                                                  <p class="m-0 p-0"><span>Color: Black</span> <span>Size: 20”x16”-18 </span></p>
                                                  <p class="m-0 p-0">Price: <span class="text_primary text-600">$105</span></p>
                                              </div>
                                              <div>
                                                  <button class="btn btn-md rounded-10 text-light px-5 " style="background-color:#DDBC11">Processing</button>
                                              </div>
                                            </div>
                                            
                                      </div>
                                  </div>
                                </div>
                          </div>
                          <div class="tab-pane fade" id="returned" role="tabpanel" aria-labelledby="returned-tab">
                              <div class="card  p-1 mb-3">
                                  <div class="card-body p-0">
                                      <div class="card-header p-0">
                                        <table class="table table-borderless m-0">
                                              <tr>
                                                  <td>Order Date</td>
                                                  <td>Order Number</td>
                                                  <td>Total</td>
                                              </tr>
                                              <tr>
                                                  <td><span class="text-600">August 7, 2020 at 12:54 PM</span></td>
                                                  <td><span class="text-600"># 122-123154325-23574857</span></td>
                                                  <td><span class="text-600">$105</span></td>
                                              </tr>
                                        </table>
                                      </div>
                                      <div class="card-body">
                                            <div class="container-fluid d-flex justify-content-between align-items-center">
                                              <div class="order_tracking_image">
                                                  <img src ="<?=base_url('assets/images/order_tracking-1.png')?>" width="154px" style="max-height:116px" />
                                              </div>
                                              <div class="order_tracking_details">
                                                  <p class="text-600 m-0 p-0">DynaRide™ Series 3 Lite Wheelchairs</p>
                                                  <p class="m-0 p-0"><span>Color: Black</span> <span>Size: 20”x16”-18 </span></p>
                                                  <p class="m-0 p-0">Price: <span class="text_primary text-600">$105</span></p>
                                              </div>
                                              <div>
                                                  <button class="btn btn-md bg-danger rounded-10 text-light px-5 fs-6 ">Returned</button>
                                              </div>
                                            </div>
                                            
                                      </div>
                                  </div>
                                </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="px-0 px-md-5 mb-md-5">
    <div class="container-fluid px-4 px-md-5">
        <div class="recent_view_slide align-items-center position-raltive" style="left:0px" >
            <div class="card rounded-4 m-3  cursor-pointer" style="min-height:511px;max-height:511px">
                <a href="#">
                    <img class="h-100 w-100 card-img-top img-fluid" width="328px" height="328px"
                        style="object-fit: cover;max-height:328px"
                        src="<?= base_url('assets/images/new_product_1.jpg') ?>" alt="" srcset="">
                </a>
                <div class="card-body bg-white">
                    <a class="d-block m-0 p-0 text-dark text-decoration-none"
                        href="#">
                        <p class="text-600 card-title text-dark p-0 m-0">Urinary Drainage Bag</p>
                        <p class="text-secondary">Dynarex</p>
                        <p class="text-600 text-dark">P 500.00</p>
                        <p class="text-dark">Only Extra Large </p>
                    </a>
                </div>
            </div>
            <div class="card rounded-4 m-3  cursor-pointer" style="min-height:511px;max-height:511px">
                <a href="#">
                    <img class="h-100 w-100 card-img-top img-fluid" width="328px" height="328px"
                        style="object-fit: cover;max-height:328px"
                        src="<?= base_url('assets/images/new_product_2.jpg') ?>" alt="" srcset="">
                </a>
                <div class="card-body bg-white">
                    <a class="d-block m-0 p-0 text-dark text-decoration-none"
                        href="#">
                        <p class="text-600 card-title text-dark p-0 m-0">Urinary Drainage Bag</p>
                        <p class="text-secondary">Dynarex</p>
                        <p class="text-600 text-dark">P 500.00</p>
                        <p class="text-dark">Only Extra Large </p>
                    </a>
                </div>
            </div>
            <div class="card rounded-4 m-3  cursor-pointer" style="min-height:511px;max-height:511px">
                <a href="#">
                    <img class="h-100 w-100 card-img-top img-fluid" width="328px" height="328px"
                        style="object-fit: cover;max-height:328px"
                        src="<?= base_url('assets/images/new_product_3.jpg') ?>" alt="" srcset="">
                </a>
                <div class="card-body bg-white">
                    <a class="d-block m-0 p-0 text-dark text-decoration-none"
                        href="#">
                        <p class="text-600 card-title text-dark p-0 m-0">Urinary Drainage Bag</p>
                        <p class="text-secondary">Dynarex</p>
                        <p class="text-600 text-dark">P 500.00</p>
                        <p class="text-dark">Only Extra Large </p>
                    </a>
                </div>
            </div>
            <div class="card rounded-4 m-3  cursor-pointer" style="min-height:511px;max-height:511px">
                <a href="#">
                    <img class="h-100 w-100 card-img-top img-fluid" width="328px" height="328px"
                        style="object-fit: cover;max-height:328px"
                        src="<?= base_url('assets/images/new_product_4.jpg') ?>" alt="" srcset="">
                </a>
                <div class="card-body bg-white">
                    <a class="d-block m-0 p-0 text-dark text-decoration-none"
                        href="#">
                        <p class="text-600 card-title text-dark p-0 m-0">Urinary Drainage Bag</p>
                        <p class="text-secondary">Dynarex</p>
                        <p class="text-600 text-dark">P 500.00</p>
                        <p class="text-dark">Only Extra Large </p>
                    </a>
                </div>
            </div>
            <div class="card rounded-4 m-3  cursor-pointer" style="min-height:511px;max-height:511px">
                <a href="#">
                    <img class="h-100 w-100 card-img-top img-fluid" width="328px" height="328px"
                        style="object-fit: cover;max-height:328px"
                        src="<?= base_url('assets/images/new_product_2.jpg') ?>" alt="" srcset="">
                </a>
                <div class="card-body bg-white">
                    <a class="d-block m-0 p-0 text-dark text-decoration-none"
                        href="#">
                        <p class="text-600 card-title text-dark p-0 m-0">Urinary Drainage Bag</p>
                        <p class="text-secondary">Dynarex</p>
                        <p class="text-600 text-dark">P 500.00</p>
                        <p class="text-dark">Only Extra Large </p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <a href="#" class=" d-block text-decoration-underline text-500 text-center mt-5"
            style="font-size: 20px;color:black;">View All Products</a>
</section>
<script src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
    $(document).ready(function(){
        $('.recent_view_slide').slick({
        dots: true,
        infinite: false,
        slidesToShow: 4,
        slidesToScroll: 4,
        prevArrow: '<button type="button" class=" d-none d-lg-block rounded-circle border-0 bg-white shadow position-absolute" style="font-size:35px;top:48%;left:-50px;width:50px;height:50px"><</button>',
        nextArrow: '<button type="button" class="d-none d-lg-block  rounded-circle border-0 bg-white shadow position-absolute" style="font-size:35px;top:48%;right:-50px;width:50px;height:50px">></button>',
        
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
    })
</script>