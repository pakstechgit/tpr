<!DOCTYPE html>
<html lang="en">
  <head>
    <?php $this->load->view('templates/head_template'); ?>
    <style>
      .sidebar {
        background-color: #1a1a27;
      }
    </style>
  </head>

  <body>
   <div class="aiz-main-wrapper">
      <div class="aiz-sidebar-wrap ">
        <div class="aiz-sidebar left c-scrollbar">
          <div class="aiz-side-nav-logo-wrap">
            <a
              href="#"
              class="d-block text-left"
            >
                <img class="  m-auto d-block"  src="<?= base_url("assets_system/images/tpr_images/tpr-logo-white.png") ?>" class="brand-icon" alt="TPR Ecommerce">
            </a>
          </div>
          <div class="aiz-side-nav-wrap">
            <div class="px-20px mb-3">
              <input
                class="form-control bg-soft-secondary border-0 form-control-sm text-white"
                type="text"
                name=""
                placeholder="Search in menu"
                id="menu-search"
                onkeyup="menuSearch()"
              />
            </div>
            <ul class="aiz-side-nav-list" id="search-menu"></ul>
            <ul
              class="aiz-side-nav-list metismenu"
              id="main-menu"
              data-toggle="aiz-side-menu"
            >
              <li class="aiz-side-nav-item">
                <a
                  href="<?=site_url('admins/dashboard')?>"
                  class="aiz-side-nav-link"
                >
                  <i class="las la-home aiz-side-nav-icon"></i>
                  <span class="aiz-side-nav-text">Dashboard</span>
                </a>
              </li>
    
              <!-- POS Addon-->
    
              <!-- Product -->
              <li class="aiz-side-nav-item">
                <a href="#" class="aiz-side-nav-link">
                  <i class="las la-shopping-cart aiz-side-nav-icon"></i>
                  <span class="aiz-side-nav-text">Products</span>
                  <span class="aiz-side-nav-arrow"></span>
                </a>
                <!--Submenu-->
                <ul class="aiz-side-nav-list level-2 mm-collapse">
                  <li class="aiz-side-nav-item">
                    <a
                      class="aiz-side-nav-link"
                      href="<?=site_url('admins/products/create')?>"
                    >
                      <span class="aiz-side-nav-text">Add New Product</span>
                    </a>
                  </li>
                  <li class="aiz-side-nav-item">
                    <a
                      href="<?=site_url('admins/products')?>"
                      class="aiz-side-nav-link"
                    >
                      <span class="aiz-side-nav-text">All products</span>
                    </a>
                  </li>
                  
                  <!--<li class="aiz-side-nav-item">-->
                  <!--  <a-->
                  <!--    href="#"-->
                  <!--    class="aiz-side-nav-link"-->
                  <!--  >-->
                  <!--    <span class="aiz-side-nav-text">Digital Products</span>-->
                  <!--  </a>-->
                  <!--</li>-->
                  <li class="aiz-side-nav-item">
                    <a
                      href="#"
                      class="aiz-side-nav-link"
                    >
                      <span class="aiz-side-nav-text">Bulk Import</span>
                    </a>
                  </li>
                  <li class="aiz-side-nav-item">
                    <a
                      href="#"
                      class="aiz-side-nav-link"
                    >
                      <span class="aiz-side-nav-text">Bulk Export</span>
                    </a>
                  </li>
                  <li class="aiz-side-nav-item">
                    <a
                      href="<?=site_url('admins/item_options')?>"
                      class="aiz-side-nav-link"
                    >
                      <span class="aiz-side-nav-text">Unit Options</span>
                    </a>
                  </li>
                  <!-- <li class="aiz-side-nav-item">
                    <a
                      href=""
                      class="aiz-side-nav-link"
                    >
                      <span class="aiz-side-nav-text">Materials</span>
                    </a>
                  </li> -->
                  <li class="aiz-side-nav-item"> 
                    <a
                      href="<?=site_url('admins/categories')?>"
                      class="aiz-side-nav-link"
                    >
                      <span class="aiz-side-nav-text">Category</span>
                    </a>
                  </li>
                  <li class="aiz-side-nav-item">
                    <a
                      href="<?=site_url('admins/brands')?>"
                      class="aiz-side-nav-link"
                    >
                      <span class="aiz-side-nav-text">Brand</span>
                    </a>
                  </li>
                  <li class="aiz-side-nav-item">
                    <a
                      href="<?=site_url('admins/market_segments')?>"
                      class="aiz-side-nav-link"
                    >
                      <span class="aiz-side-nav-text">Market Segment</span>
                    </a>
                  </li>
                  <li class="aiz-side-nav-item">
                    <a
                      href="<?=site_url('admins/attributes')?>"
                      class="aiz-side-nav-link"
                    >
                      <span class="aiz-side-nav-text">Attribute</span>
                    </a>
                  </li>
                  <li class="aiz-side-nav-item">
                    <a
                      href="#"
                      class="aiz-side-nav-link"
                    >
                      <span class="aiz-side-nav-text">Colors</span>
                      
                    </a>
                  </li>
                  <li class="aiz-side-nav-item">
                    <a
                      href="#"
                      class="aiz-side-nav-link"
                    >
                      <span class="aiz-side-nav-text">Product Reviews</span> 
                      
                    </a>
                  </li>
                </ul>
              </li>
    
              <!-- Auction Product -->
    
              <!-- Wholesale Product -->
    
              <!-- Sale -->
              <li class="aiz-side-nav-item">
                <a href="#" class="aiz-side-nav-link">
                  <i class="las la-money-bill aiz-side-nav-icon"></i>
                  <span class="aiz-side-nav-text">Sales</span>
                  <span class="aiz-side-nav-arrow"></span>
                </a>
                <!--Submenu-->
                <ul class="aiz-side-nav-list level-2 mm-collapse">
                  <li class="aiz-side-nav-item">
                    <a
                      href="<?=site_url('admins/orders')?>"
                      class="aiz-side-nav-link"
                    >
                      <span class="aiz-side-nav-text">All Orders</span>
                    </a>
                  </li>
                  <li class="aiz-side-nav-item">
                    <a
                      href="#"
                      class="aiz-side-nav-link"
                    >
                      <span class="aiz-side-nav-text">Inhouse orders</span>
                    </a>
                  </li>
    
                  <li class="aiz-side-nav-item">
                    <a
                      href="#"
                      class="aiz-side-nav-link"
                    >
                      <span class="aiz-side-nav-text">Seller Orders</span>
                    </a>
                  </li>
    
                  <li class="aiz-side-nav-item">
                    <a
                      href="#"
                      class="aiz-side-nav-link"
                    >
                      <span class="aiz-side-nav-text">Pick-up Point Order</span>
                    </a>
                  </li>
                </ul>
              </li>
    
              <!-- Deliver Boy Addon-->
    
              <!-- Refund addon -->
    
              <!-- Customers -->
              <li class="aiz-side-nav-item">
                <a href="#" class="aiz-side-nav-link">
                  <i class="las la-user-friends aiz-side-nav-icon"></i>
                  <span class="aiz-side-nav-text">Customers</span>
                  <span class="aiz-side-nav-arrow"></span>
                </a>
                <ul class="aiz-side-nav-list level-2 mm-collapse">
                  <li class="aiz-side-nav-item">
                    <a
                      href="<?=site_url('admins/customers')?>"
                      class="aiz-side-nav-link"
                    >
                      <span class="aiz-side-nav-text">Customer list</span>
                    </a>
                  </li>
                </ul>
              </li>
    
              <!-- Sellers -->
              <!--<li class="aiz-side-nav-item">-->
              <!--  <a href="#" class="aiz-side-nav-link">-->
              <!--    <i class="las la-user aiz-side-nav-icon"></i>-->
              <!--    <span class="aiz-side-nav-text">Sellers</span>-->
              <!--    <span class="aiz-side-nav-arrow"></span>-->
              <!--  </a>-->
              <!--  <ul class="aiz-side-nav-list level-2 mm-collapse">-->
              <!--    <li class="aiz-side-nav-item">-->
              <!--      <a-->
              <!--        href="#"-->
              <!--        class="aiz-side-nav-link"-->
              <!--      >-->
              <!--        <span class="aiz-side-nav-text">All Seller</span>-->
              <!--      </a>-->
              <!--    </li>-->
              <!--    <li class="aiz-side-nav-item">-->
              <!--      <a-->
              <!--        href="#"-->
              <!--        class="aiz-side-nav-link"-->
              <!--      >-->
              <!--        <span class="aiz-side-nav-text">Payouts</span>-->
              <!--      </a>-->
              <!--    </li>-->
              <!--    <li class="aiz-side-nav-item">-->
              <!--      <a-->
              <!--        href="#"-->
              <!--        class="aiz-side-nav-link"-->
              <!--      >-->
              <!--        <span class="aiz-side-nav-text">Payout Requests</span>-->
              <!--      </a>-->
              <!--    </li>-->
              <!--    <li class="aiz-side-nav-item">-->
              <!--      <a-->
              <!--        href="#"-->
              <!--        class="aiz-side-nav-link"-->
              <!--      >-->
              <!--        <span class="aiz-side-nav-text">Seller Commission</span>-->
              <!--      </a>-->
              <!--    </li>-->
              <!--    <li class="aiz-side-nav-item">-->
              <!--      <a-->
              <!--        href="#"-->
              <!--        class="aiz-side-nav-link"-->
              <!--      >-->
              <!--        <span class="aiz-side-nav-text"-->
              <!--          >Seller Verification Form</span-->
              <!--        >-->
              <!--      </a>-->
              <!--    </li>-->
              <!--  </ul>-->
              <!--</li>-->
    
              <li class="aiz-side-nav-item">
                <a
                  href="<?=site_url('upload/upload-files')?>"
                  class="aiz-side-nav-link"
                >
                  <i class="las la-folder-open aiz-side-nav-icon"></i>
                  <span class="aiz-side-nav-text">Uploaded Files</span>
                </a>
              </li>
    
              <!-- Reports -->
              <li class="aiz-side-nav-item">
                <a
                  href="#"
                  class="aiz-side-nav-link "
                  aria-expanded="true"
                >
                  <i class="las la-file-alt aiz-side-nav-icon"></i>
                  <span class="aiz-side-nav-text">Reports</span>
                  <span class="aiz-side-nav-arrow"></span>
                </a>
                <ul class="aiz-side-nav-list level-2 mm-collapse">
                  <li class="aiz-side-nav-item">
                    <a
                      href="<?=site_url('admins/reports')?>"
                      class="aiz-side-nav-link"
                    >
                      <span class="aiz-side-nav-text">Product Sale</span>
                    </a>
                  </li>
                  <!--<li class="aiz-side-nav-item">-->
                  <!--  <a-->
                  <!--    href="#"-->
                  <!--    class="aiz-side-nav-link "-->
                  <!--    aria-expanded="true"-->
                  <!--  >-->
                  <!--    <span class="aiz-side-nav-text">Seller Products Sale</span>-->
                  <!--  </a>-->
                  <!--</li>-->
                  <li class="aiz-side-nav-item">
                    <a
                      href="<?=site_url('admins/reports/product_stocks')?>"
                      class="aiz-side-nav-link"
                    >
                      <span class="aiz-side-nav-text">Products Stock</span>
                    </a>
                  </li>
                  <li class="aiz-side-nav-item">
                    <a
                      href="#"
                      class="aiz-side-nav-link"
                    >
                      <span class="aiz-side-nav-text">Products wishlist</span>
                    </a>
                  </li>
                  <!--<li class="aiz-side-nav-item">-->
                  <!--  <a-->
                  <!--    href="#"-->
                  <!--    class="aiz-side-nav-link"-->
                  <!--  >-->
                  <!--    <span class="aiz-side-nav-text">User Searches</span>-->
                  <!--  </a>-->
                  <!--</li>-->
                  <!--<li class="aiz-side-nav-item">-->
                  <!--  <a-->
                  <!--    href="#"-->
                  <!--    class="aiz-side-nav-link"-->
                  <!--  >-->
                  <!--    <span class="aiz-side-nav-text">Commission History</span>-->
                  <!--  </a>-->
                  <!--</li>-->
                  <!--<li class="aiz-side-nav-item">-->
                  <!--  <a-->
                  <!--    href="#"-->
                  <!--    class="aiz-side-nav-link"-->
                  <!--  >-->
                  <!--    <span class="aiz-side-nav-text">Wallet Recharge History</span>-->
                  <!--  </a>-->
                  <!--</li>-->
                </ul>
              </li>
    
              <!--Blog System-->
              <li class="aiz-side-nav-item">
                <a href="#" class="aiz-side-nav-link">
                  <i class="las la-bullhorn aiz-side-nav-icon"></i>
                  <span class="aiz-side-nav-text">Blog System</span>
                  <span class="aiz-side-nav-arrow"></span>
                </a>
                <ul class="aiz-side-nav-list level-2 mm-collapse">
                  <li class="aiz-side-nav-item">
                    <a
                      href="#"
                      class="aiz-side-nav-link"
                    >
                      <span class="aiz-side-nav-text">All Posts</span>
                    </a>
                  </li>
                  <li class="aiz-side-nav-item">
                    <a
                      href="#"
                      class="aiz-side-nav-link"
                    >
                      <span class="aiz-side-nav-text">Categories</span>
                    </a>
                  </li>
                </ul>
              </li>
    
              <!-- marketing -->
              <li class="aiz-side-nav-item">
                <a href="#" class="aiz-side-nav-link">
                  <i class="las la-bullhorn aiz-side-nav-icon"></i>
                  <span class="aiz-side-nav-text">Marketing</span>
                  <span class="aiz-side-nav-arrow"></span>
                </a>
                <ul class="aiz-side-nav-list level-2 mm-collapse">
                  <li class="aiz-side-nav-item">
                    <a
                      href="<?=site_url('admins/marketings')?>"
                      class="aiz-side-nav-link"
                    >
                      <span class="aiz-side-nav-text">Flash deals</span>
                    </a>
                  </li>
                  <li class="aiz-side-nav-item">
                    <a
                      href="#"
                      class="aiz-side-nav-link"
                    >
                      <span class="aiz-side-nav-text">Newsletters</span>
                    </a>
                  </li>
                  <li class="aiz-side-nav-item">
                    <a
                      href="#"
                      class="aiz-side-nav-link"
                    >
                      <span class="aiz-side-nav-text">Subscribers</span>
                    </a>
                  </li>
                </ul>
              </li>
    
              <!-- Support -->
              <li class="aiz-side-nav-item">
                <a href="#" class="aiz-side-nav-link">
                  <i class="las la-link aiz-side-nav-icon"></i>
                  <span class="aiz-side-nav-text">Support</span>
                  <span class="aiz-side-nav-arrow"></span>
                </a>
                <ul class="aiz-side-nav-list level-2 mm-collapse">
                  <li class="aiz-side-nav-item">
                    <a
                      href="#"
                      class="aiz-side-nav-link"
                    >
                      <span class="aiz-side-nav-text">Ticket</span>
                    </a>
                  </li>
    
                  <li class="aiz-side-nav-item">
                    <a
                      href="#"
                      class="aiz-side-nav-link"
                    >
                      <span class="aiz-side-nav-text">Product Conversations</span>
                    </a>
                  </li>
                </ul>
              </li>
    
              <!-- Affiliate Addon -->
    
              <!-- Offline Payment Addon-->
    
              <!-- Paytm Addon -->
    
              <!-- Club Point Addon-->
    
              <!--OTP addon -->
    
              <!-- Website Setup -->
              <li class="aiz-side-nav-item">
                <a href="#" class="aiz-side-nav-link">
                  <i class="las la-desktop aiz-side-nav-icon"></i>
                  <span class="aiz-side-nav-text">Website Setup</span>
                  <span class="aiz-side-nav-arrow"></span>
                </a>
                <ul class="aiz-side-nav-list level-2 mm-collapse">
                  <li class="aiz-side-nav-item">
                    <a
                      href="<?=site_url('admins/web_setup/general')?>"
                      class="aiz-side-nav-link"
                    >
                      <span class="aiz-side-nav-text">General</span>
                    </a>
                  </li>
                  <li class="aiz-side-nav-item">
                    <a
                      href="<?=site_url('admins/web_setup/home')?>"
                      class="aiz-side-nav-link"
                    >
                      <span class="aiz-side-nav-text">Home Page</span>
                    </a>
                  </li>
                  
                  <!-- <li class="aiz-side-nav-item">
                    <a
                      href="#"
                      class="aiz-side-nav-link"
                    >
                      <span class="aiz-side-nav-text">Header</span>
                    </a>
                  </li>
                  <li class="aiz-side-nav-item">
                    <a
                      href="#"
                      class="aiz-side-nav-link"
                    >
                      <span class="aiz-side-nav-text">Footer</span>
                    </a>
                  </li>
                  <li class="aiz-side-nav-item">
                    <a
                      href="#"
                      class="aiz-side-nav-link"
                    >
                      <span class="aiz-side-nav-text">Pages</span>
                    </a>
                  </li>
                  <li class="aiz-side-nav-item">
                    <a
                      href="#"
                      class="aiz-side-nav-link"
                    >
                      <span class="aiz-side-nav-text">Appearance</span>
                    </a>
                  </li> -->
                </ul>
              </li>
    
              <!-- Setup & Configurations -->
              <li class="aiz-side-nav-item">
                <a href="#" class="aiz-side-nav-link">
                  <i class="las la-dharmachakra aiz-side-nav-icon"></i>
                  <span class="aiz-side-nav-text">Setup &amp; Configurations</span>
                  <span class="aiz-side-nav-arrow"></span>
                </a>
                <ul class="aiz-side-nav-list level-2 mm-collapse">
                  <li class="aiz-side-nav-item">
                    <a
                      href="#"
                      class="aiz-side-nav-link"
                    >
                      <span class="aiz-side-nav-text">General Settings</span>
                    </a>
                  </li>
                  <li class="aiz-side-nav-item">
                    <a
                      href="#"
                      class="aiz-side-nav-link"
                    >
                      <span class="aiz-side-nav-text">Features activation</span>
                    </a>
                  </li>
                  <li class="aiz-side-nav-item">
                    <a
                      href="#"
                      class="aiz-side-nav-link"
                    >
                      <span class="aiz-side-nav-text">Languages</span>
                    </a>
                  </li>
                  <li class="aiz-side-nav-item">
                    <a
                      href="#"
                      class="aiz-side-nav-link"
                    >
                      <span class="aiz-side-nav-text">Currency</span>
                    </a>
                  </li>
                  <li class="aiz-side-nav-item">
                    <a
                      href="#"
                      class="aiz-side-nav-link"
                    >
                      <span class="aiz-side-nav-text">Vat &amp; TAX</span>
                    </a>
                  </li>
                  <li class="aiz-side-nav-item">
                    <a
                      href="#"
                      class="aiz-side-nav-link"
                    >
                      <span class="aiz-side-nav-text">Pickup point</span>
                    </a>
                  </li>
                  <li class="aiz-side-nav-item">
                    <a
                      href="#"
                      class="aiz-side-nav-link"
                    >
                      <span class="aiz-side-nav-text">SMTP Settings</span>
                    </a>
                  </li>
                  <li class="aiz-side-nav-item">
                    <a
                      href="#"
                      class="aiz-side-nav-link"
                    >
                      <span class="aiz-side-nav-text">Payment Methods</span>
                    </a>
                  </li>
                  <li class="aiz-side-nav-item">
                    <a
                      href="#"
                      class="aiz-side-nav-link"
                    >
                      <span class="aiz-side-nav-text">Order Configuration</span>
                    </a>
                  </li>
                  <li class="aiz-side-nav-item">
                    <a
                      href="#"
                      class="aiz-side-nav-link"
                    >
                      <span class="aiz-side-nav-text"
                        >File System &amp; Cache Configuration</span
                      >
                    </a>
                  </li>
                  <li class="aiz-side-nav-item">
                    <a
                      href="#"
                      class="aiz-side-nav-link"
                    >
                      <span class="aiz-side-nav-text">Social media Logins</span>
                    </a>
                  </li>
                  <li class="aiz-side-nav-item">
                    <a href="javascript:void(0);" class="aiz-side-nav-link">
                      <span class="aiz-side-nav-text">Facebook</span>
                      <span class="aiz-side-nav-arrow"></span>
                    </a>
                    <ul class="aiz-side-nav-list level-3 mm-collapse">
                      <li class="aiz-side-nav-item">
                        <a
                          href="#"
                          class="aiz-side-nav-link"
                        >
                          <span class="aiz-side-nav-text">Facebook Chat</span>
                        </a>
                      </li>
                      <li class="aiz-side-nav-item">
                        <a
                          href="#"
                          class="aiz-side-nav-link"
                        >
                          <span class="aiz-side-nav-text">Facebook Comment</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="aiz-side-nav-item">
                    <a href="javascript:void(0);" class="aiz-side-nav-link">
                      <span class="aiz-side-nav-text">Google</span>
                      <span class="aiz-side-nav-arrow"></span>
                    </a>
                    <ul class="aiz-side-nav-list level-3 mm-collapse">
                      <li class="aiz-side-nav-item">
                        <a
                          href="#"
                          class="aiz-side-nav-link"
                        >
                          <span class="aiz-side-nav-text">Analytics Tools</span>
                        </a>
                      </li>
                      <li class="aiz-side-nav-item">
                        <a
                          href="#"
                          class="aiz-side-nav-link"
                        >
                          <span class="aiz-side-nav-text">Google reCAPTCHA</span>
                        </a>
                      </li>
                      <li class="aiz-side-nav-item">
                        <a
                          href="#"
                          class="aiz-side-nav-link"
                        >
                          <span class="aiz-side-nav-text">Google Map</span>
                        </a>
                      </li>
                      <li class="aiz-side-nav-item">
                        <a
                          href="#"
                          class="aiz-side-nav-link"
                        >
                          <span class="aiz-side-nav-text">Google Firebase</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="aiz-side-nav-item">
                    <a href="javascript:void(0);" class="aiz-side-nav-link">
                      <span class="aiz-side-nav-text">Shipping</span>
                      <span class="aiz-side-nav-arrow"></span>
                    </a>
                    <ul class="aiz-side-nav-list level-3 mm-collapse">
                      <li class="aiz-side-nav-item">
                        <a
                          href="<?=site_url('admins/shippings/configuration')?>"
                          class="aiz-side-nav-link"
                        >
                          <span class="aiz-side-nav-text"
                            >Shipping Configuration</span
                          >
                        </a>
                      </li>
                      <li class="aiz-side-nav-item">
                        <a
                          href="<?=site_url('admins/shippings/countries')?>"
                          class="aiz-side-nav-link"
                        >
                          <span class="aiz-side-nav-text">Shipping Countries</span>
                        </a>
                      </li>
                      <li class="aiz-side-nav-item">
                        <a 
                          href="<?=site_url('admins/shippings/states')?>"
                          class="aiz-side-nav-link"
                        >
                          <span class="aiz-side-nav-text">Shipping States</span>
                        </a>
                      </li>
                      <li class="aiz-side-nav-item">
                        <a
                          href="<?=site_url('admins/shippings/cities')?>"
                          class="aiz-side-nav-link"
                        >
                          <span class="aiz-side-nav-text">Shipping Cities</span>
                        </a>
                      </li>
                      <li class="aiz-side-nav-item">
                        <a
                          href="#"
                          class="aiz-side-nav-link"
                        >
                          <span class="aiz-side-nav-text">Shipping Zones</span>
                        </a>
                      </li>
                      <li class="aiz-side-nav-item">
                        <a
                          href="#"
                          class="aiz-side-nav-link"
                        >
                          <span class="aiz-side-nav-text">Shipping Carrier</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
    
              <!-- Staffs -->
              <li class="aiz-side-nav-item">
                <a href="#" class="aiz-side-nav-link">
                  <i class="las la-user-tie aiz-side-nav-icon"></i>
                  <span class="aiz-side-nav-text">Staffs</span>
                  <span class="aiz-side-nav-arrow"></span>
                </a>
                <ul class="aiz-side-nav-list level-2 mm-collapse">
                  <li class="aiz-side-nav-item">
                    <a
                      href="#"
                      class="aiz-side-nav-link"
                    >
                      <span class="aiz-side-nav-text">All staffs</span>
                    </a>
                  </li>
                  <li class="aiz-side-nav-item">
                    <a
                      href="#"
                      class="aiz-side-nav-link"
                    >
                      <span class="aiz-side-nav-text">Staff permissions</span>
                    </a>
                  </li>
                </ul>
              </li>
    
              <!--<li class="aiz-side-nav-item ">-->
              <!--  <a href="#" class="aiz-side-nav-link">-->
              <!--    <i class="las la-user-tie aiz-side-nav-icon"></i>-->
              <!--    <span class="aiz-side-nav-text">System</span>-->
              <!--    <span class="aiz-side-nav-arrow"></span>-->
              <!--  </a>-->
              <!--  <ul class="aiz-side-nav-list level-2 mm-collapse">-->
              <!--    <li class="aiz-side-nav-item">-->
              <!--      <a-->
              <!--        href="#"-->
              <!--        class="aiz-side-nav-link"-->
              <!--      >-->
              <!--        <span class="aiz-side-nav-text">Update</span>-->
              <!--      </a>-->
              <!--    </li>-->
              <!--    <li class="aiz-side-nav-item">-->
              <!--      <a-->
              <!--        href="#"-->
              <!--        class="aiz-side-nav-link"-->
              <!--      >-->
              <!--        <span class="aiz-side-nav-text">Server status</span>-->
              <!--      </a>-->
              <!--    </li>-->
              <!--  </ul>-->
              <!--</li>-->
    
              <!-- Addon Manager -->
              <!--<li class="aiz-side-nav-item d-none">-->
              <!--  <a-->
              <!--    href="#"-->
              <!--    class="aiz-side-nav-link"-->
              <!--  >-->
              <!--    <i class="las la-wrench aiz-side-nav-icon"></i>-->
              <!--    <span class="aiz-side-nav-text">Addon Manager</span>-->
              <!--  </a>-->
              <!--</li>-->
            </ul>
            <!-- .aiz-side-nav -->
          </div>
          <!-- .aiz-side-nav-wrap -->
        </div>
        <!-- .aiz-sidebar -->
        <div class="aiz-sidebar-overlay"></div>
      </div>
      <!-- .aiz-sidebar -->
      <div class="aiz-content-wrapper">
        <div
          class="aiz-topbar px-15px px-lg-25px d-flex align-items-stretch justify-content-between"
        >
          <div class="d-flex">
            <div
              class="aiz-topbar-nav-toggler d-flex align-items-center justify-content-start mr-2 mr-md-3 ml-0"
              data-toggle="aiz-mobile-nav"
            >
              <button class="aiz-mobile-toggler">
                <span></span>
              </button>
            </div>
          </div>
          <div
            class="d-flex justify-content-between align-items-stretch flex-grow-xl-1"
          >
            <div
              class="d-flex justify-content-around align-items-center align-items-stretch"
            >
              <div
                class="d-flex justify-content-around align-items-center align-items-stretch"
              >
                <div class="aiz-topbar-item">
                  <div class="d-flex align-items-center">
                    <a
                      class="btn btn-icon btn-circle btn-light"
                      href="#"
                      target="_blank"
                      title="Browse Website"
                    >
                      <i class="las la-globe"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div
                class="d-flex justify-content-around align-items-center align-items-stretch ml-3"
              >
                <div class="aiz-topbar-item">
                  <div class="d-flex align-items-center">
                    <a id="clear_cache"
                      class="btn btn-soft-danger btn-sm d-flex align-items-center"
                      href="#"
                    >
                      <i class="las la-hdd fs-20"></i>
                      <span class="fw-500 ml-1 mr-0 d-none d-md-block"
                        >Clear Cache</span
                      >
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="d-flex justify-content-around align-items-center align-items-stretch"
            >
              <div class="aiz-topbar-item ml-2">
                <div class="align-items-stretch d-flex dropdown">
                  <a
                    class="dropdown-toggle no-arrow"
                    data-toggle="dropdown"
                    href="javascript:void(0);"
                    role="button"
                    aria-haspopup="false"
                    aria-expanded="false"
                  >
                    <span
                      class="btn btn-icon p-0 d-flex justify-content-center align-items-center"
                    >
                      <span class="d-flex align-items-center position-relative">
                        <i class="las la-bell fs-24"></i>
                      </span>
                    </span>
                  </a>
                  <div
                    class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-menu-lg py-0"
                  >
                    <div class="p-3 bg-light border-bottom">
                      <h6 class="mb-0">Notifications</h6>
                    </div>
                    <div
                      class="px-3 c-scrollbar-light overflow-auto"
                      style="max-height: 300px"
                    >
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                          <div class="py-4 text-center fs-16">
                            No notification found
                          </div>
                        </li>
                      </ul>
                    </div>
                    <div class="text-center border-top">
                      <a
                        href="#"
                        class="text-reset d-block py-2"
                      >
                        View All Notifications
                      </a>
                    </div>
                  </div>
                </div>
              </div>
    
              <div class="aiz-topbar-item ml-2">
                <div class="align-items-stretch d-flex dropdown" id="lang-change">
                  <a
                    class="dropdown-toggle no-arrow"
                    data-toggle="dropdown"
                    href="javascript:void(0);"
                    role="button"
                    aria-haspopup="false"
                    aria-expanded="false"
                  >
                    <span class="btn btn-icon">
                      <img
                        src="<?=base_url('assets/img/flags/en.png')?>"
                        height="11"
                      />
                    </span>
                  </a>
                  <ul
                    class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-menu-xs"
                  >
                    <li>
                      <a
                        href="javascript:void(0)"
                        data-flag="en"
                        class="dropdown-item active"
                      >
                        <img
                          src="<?=base_url('assets/img/flags/en.png')?>"
                          class="mr-2"
                        />
                        <span class="language">English</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
    
              <div class="aiz-topbar-item ml-2">
                <div class="align-items-stretch d-flex dropdown">
                  <a
                    class="dropdown-toggle no-arrow text-dark"
                    data-toggle="dropdown"
                    href="javascript:void(0);"
                    role="button"
                    aria-haspopup="false"
                    aria-expanded="false"
                  >
                    <span class="d-flex align-items-center">
                      <span class="avatar avatar-sm mr-md-2">
                        <img
                          src="<?=base_url('assets/img/placeholder.jpg')?>"
                          onerror="this.onerror=null;this.src='<?=base_url('assets/img/avatar-place.png')?>';"
                        />
                      </span>
                      <span class="d-none d-md-block">
                        <span class="d-block fw-500">admin</span>
                        <span class="d-block small opacity-60">admin</span>
                      </span>
                    </span>
                  </a>
                  <div
                    class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-menu-md"
                  >
                    <a
                      href="#"
                      class="dropdown-item"
                    >
                      <i class="las la-user-circle"></i>
                      <span>Profile</span>
                    </a>
    
                    <a
                      href="<?=site_url('login/admin_logout')?>"
                      class="dropdown-item"
                    >
                      <i class="las la-sign-out-alt"></i>
                      <span>Logout</span>
                    </a>
                  </div>
                </div>
              </div>
              <!-- .aiz-topbar-item -->
            </div>
          </div>
        </div>
        <!-- .aiz-topbar -->
        <div class="aiz-main-content">
          <?=$contents?>
        <!-- .aiz-main-content -->
        </div>
      <!-- .aiz-content-wrapper -->
    </div>
   
<script>
    $(document).ready(function(){
      $('a#clear_cache').on('click',function(){
        sessionStorage.clear();
        location.reload(true)
      })
          // Displaying the message using AIZ.plugins.notify
         <?php foreach ($this->session->flashdata() as $message) { ?>
          AIZ.plugins.notify("<?= $message['level'] ?>", "<?= $message['message'] ?>");
        <?php } ?>
        let noLink=$('.aiz-side-nav-list .aiz-side-nav-link')
        $('.mm-collapse').children('.aiz-side-nav-item').children('.aiz-side-nav-link').each(function(index, element) {
            if($(element).attr('href')==='#'){
                $(element).append('<span class="badge text-warning">Pending</span>')
            }
            
        });
        
    })
</script>
  </body>
</html>
