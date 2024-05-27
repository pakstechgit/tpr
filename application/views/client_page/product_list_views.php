<style>
    .sub_category_list a{
    cursor: pointer;
  }
  .sub_category_list .main_cat.active{
    color: #0235B5;
    font-weight: 700;
    text-decoration: underline;
    background-color: transparent;
    border:none;
  }
  .sub_category .list-group-item{
       background-color: transparent;
  }
  .category_list a,.sub_category_list a:hover{
    color: black;
  }
  .main_sub_cat{
      font-size:12px;
      color:#979797;
  }
  .accordion-button{
      background-color:transparent !important;
      color:black !important;
  }
  .accordion-button:focus{
      outline:none !important;
  }
</style>
<div class="container-fluid mt-4">
      <div class="row">
        <div class="col-md-3">
             <p class="list-group-item border-0 py-0 text-secondary">Home / Featured Products</p>
             <p class="list-group-item border-0 py-0 h4">Market We Serve</p>
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <div class="accordion-header p-0 " id="flush-headingTwo">
                      <div class="accordion-button collapsed  align-items-baseline" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        <div class="p-0 m-0">
                            <p class="p-0 m-0 text-600">Category</p>
                            <p class="p-0 m-0 text-secondary">All</p>
                        </div>
                        
                      </div>
                    </div>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">
                            <div class="form-check mb-3">
                              <input class="form-check-input main_category" checked type="radio" value="all" name="category" id="flexCheckDefault">
                              <label class="form-check-label" for="flexCheckDefault">
                               All
                              </label>
                            </div>
                            <div class="form-check mb-3">
                              <input class="form-check-input main_category" value="athletic"  type="radio" name="category" id="flexCheckDefault">
                              <label class="form-check-label" for="flexCheckDefault">
                               Athletic
                              </label>
                            </div>
                            <div class="form-check mb-3">
                              <input class="form-check-input"  type="radio" name="category" id="flexCheckDefault">
                              <label class="form-check-label" for="flexCheckDefault">
                               Customized Medical Kits / Pack
                              </label>
                            </div>
                            <div class="form-check  mb-3">
                              <input class="form-check-input"  type="radio" name="category" id="flexCheckDefault">
                              <label class="form-check-label" for="flexCheckDefault">
                              Dental
                              </label>
                            </div>
                            <div class="form-check mb-3">
                              <input class="form-check-input"  type="radio" name="category" id="flexCheckDefault">
                              <label class="form-check-label" for="flexCheckDefault">
                               Diagnostics / Laboratory
                              </label>
                            </div>
                            <div class="form-check mb-3">
                              <input class="form-check-input"  type="radio" name="category" id="flexCheckDefault">
                              <label class="form-check-label" for="flexCheckDefault">
                              Dialysis
                              </label>
                            </div>
                            <div class="form-check mb-3">
                              <input class="form-check-input"  type="radio" name="category" id="flexCheckDefault">
                              <label class="form-check-label" for="flexCheckDefault">
                               DME (Durable Medical Equipment)
                              </label>
                            </div>
                            <div class="form-check mb-3">
                              <input class="form-check-input"  type="radio" name="category" id="flexCheckDefault">
                              <label class="form-check-label" for="flexCheckDefault">
                               Drug Wholesale
                              </label>
                            </div>
                            <div class="form-check mb-3">
                              <input class="form-check-input"  type="radio" name="category" id="flexCheckDefault">
                              <label class="form-check-label" for="flexCheckDefault">
                               Emergency
                              </label>
                            </div>
                            <div class="form-check mb-3">
                              <input class="form-check-input"type="radio" name="category" id="flexCheckDefault">
                              <label class="form-check-label" for="flexCheckDefault">
                               Gloves
                              </label>
                            </div>
                            <div class="form-check mb-3">
                              <input class="form-check-input"  type="radio" name="category" id="flexCheckDefault">
                              <label class="form-check-label" for="flexCheckDefault">
                               Home / Personal Care
                              </label>
                            </div>
                      </div>
                    </div>
                </div>
                <div class="accordion-item sub_category" style="display:none">
                    <div class="accordion-header p-0 " id="flush-headingSubcat">
                      <div class="accordion-button align-items-baseline" data-bs-toggle="collapse" data-bs-target="#flush-collapseSubcat" aria-expanded="false" aria-controls="flush-collapseSubcat">
                        <div class="p-0 m-0">
                            <p class="p-0 m-0 text-600">Athletics</p>
                            <p class="p-0 m-0 text-secondary">All</p>
                        </div>
                      </div>
                    </div>
                    <div id="flush-collapseSubcat" class="accordion-collapse" aria-labelledby="flush-headingSubcat" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">
                            <button disabled class="btn border-0 mb-3 text-decoration-underline">Unselect all</button>
                            <div class="form-check mb-3">
                              <input class="form-check-input"  type="checkbox" name="category" id="flexCheckDefault">
                              <label class="form-check-label" for="flexCheckDefault">
                                <div class="d-flex align-items-center">
                                    <Span class="ms-2">Bandages</Span>
                                </div>
                              </label>
                            </div>
                            <div class="form-check mb-3">
                              <input class="form-check-input"  type="checkbox" name="category" id="flexCheckDefault">
                              <label class="form-check-label" for="flexCheckDefault">
                                <div class="d-flex align-items-center">
                                    <Span class="ms-2">Cervical Collars</Span>
                                </div>
                              </label>
                            </div>
                            <div class="form-check mb-3">
                              <input class="form-check-input"  type="checkbox" name="category" id="flexCheckDefault">
                              <label class="form-check-label" for="flexCheckDefault">
                                <div class="d-flex align-items-center">
                                    <Span class="ms-2">Dressing & Sponges</Span>
                                </div>
                              </label>
                            </div>
                            <div class="form-check mb-3">
                              <input class="form-check-input"  type="checkbox" name="category" id="flexCheckDefault">
                              <label class="form-check-label" for="flexCheckDefault">
                                <div class="d-flex align-items-center">
                                    <Span class="ms-2">Gloves</Span>
                                </div>
                              </label>
                            </div>
                            <div class="form-check mb-3">
                              <input class="form-check-input"  type="checkbox" name="category" id="flexCheckDefault">
                              <label class="form-check-label" for="flexCheckDefault">
                                <div class="d-flex align-items-center">
                                    <Span class="ms-2">Hot & Cold Packs</Span>
                                </div>
                              </label>
                            </div>
                            <div class="form-check mb-3">
                              <input class="form-check-input"  type="checkbox" name="category" id="flexCheckDefault">
                              <label class="form-check-label" for="flexCheckDefault">
                                <div class="d-flex align-items-center">
                                    <Span class="ms-2">Sharps Container</Span>
                                </div>
                              </label>
                            </div>
                      </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-header p-0 " id="flush-headingThree">
                      <div class="accordion-button align-items-baseline collapsed" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        <div class="p-0 m-0">
                            <p class="p-0 m-0 text-600">Color</p>
                            <p class="p-0 m-0 text-secondary">All</p>
                        </div>
                        
                      </div>
                    </div>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">
                            <button disabled class="btn border-0 mb-3 text-decoration-underline">Unselect all</button>
                            <div class="form-check mb-3">
                              <input class="form-check-input"  type="checkbox" name="category" id="flexCheckDefault">
                              <label class="form-check-label" for="flexCheckDefault">
                                <div class="d-flex align-items-center">
                                    <span class="p-2 d-inline-block bg-white rounded-circle border " stle="height:3px;width:3px"></span>
                                    <Span class="ms-2">White</Span>
                                </div>
                              </label>
                            </div>
                            <div class="form-check mb-3">
                              <input class="form-check-input"  type="checkbox" name="category" id="flexCheckDefault">
                              <label class="form-check-label" for="flexCheckDefault">
                                <div class="d-flex align-items-center">
                                    <span class="p-2 d-inline-block bg_primary rounded-circle border " stle="height:3px;width:3px"></span>
                                    <Span class="ms-2">Blue</Span>
                                </div>
                              </label>
                            </div>
                      </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-header p-0 " id="flush-headingFour">
                      <div class="accordion-button align-items-baseline collapsed" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                        <div class="p-0 m-0">
                            <p class="p-0 m-0 text-600">Material</p>
                            <p class="p-0 m-0 text-secondary">All</p>
                        </div>
                        
                      </div>
                    </div>
                    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">
                            <button disabled class="btn border-0 mb-3 text-decoration-underline">Unselect all</button>
                            <div class="form-check mb-3">
                              <input class="form-check-input"  type="checkbox" name="category" id="flexCheckDefault">
                              <label class="form-check-label" for="flexCheckDefault">
                                <div class="d-flex align-items-center">
                                    <Span class="ms-2">Nitrile</Span>
                                </div>
                              </label>
                            </div>
                            <div class="form-check mb-3">
                              <input class="form-check-input"  type="checkbox" name="category" id="flexCheckDefault">
                              <label class="form-check-label" for="flexCheckDefault">
                                <div class="d-flex align-items-center">
                                    <Span class="ms-2">Latex</Span>
                                </div>
                              </label>
                            </div>
                            <div class="form-check mb-3">
                              <input class="form-check-input"  type="checkbox" name="category" id="flexCheckDefault">
                              <label class="form-check-label" for="flexCheckDefault">
                                <div class="d-flex align-items-center">
                                    <Span class="ms-2">Vinyl</Span>
                                </div>
                              </label>
                            </div>
                      </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-header p-0 " id="flush-headingBrand">
                      <div class="accordion-button align-items-baseline collapsed" data-bs-toggle="collapse" data-bs-target="#flush-collapseBrand" aria-expanded="false" aria-controls="flush-collapseBrand">
                        <div class="p-0 m-0">
                            <p class="p-0 m-0 text-600">Brand</p>
                            <p class="p-0 m-0 text-secondary">All</p>
                        </div>
                        
                      </div>
                    </div>
                    <div id="flush-collapseBrand" class="accordion-collapse collapse" aria-labelledby="flush-headingBrand" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">
                            <button disabled class="btn border-0 mb-3 text-decoration-underline">Unselect all</button>
                            <div class="form-check mb-3">
                              <input class="form-check-input"  type="checkbox" name="category" id="flexCheckDefault">
                              <label class="form-check-label" for="flexCheckDefault">
                                <div class="d-flex align-items-center">
                                    <Span class="ms-2">Dynarex</Span>
                                </div>
                              </label>
                            </div>
                            <div class="form-check mb-3">
                              <input class="form-check-input"  type="checkbox" name="category" id="flexCheckDefault">
                              <label class="form-check-label" for="flexCheckDefault">
                                <div class="d-flex align-items-center">
                                    <Span class="ms-2">Emerald</Span>
                                </div>
                              </label>
                            </div>
                            <div class="form-check mb-3">
                              <input class="form-check-input"  type="checkbox" name="category" id="flexCheckDefault">
                              <label class="form-check-label" for="flexCheckDefault">
                                <div class="d-flex align-items-center">
                                    <Span class="ms-2">Vinyl</Span>
                                </div>
                              </label>
                            </div>
                            <div class="form-check mb-3">
                              <input class="form-check-input"  type="checkbox" name="category" id="flexCheckDefault">
                              <label class="form-check-label" for="flexCheckDefault">
                                <div class="d-flex align-items-center">
                                    <Span class="ms-2">Rockwell Medical</Span>
                                </div>
                              </label>
                            </div>
                            <div class="form-check mb-3">
                              <input class="form-check-input"  type="checkbox" name="category" id="flexCheckDefault">
                              <label class="form-check-label" for="flexCheckDefault">
                                <div class="d-flex align-items-center">
                                    <Span class="ms-2">TPR Medical</Span>
                                </div>
                              </label>
                            </div>
                            <div class="form-check mb-3">
                              <input class="form-check-input"  type="checkbox" name="category" id="flexCheckDefault">
                              <label class="form-check-label" for="flexCheckDefault">
                                <div class="d-flex align-items-center">
                                    <Span class="ms-2">Nipro</Span>
                                </div>
                              </label>
                            </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col ">
            <div class="d-flex justify-content-between">
              <span class="text-600" style="font-size: 22px;">Bandages</span>
              <div class="d-flex align-items-center">
                <span class="" style="width: 100px;">Sort by:</span>
                <select class="form-select bg-light" style="color:#808080">
                  <option selected>Relevance</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
            </div>
            <div class="container-fluid p-0 mt-3">
              <h4 class="text-400">Elastic Bandages </h4>
              <div class="container-fluid p-0">
                    <div class="row gy-5">
                        <div class="col">
                            <a class="d-block text-decoration-none text-dark" href="<?=base_url('products/product_informations?name=bandages')?>">
                                <div>
                                    <img  style="max-width: 361px;max-height: 361px;" src="<?=base_url('assets/images/athletic_bandages-1.jpg')?>" alt="product image" class="img-fluid mt-3">
                                </div>
                                <p class="text-600 mt-3 mb-0" style="font-size: 16px;">Elastic Bandages, Clips - 2" x 5 yds</p>
                                <p class="text-secondary mb-0 ">Dynarex </p>
                                <p class="text-600 mt-2 mb-0">₱ 500.00-700.00</p>
                                <p class="p-0 m-0">3 sizes available</p>
                            </a>
                            
                        </div>
                        <div class="col">
                           <div>
                             <img  style="max-width: 361px;max-height: 361px;" src="<?=base_url('assets/images/athletic_bandages-2.jpg')?>" alt="product image" class="img-fluid mt-3">
                           </div>
                           <p class="text-600 mt-3 mb-0" style="font-size: 16px;">Elastic Bandages, Clips - 3" x 5 yds </p>
                           <p class="text-secondary mb-0 ">Dynarex</p>
                           <p class="text-600 mt-2 mb-0">₱ 500.00-700.00</p>
                           <p class="p-0 m-0">3 sizes available</p>
                        </div>
                        <div class="col">
                            <div>
                              <img  style="max-width: 361px;max-height: 361px;" src="<?=base_url('assets/images/elastic_bandages-4.png')?>" alt="product image" class="img-fluid mt-3">
                            </div>
                            <p class="text-600 mt-3 mb-0" style="font-size: 16px;">Elastic Bandages, Clips - 4" x 5 yds</p>
                            <p class="text-secondary mb-0 ">Dynarex </p>
                            <p class="text-600 mt-2 mb-0">₱ 500.00-700.00</p>
                            <p class="p-0 m-0">3 sizes available</p>
                        </div>
                  </div>
              </div>
            </div>
            <div class="container-fluid p-0 mt-5">
              <h4 class="text-400">Stretch Gauze Bandage - Non Sterile</h4>
              <div class="container-fluid p-0">
                    <div class="row gy-5">
                        <div class=" col col-md-4">
                            <div>
                              <img  style="max-width: 361px;max-height: 361px;" src="<?=base_url('assets/images/stretch_bandages-1.jpg')?>" alt="product image" class="img-fluid mt-3">
                            </div>
                            <p class="text-600 mt-3 mb-0" style="font-size: 16px;">Stretch Gauze Bandages - 2" x 4.1yds</p>
                            <p class="text-secondary mb-0 ">Emerald </p>
                            <p class="text-600 mt-2 mb-0">₱ 500.00-700.00</p>
                            <p class="p-0 m-0">3 sizes available</p>
                        </div>
                        <div class="col col-md-4">
                            <div>
                                <img  style="max-width: 361px;max-height: 361px;" src="<?=base_url('assets/images/stretch_bandages-2.jpg')?>" alt="product image" class="img-fluid mt-3">
                            </div>
                            <p class="text-600 mt-3 mb-0" style="font-size: 16px;">Stretch Gauze Bandages - 3" x 4.1yds</p>
                            <p class="text-secondary mb-0 ">Emerald </p>
                            <p class="text-600 mt-2 mb-0">₱ 500.00-700.00</p>
                            <p class="p-0 m-0">3 sizes available</p>
                        </div>
                        <div class="col col-md-4">
                            <div>
                              <img  style="max-width: 361px;max-height: 361px;" src="<?=base_url('assets/images/stretch_bandages-3.jpg')?>" alt="product image" class="img-fluid mt-3">
                            </div>
                            <p class="text-600 mt-3 mb-0" style="font-size: 16px;">Stretch Gauze Bandages - 4" x 4.1yds</p>
                            <p class="text-secondary mb-0 ">Emerald </p>
                            <p class="text-600 mt-2 mb-0">₱ 500.00-700.00</p>
                            <p class="p-0 m-0">3 sizes available</p>
                        </div>
                        <div class="col col-md-4">
                            <div>
                              <img  style="max-width: 361px;max-height: 361px;" src="<?=base_url('assets/images/stretch_bandages-4.jpg')?>" alt="product image" class="img-fluid mt-3">
                            </div>
                            <p class="text-600 mt-3 mb-0" style="font-size: 16px;">Stretch Gauze Bandages - 6" x 4.1yds</p>
                            <p class="text-secondary mb-0 ">Emerald </p>
                            <p class="text-600 mt-2 mb-0">₱ 500.00-700.00</p>
                            <p class="p-0 m-0">3 sizes available</p>
                        </div>
                    </div>
              </div>
            </div>
            <div class="container-fluid p-0 mt-5">
              <h4 class="text-400">Sheer Plastic Adhesive Bandages</h4>
              <div class="container-fluid p-0">
                    <div class="row gy-5">
                        <div class=" col col-md-4">
                            <div>
                              <img  style="max-width: 361px;max-height: 361px;" src="<?=base_url('assets/images/adhesive_bandages-1.jpg')?>" alt="product image" class="img-fluid mt-3">
                            </div>
                            <p class="text-600 mt-3 mb-0" style="font-size: 16px;">Sheer Plastic Adhesive Bandages, Sterile - 1" x 3"</p>
                            <p class="text-secondary mb-0 ">Emerald </p>
                            <p class="text-600 mt-2 mb-0">₱ 500.00-700.00</p>
                            <p class="p-0 m-0">Only Large </p>
                        </div>
                    </div>
              </div>
            </div>
        </div>
      </div>
      <div class="container-fluid p-5 my-5">
        <hr class="w-100 my-5">
        <div class="container">

            <div class="row justify-content-center">

                <div class="col">

                    <h2 style="line-height:36px;font-size:24px">Weekly newsletter about our latest products,

                        new arrivals, and more. </h2>

                    <div class="my-3">

                        <input type="text" style="height: 56px;" class="form-control" placeholder="Enter your email address">

                    </div>

                    <div class="form-check">

                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">

                        <label class="form-check-label" for="flexCheckDefault" style="font-size: 16px;">

                            I consent TPR to send a Newsletter.

                        </label>

                    </div>

                    <button class="btn btn-sm d-block ms-auto rounded-10 text-600 btn-sm border mt-3 px-3 py-2" style="font-size:12px">Subscribe</button>

                </div>

                <div class="col">

                    <p style="font-size: 24px;">Become a <span class="text-600">TPR Local Dealer</span></p>

                    <div class="my-4">

                        <p class="mt-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, seddolore magna aliqua. Ut veniam, quis nos. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut lab dolore magna aliqua. Ut enim ad minim veniam, quis nos.Lorem ipsum dolor sit amet, consectetur adipiscing

                            elit, sed do eiusmod tempor incididunt ut lab dolore

                            magna aliqua. Ut enim ad minim veniam, quis nos.</p>

                    </div>

                    <button class="btn w-100 border rounded-10 btn-lg text-600" style="font-size:12px;height:50px;max-width:140px">Get Started</button>

                </div>

            </div>

        </div>

    </div>
  </div>
  <script>
      $(document).ready(function(){
          $('.main_cat').on('click',function(){
              $(this).siblings('.main_sub_cat_container').toggle('slow')
          })
          $('.main_category').on('click',function(){
              var value             = $(this).val();
              var parent            = $(this).parent().parent().parent();
              parent.removeClass('show');
            //   var accordion_button  = parent.children('.accordion-header');
              parent.siblings().children('.accordion-button').addClass('collapsed');
              if(value=='all'){
                  $('.sub_category').hide();
                  return;
              }
              $('.sub_category').toggle();
          })
      })
  </script>