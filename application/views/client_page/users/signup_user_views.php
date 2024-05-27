<div class="w-[564px] my-16 m-auto ">  
    <div class="grid grid-cols-2 bg-gray-100 rounded-lg">
        <a href="<?=site_url('login')?>" class="btn tab btn rounded-lg py-5 font-semibold">Login In</a>
        <a  class="btn py-5 font-semibold  bg-white  border border-secondary" >Sign Up</a>
    </div>
    <div>
        <div class="card bg-base-100 shadow-xl">
            <div class="card-body">
                <div class="form px-4 py-3 px-2">
                    <div class="wrapper text-center pb-3 my-3">
                        <h3 class="mb-5 text-[32px] font-semibold">Create an account</h3>
                        <div class="text-base flex flex-col space-y-3">
                            <p>We never save credit card information. </p>
                            <p class="">
                                Registering makes checkout fast and easy and saves your order information in your account.
                            </p>
                        </div>
                        <div class="my-3">
                            <p>or</p>
                            <div class=" mt-3 relative">
                               <div class="flex justify-center space-x-10 w-max m-auto bg-white">
                                    <div class="bg-white p-3 rounded-lg shadow-lg z-10">
                                        <img src="<?=base_url('assets/images/signup-google.png')?>"  alt="" srcset="">
                                    </div>
                                    <div class="bg-white p-3 rounded-lg shadow-lg z-10">
                                        <img src="<?=base_url('assets/images/signup-linkedin.png')?>"  alt="" srcset="">
                                    </div>
                                    <div class="bg-white p-3 rounded-lg shadow-lg z-10">
                                        <img src="<?=base_url('assets/images/signup-facebook.png')?>"  alt="" srcset="">
                                    </div>
                                    
                               </div>
                                <hr class="h-1 top-1/2 w-full absolute translate-y-1/2">
                            </div>
                        </div>
                    </div>
                    <?php echo form_open('users/create') ?>
                    <div class="flex flex-col space-y-3">
                    <div class="grid grid-cols-2 space-x-3">
                        <div>
                            <p class="after:content-['*'] after:text-red-500">First Name</p>
                            <label class="input input-bordered flex items-center gap-2">
                                <input type="text" name="first_name" class="h-[56px] bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-blue-500 block w-full " placeholder="First Name" required />
                            </label>
                        </div>
                        <div>
                            <p class="after:content-['*'] after:text-red-500">Last Name</p>
                            <label class="input input-bordered flex items-center gap-2">
                            <input type="text" name="last_name" class="h-[56px] bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-blue-500 block w-full " placeholder="Last Name" required />
                            </label>
                        </div>
                    </div>
                    <div>
                        <p class="after:content-['*'] after:text-red-500">Email</p>
                        <div class="relative w-full">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 opacity-70"><path d="M2.5 3A1.5 1.5 0 0 0 1 4.5v.793c.026.009.051.02.076.032L7.674 8.51c.206.1.446.1.652 0l6.598-3.185A.755.755 0 0 1 15 5.293V4.5A1.5 1.5 0 0 0 13.5 3h-11Z" /><path d="M15 6.954 8.978 9.86a2.25 2.25 0 0 1-1.956 0L1 6.954V11.5A1.5 1.5 0 0 0 2.5 13h11a1.5 1.5 0 0 0 1.5-1.5V6.954Z" /></svg>
                            </div>
                            <input type="text" name="email"  class="h-[56px] bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-blue-500 block w-full ps-10 p-2.5" placeholder="Email" required />
                        </div>
                    </div>
                    <div>
                        <p class="after:content-['*'] after:text-red-500">Password</p>
                        <div class="relative w-full">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 opacity-70"><path fill-rule="evenodd" d="M14 6a4 4 0 0 1-4.899 3.899l-1.955 1.955a.5.5 0 0 1-.353.146H5v1.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2.293a.5.5 0 0 1 .146-.353l3.955-3.955A4 4 0 1 1 14 6Zm-4-2a.75.75 0 0 0 0 1.5.5.5 0 0 1 .5.5.75.75 0 0 0 1.5 0 2 2 0 0 0-2-2Z" clip-rule="evenodd" /></svg>
                            </div>
                            <input type="password" id="res_password" name="password" class="h-[56px] bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-blue-500 block w-full ps-10 p-2.5" placeholder="Password" required />
                        </div>
                    </div>
                    <div class="mt-3 grid grid-cols-2 gap-3 text-sm">
                        <label class="flex items-center space-x-2">
                            <input type="checkbox" id="min_val" checked disabled  class="validate rounded-full text-secondary" />
                            <span>8 character minimum</span>
                        </label>
                        <label class="flex items-center space-x-2">
                            <input type="checkbox" id="one_upper_c" checked disabled class="validate rounded-full text-secondary" />
                            <span>one uppercase character</span>
                        </label>
                        <label class="flex items-center space-x-2">
                            <input type="checkbox" id="one_lower_c" checked disabled class="validate rounded-full text-secondary" />
                            <span>one lowercase character</span>
                        </label>
                        <!-- <label class="flex items-center space-x-2">
                            <input type="checkbox" checked disabled class="appearance-none bg-secondary after:checked:content-[url('./assets/icons/check_mark-sm.svg')] after:w-max after:m-auto after:mb-2   after:block w-5 rounded-full h-5 border  checked:text-white " />
                            <span>one special character</span>
                        </label> -->
                        <label class="flex items-center space-x-2">
                            <input type="checkbox" id="one_num" checked disabled class="validate rounded-full text-secondary" />
                            <span>one number</span>
                        </label>
                        <label class="flex items-center space-x-2">
                            <input type="checkbox" id="c_match" checked disabled class="validate rounded-full text-secondary" />
                            <span>confirm password</span>
                        </label>
                    </div>
                    <div>
                        <p class="after:content-['*'] after:text-red-500">Confirm Password</p>
                        <div class="relative w-full">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 opacity-70"><path fill-rule="evenodd" d="M14 6a4 4 0 0 1-4.899 3.899l-1.955 1.955a.5.5 0 0 1-.353.146H5v1.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2.293a.5.5 0 0 1 .146-.353l3.955-3.955A4 4 0 1 1 14 6Zm-4-2a.75.75 0 0 0 0 1.5.5.5 0 0 1 .5.5.75.75 0 0 0 1.5 0 2 2 0 0 0-2-2Z" clip-rule="evenodd" /></svg>
                            </div>
                            <input type="password" id="c_password" name="confirm_password" class="h-[56px] bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-blue-500 block w-full ps-10 p-2.5" placeholder="Confirm Password" required />
                        </div>
                    </div>
                    </div>

                    <div class="mt-3">
                        <label class="flex items-center space-x-3">
                            <input type="checkbox" name="" class="agreement text-primary" id="home_term_condition">
                            <span>I agree to the Terms of Use and Privacy Policy</span>
                        </label>
                    </div>
                    <div class="mt-3">
                        <label class="flex items-start space-x-3">
                            <input type="checkbox" name="" class="agreement text-primary" id="home_order_update">
                            <span>I agree to receive SMS notifications related to my orders, promotions, and other updates. SMS Notification Policy</span>
                        </label>
                    </div>
                    <div class="w-full mt-3">
                        <button id="register_btn" type="submit" disabled class="disabled:cursor-not-allowed w-full text-xl font-semibold p-5 rounded-lg border border-secondary">Register</button>
                    </div>

                    <?php echo form_close() ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const pass = document.getElementById('myPass');
    const revealButton = document.getElementById('reveal-pass');
    const eyeImage = document.getElementById('eye');

    if (revealButton) {
        revealButton.addEventListener('click', function(event) {
            event.preventDefault(); // Prevent the default behavior (e.g., form submission)

            if (pass.type === 'password') {
                pass.type = 'text';
                eyeImage.src = '<?php echo base_url('assets_system/images/tpr_images/eye-solid.svg') ?>';
                eyeImage.style.opacity = '1';
                revealButton.title = 'Hide password';
            } else {
                pass.type = 'password';
                eyeImage.src = '<?php echo base_url('assets_system/images/tpr_images/eye-slash-solid.svg') ?>';
                eyeImage.style.opacity = '.3';
                revealButton.title = 'Reveal password';
            }
        });

        revealButton.title = 'Show Password';
    }
</script>



<script>
    $(document).ready(function() {
        let is_valid = false;
        let is_valid_pass=false;
        // Activate tab switching
        $('#pills-tab a').click(function(e) {
            e.preventDefault();
            $(this).tab('show');
        });
        $('input#res_password').on('input', function() {
            let value = $(this).val();
            if(value==''){
                $('input.validate').removeClass('checked:bg-primary');
                validate_info();
                return;
            }
            let pass_con = $('input#c_password').val();
            if (pass_con === value) {
                is_valid = true
                $('input#c_match').addClass('checked:bg-primary')
            } else {
                is_valid = false
                $('input#c_match').removeClass('checked:bg-primary')
                validate_info();
            }
            if (value.length >= 8) {
                is_valid = true;
                $('input#min_val').addClass('checked:bg-primary')
            } else {
                is_valid = false;
                $('input#min_val').removeClass('checked:bg-primary')
                validate_info();
            }
            if (/[a-z]/.test(value)) {
                is_valid = true;
                $('input#one_lower_c').addClass('checked:bg-primary')
            } else {
                is_valid = false;
                $('input#one_lower_c').removeClass('checked:bg-primary')
                validate_info();
            }
            if (/[A-Z]/.test(value)) {
                is_valid = true;
                $('input#one_upper_c').addClass('checked:bg-primary')
            } else {
                is_valid = false
                $('input#one_upper_c').removeClass('checked:bg-primary')
                validate_info();
            }
            if (/[0-9]/.test(value)) {
                is_valid = true;
                $('input#one_num').addClass('checked:bg-primary')
            } else {
                is_valid = false;
                $('input#one_num').removeClass('checked:bg-primary')
                validate_info();
            }
            
        })
        $('input#c_password').on('input', function() {
            let password = $('input#res_password').val();
            if(password==''){
                return;
            }
            let c_password = $(this).val();
            if (c_password === password) {
                is_valid = true
                $('input#c_match').addClass('checked:bg-primary')
            } else {
                is_valid = false
                $('input#c_match').removeClass('checked:bg-primary')
            }
            validate_info();
        })
        $('.agreement').on('change', function() {
            validate_info();
        })

        function validate_info() {
            console.log(is_valid)
            let is_agreed = false;
            let terms_con = $('input#home_term_condition').prop('checked');
            let order_update = $('input#home_order_update').prop('checked');
            if (terms_con === true && order_update === true) {
                is_agreed = true;
            }

            if (is_valid && is_agreed) {
                $('button#register_btn').prop('disabled', false);
            } else {
                $('button#register_btn').prop('disabled', true);
            }
        }
    });
</script>

<!-- Password reveal -->





<!-- MDB -->
<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"></script> -->