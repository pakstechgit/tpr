<!DOCTYPE html>
<html style="height:100%" lang="en">
<?php $this->load->view('templates/head_template') ?>
<body style="height:100%">
    <div class="flex-grow-1">

        <div class="h-100 bg-cover bg-center py-5 d-flex align-items-center"
            style="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-xl-4 p-0 mx-auto">
                        <div class="card text-left shadow-lg w-100">
                            <div class="card-body">
                                <div class="mb-5 text-center">
                                    <img src="<?= base_url("assets_system/images/tpr_images/tpr_logo_blue.png") ?>"
                                        class="mw-100 mb-4" height="40" width="40">
                                    <h1 class="h3 text-primary mb-0">Welcome to TPR Ecommerce</h1>
                                    <p>Login to your account.</p>
                                </div>
                                <?php echo form_open('login/login_user') ?>
                                    <div class="form-group">
                                        <input id="email" type="email" class="form-control" name="email" value="" required
                                            autofocus placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <input id="password" type="password" class="form-control" name="password" required
                                            placeholder="Password">
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-sm-6">
                                            <div class="text-left">
                                                <label class="aiz-checkbox">
                                                    <input type="checkbox" name="remember" id="remember">
                                                    <span>Remember Me</span>
                                                    <span class="aiz-square-check"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                                        Login
                                    </button>
                                <?php echo form_close() ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?=base_url('assets/js/vendors.js')?>"></script>
    <script src="<?=base_url('assets/js/aiz-core.js')?>"></script>
</body>
</html>