<style>
    .sizes{
        min-width:100px;
    }
    .also_bought .nav-link{
        border:none !important;
        color:black !important;
        cursor:pointer;
    }
    .also_bought .nav-link:hover,.nav-link:focus{
        border:none !important;
        color:black !important;
    }
    .also_bought .nav-link.active{
        border:none !important;
        border-bottom:4px solid black !important;
    }
    .btn-sub,.btn-add,.qty{
        font-size:11px
        color:black;
        width:23px;
        height:23px;
    }
    .btn-sub,.btn-add{
        color:white;
        background-color:#878787;
        border-radius:15px;
        cursor:pointer;
    }
    .card-title{
        height:2.65625vw !important;
    }
</style>
    <div class="p-5 w-100">
        <section class="container-fluid mt-3">
            <p class="text-secondary">Home / Products / Bandages</p>
        </section>
        <section class="container-fluid mt-5">
            <div class="row">
                <div class="col-md-6 p-0 w-max">
                    <div class="container-fluid  p-0 m-0 d-flex justify-content-arround">
                        <div class="d-flex flex-column justify-content-between">
                            <img  class="img-fluid mb-2" src="<?=base_url('assets/images/bandages_sm-1.jpg')?>" alt="image info"/>
                            <img  class="img-fluid mb-2" src="<?=base_url('assets/images/bandages_sm-2.jpg')?>" alt="image info"/>
                            <img  class="img-fluid mb-2" src="<?=base_url('assets/images/bandages_sm-3.jpg')?>" alt="image info"/>
                        </div>
                        <div class="d-flex ms-3 justify-content-center align-items-center">
                            <div class="img-container  w-100 h-100">
                                <img style="object-fit:cover" class="" src="<?=base_url('assets/images/bandages_lg.jpg')?>" alt="image info"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <h3 class="text-600">Bandages</h3>
                    <p class="text-600">Brand:<span class="ms-2">Dynarex</span></p>
                    <div class="container-fluid p-0 m-0">
                        <table class="table w-100 table-borderless table-striped">
                            <thead class="text_primary text-center">
                                <tr class="text-600">
                                <th class="text-start">Item No.</th>
                                <th class="w-max text-start">Product Description</th>
                                <th>Per/Case</th>
                                <th>Price</th>
                                <th>Per/Box</th>
                                <th>Price</th>
                            </tr>
                            </thead>
                            <tr class="my-3 text-600">
                                <td>1108</td>
                                <td class=""><span class="d-block" style="max-width:199px">Povidone Iodine Prep Pads - Medium</span></td>
                                <td class="text-center">
                                    <span class="d-block text-center">10</span>
                                    <div class="border d-flex justify-content-evenly align-items-center p-1  border-2 border-secondary text-center rounded-pill">
                                        <span class="btn-sub d-block">-</span>
                                        <span class="qty d-block">0</span>
                                        <span class="btn-add d-block">+</span>
                                    </div>
                                </td>
                                <td class="text-center">4,800</td>
                                <td class="text-center">
                                    <span class="d-block text-center">100</span>
                                    <div class="border d-flex justify-content-evenly align-items-center p-1  border-2 border-secondary text-center rounded-pill">
                                        <span class="btn-sub d-block">-</span>
                                        <span class="qty d-block">0</span>
                                        <span class="btn-add d-block">+</span>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <span class="d-block text-center">200</span>
                                </td>
                                <td class="text-center align-middle">
                                    <button class=" border-0 add_cart_button btn btn-light text_primary text-600" style="background-color:#F3F3F3">Add to cart</button>
                                </td>
                            </tr>
                             <tr class="my-3 text-600">
                                <td>1201</td>
                                <td><span class="d-block" style="max-width:199px">Povidone Iodine Swabsticks-1's</span></td>
                                <td class="text-center">
                                    <span class="d-block text-center">10</span>
                                    <div class="border d-flex justify-content-evenly align-items-center p-1  border-2 border-secondary text-center rounded-pill">
                                        <span class="btn-sub d-block">-</span>
                                        <span class="qty d-block">0</span>
                                        <span class="btn-add d-block">+</span>
                                    </div>
                                </td>
                                <td class="text-center">2,400</td>
                                <td class="text-center">
                                    <span class="d-block text-center">50</span>
                                    <div class="border d-flex justify-content-evenly align-items-center p-1  border-2 border-secondary text-center rounded-pill">
                                        <span class="btn-sub d-block">-</span>
                                        <span class="qty d-block">0</span>
                                        <span class="btn-add d-block">+</span>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <span class="d-block text-center">200</span>
                                </td>
                                <td class="text-center align-middle">
                                    <button class=" border-0 add_cart_button btn btn-light text_primary text-600" style="background-color:#F3F3F3">Add to cart</button>
                                </td>
                            </tr>
                             <tr class="my-3 text-600">
                                <td>1113</td>
                                <td><span class="d-block" style="max-width:199px">Sterile Alcohol Prep Pads -Medium</span></td>
                                <td class="text-center">
                                    <span class="d-block text-center">10</span>
                                    <div class="border d-flex justify-content-evenly align-items-center p-1  border-2 border-secondary text-center rounded-pill">
                                        <span class="btn-sub d-block">-</span>
                                        <span class="qty d-block">0</span>
                                        <span class="btn-add d-block">+</span>
                                    </div>
                                </td>
                                <td class="text-center">4,800</td>
                                <td class="text-center">
                                    <span class="d-block text-center">200</span>
                                    <div class="border d-flex justify-content-evenly align-items-center p-1  border-2 border-secondary text-center rounded-pill">
                                        <span class="btn-sub d-block">-</span>
                                        <span class="qty d-block">0</span>
                                        <span class="btn-add d-block">+</span>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <span class="d-block text-center">200</span>
                                </td>
                                <td class="text-center align-middle">
                                    <button class=" border-0 add_cart_button btn btn-light text_primary text-600" style="background-color:#F3F3F3">Add to cart</button>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-3 w-max  ">
                                <span>Market Segment: </span>
                            </div>
                            <div class="col p-0">
                                <button class="rounded-10 m-2 btn bg-none text_primary border_primary px-3 py-2">Athletic</button>
                                <button class="rounded-10 m-2 btn bg-none text_primary border_primary px-3 py-2">Dental</button>
                                <button class="rounded-10 m-2 btn bg-none text_primary border_primary px-3 py-2">Diagnostics / Laboratory</button>
                                <button class="rounded-10 m-2 btn bg-none text_primary border_primary px-3 py-2">Dialysis </button>
                                <button class="rounded-10 m-2 btn bg-none text_primary border_primary px-3 py-2">Emergency</button>
                                <button class="rounded-10 m-2 btn bg-none text_primary border_primary px-3 py-2">Physician Care</button>
                                <button class="rounded-10 m-2 btn bg-none text_primary border_primary px-3 py-2">Wound Care </button>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
        <section class="mt-5 also_bought">
            <ul class=" nav nav-tabs mb-4" id="myTab" role="tablist">
              <li class="nav-item" role="presentation">
                <a class="nav-link active px-0 h3" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"  role="tab" aria-controls="home" aria-selected="true">Product Details</a>
              </li>
              <li class="nav-item " role="presentation">
                <a class="nav-link h3" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"  role="tab" aria-controls="profile" aria-selected="false">Reviews</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link h3" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact"  role="tab" aria-controls="contact" aria-selected="false">Product Questions</a>
              </li>
            </ul>
            <div class="tab-content" style="min-height:100px" id="myTabContent">
               
              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="row">
                        <div class="col-md-7">
                            <p class="text-700 " style="font-size:1.875vw">Bandages</p>
                            <ul class="" style="font-size:1.45vw">
                                <li class="p-0">Dynarex Povidone Iodine Prep Pads are packaged in convenient, easy to tear pouches. These Povidone Iodine Prep Pad are an ideal antiseptic for skin preparation prior to any minor invasive procedure.</li>
                                <li class="p-0">Ideal for antiseptic skin preparation, venipuncture, IV starts, renal dialysis, pre-op prepping and other minor invasive procedures.</li>
                                <li class="p-0">Each pad is saturated with 10% povidone iodine solution- Povidone iodine is a broad-range antimicrobial that reduces bacteria and microorganisms on the skin.</li>
                            </ul>
                        </div>
                    </div>
                    
              </div>
              <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
              <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
            </div>
        </section>
        <section class="mt-5 ">
            <p style="font-size:1.875vw" class="text-600">Also bought with</p>
            <div class="container-fluid d-flex justify-content-evenly flex-wrap">
                <div class="card" style="width:17.0832vw;max-height:26.61vw">
                    <img class="card-img-top" src="<?=base_url('assets/images/related_image-1.jpg')?>"/>
                    <div class="card-body position-relative">
                        <p class="card-title p-0 m-0 w-100   text-600" style="font-size:0.8334vw">Powder-Free Nitrile Exam Gloves 3 Mil</p>
                        <span class="text-secondary" style="font-size:0.72916vw">Emerald</span>
                        <p class="text-500 m-0 p-0 " style="font-size:0.82916vw">P 500</p>
                        <span style="font-size:0.572916vw">Only Extra Large </span>
                    </div>
                </div>
                <div class="card" style="width:17.0832vw;max-height:26.61vw">
                    <img class="card-img-top" src="<?=base_url('assets/images/related_image-2.jpg')?>"/>
                    <div class="card-body position-relative ">
                        <p class="card-title p-0 m-0 w-100 text-600" style="font-size:0.8334vw">Safe-Touch Vinyl Exam Gloves, Powder-Free</p>
                        <span class="text-secondary" style="font-size:0.72916vw">Emerald</span>
                        <p class="text-500 p-0 m-0 " style="font-size:0.82916vw">P 500</p>
                        <span style="font-size:0.572916vw">Only Extra Large </span>
                    </div>
                </div>
                <div class="card" style="width:17.0832vw;max-height:26.61vw">
                    <img class="card-img-top" src="<?=base_url('assets/images/related_image-3.jpg')?>"/>
                    <div class="card-body position-relative ">
                        <p class="card-title w-100 p-0 m-0  text-600" style="font-size:0.8334vw">Sterile Nitrile Exam Gloves  Powder-Free</p>
                        <span class="text-secondary" style="font-size:0.72916vw">Emerald</span>
                        <p class="text-500 p-0 m-0" style="font-size:0.82916vw">P 500</p>
                        <span style="font-size:0.572916vw">Only Extra Large </span>
                    </div>
                </div>
                <div class="card" style="width:17.0832vw;max-height:26.61vw">
                    <img class="card-img-top" src="<?=base_url('assets/images/related_images-4.jpg')?>"/>
                    <div class="card-body position-relative">
                        <p class="card-title w-100 m-0 p-0   text-600" style="font-size:0.8334vw">Syntheticare Powder-Free Vinyl Exam Gloves – 5 Mil</p>
                        <span class="text-secondary" style="font-size:0.72916vw">Emerald</span>
                        <p class="text-500 p-0 m-0" style="font-size:0.82916vw">P 500</p>
                        <span style="font-size:0.572916vw">Only Extra Large </span>
                    </div>
                </div>
            </div>
        </section>
    </div>