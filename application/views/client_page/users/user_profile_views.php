<div class="card my-4 mx-auto py-5 shadow-sm border w-2/6">
    <div class="card-body">
        <div class="user_profile_img_container rounded-circle w-max m-auto">
<?php if(!$USER->avatar) { ?>
            <img class="img-fluid rouded-circle" src="<?=base_url('assets_system/icons/user_default.svg')?>" alt="User Profile"  width='60px' />
<?php } else{ ?>
            <img class="img-fluid rouded-circle" src="<?=$USER->avatar?>" alt="User Profile"  width='60px' />
<?php } ?>
        </div>
        <h6 class="text-center mt-2 mb-0 h5"><?=$USER->name?></h6>
        <a href="" class="text-500 text-center text-decoration-none text-center block m-0" style="color:black">Edit profile picture</a>
        <div class="w-max m-auto">
            <a href="#" class="text-decoration-none w-max my-4 d-flex align-items-center">
                <img class="img-fluid rouded-circle" src="<?=base_url('assets_system/icons/user-circle_outline.svg')?>" alt="User Profile" width="25px" />
                <span class="text-500" style="color:black">&nbsp;Personal Profile</span>
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