<style>
    .or-sign {
        height: 40px;
        width: 100px;
        background-color: #fff;
        display: flex;
        justify-content: center;
        align-items: center;

        overflow: hidden;
    }

    .or-wrapper {
        margin-bottom: -30px;
    }

    .reg-btn {
        border-radius: 12px;
        font-weight: bold;
        letter-spacing: 3px;
    }

    .reg-btn:hover {
        color: #fff;
        background-color: #335DFF;
        border: none;
    }

    .form-group input[type="text"] {
        height: 56px;
        border-radius: 8px;
        border: 2px solid #000;
    }

    .form-group input::placeholder {
        opacity: .3;
    }
</style>

<div class="container m-5  justify-content-center align-items-center">
    <div class="row d-flex justify-content-center align-items-center w-100">
        <div class="d-flex justify-content-center align-items-center mt-2">
            <div class="d-flex justify-content-center align-items-center m-5">

                <div class="card" style="width: 564px; border-radius: 24px;  box-shadow: 0px 8px 19px 0px rgba(0, 0, 0, 0.1), 0px 10px 16px -3px rgba(0, 0, 0, 0.1);">
                    <div class="wrapper p-3 ">
                        <div class="header text-center">
                            <h3 class="my-5" style="font-size: 2rem;">Log in</h3>

                            <p class="px-4">
                                Enter an <strong>email address</strong> or a phone number and we will send you the 6-digit OTP code.
                            </p>

                        </div>

                        <div class="form">
                            <div class="form-group my-5 px-3">
                                <label for="" class="col-from-label pb-2">Email <span style="color: red;"> *</span></label>
                                <input type="text" class="form-control" placeholder="Enter your email" require>
                            </div>

                            <div class="mx-auto" style="width: 150px; background-color: #fff; position: relative; margin-bottom: -30px; z-index: 111;">
                                <div class="or-wrapper d-flex justify-content-center">
                                    <strong>or</strong>
                                </div>
                            </div>
                            <hr class="px-4" style="z-index: -11;">





                            <div class="form-group my-5 px-3">
                                <label for="" class="col-from-label pb-2">Phone number <span style="color: red;"> *</span></label>
                                <input type="text" class="form-control" placeholder="Enter your phone number" require>
                            </div>

                            <div class="d-grid my-5 px-3">
                                <a class="btn reg-btn  btn-light border py-3" href="<?php echo base_url('forgot_password/otp'); ?>">
                                    <strong>Register</strong>
                                </a>
                            </div>
                        </div>





                    </div>


                </div>
            </div>
        </div>
    </div>
</div>