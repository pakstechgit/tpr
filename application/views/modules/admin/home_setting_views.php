<div class="px-15px px-lg-25px">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h6 class="fw-600 mb-0">Home Banners</h6>
                </div>
                <div class="card-body">
                    <?php echo form_open('admins/web_setup/update_home_settings')  ?>
                        <div class="form-group row gutter-5">
                            <div class="col-md-4">
                                <input type="text" class="form-control " value="Banner Image 1" disabled />
                            </div>
                            <div class="col-md-8">
                                <div class="mb-3">
                                    <div class="input-group " data-toggle="aizuploader" data-type="image">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text bg-soft-secondary">Browse</div>
                                        </div>
                                        <div class="form-control file-amount">Choose File</div>
                                        <input type="hidden" name="type" value="home_banners">
                                        <input type="hidden" name="value[0][image]" value="<?=$HOME_BANNERS[0]->image?>" class="selected-files">
                                    </div>
                                    <div class="file-preview box"></div>
                                </div>
                                <div>
                                    <input type="text" class="form-control" name="value[0][slogan]" placeholder="Slogan" value="<?=$HOME_BANNERS[0]->slogan?>" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group row gutter-5">
                            <div class="col-md-4">
                                <input type="text" class="form-control " value="Banner Image 2" disabled />
                            </div>
                            <div class="col-md-8">
                                <div class="mb-3">
                                    <div class="input-group " data-toggle="aizuploader" data-type="image">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text bg-soft-secondary">Browse</div>
                                        </div>
                                        <div class="form-control file-amount">Choose File</div>
                                        <input type="hidden" name="type" value="home_banners">
                                        <input type="hidden" name="value[1][image]" value="<?=$HOME_BANNERS[1]->image?>" class="selected-files">
                                    </div>
                                    <div class="file-preview box"></div>
                                </div>
                                <div>
                                    <input type="text" class="form-control" name="value[1][slogan]" placeholder="Slogan" value="<?=$HOME_BANNERS[1]->slogan?>" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group row gutter-5">
                            <div class="col-md-4">
                                <input type="text" class="form-control " value="Banner Image 3" disabled />
                            </div>
                            <div class="col-md-8">
                                <div class="mb-3">
                                    <div class="input-group " data-toggle="aizuploader" data-type="image">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text bg-soft-secondary">Browse</div>
                                        </div>
                                        <div class="form-control file-amount">Choose File</div>
                                        <input type="hidden" name="type" value="home_banners">
                                        <input type="hidden" name="value[2][image]" value="<?=$HOME_BANNERS[2]->image?>" class="selected-files">
                                    </div>
                                    <div class="file-preview box"></div>
                                </div>
                                <div>
                                    <input type="text" class="form-control" name="value[2][slogan]" placeholder="Slogan" value="<?=$HOME_BANNERS[2]->slogan?>" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group row gutter-5">
                            <div class="col-md-4">
                                <input type="text" class="form-control " value="Banner Image 4" disabled />
                            </div>
                            <div class="col-md-8">
                                <div class="mb-3">
                                    <div class="input-group " data-toggle="aizuploader" data-type="image">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text bg-soft-secondary">Browse</div>
                                        </div>
                                        <div class="form-control file-amount">Choose File</div>
                                        <input type="hidden" name="type" value="home_banners">
                                        <input type="hidden" name="value[3][image]" value="<?=$HOME_BANNERS[3]->image?>" class="selected-files">
                                    </div>
                                    <div class="file-preview box"></div>
                                </div>
                                <div>
                                    <input type="text" class="form-control" name="value[3][slogan]" placeholder="Slogan" value="<?=$HOME_BANNERS[3]->slogan?>" />
                                </div>
                            </div>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    <?php echo form_close() ?>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h6 class="fw-600 mb-0">Physician Care Section</h6>
                </div>
                <div class="card-body">
                    <?php echo form_open('admins/web_setup/update_home_settings')  ?>
                        <div class="form-group row gutter-5">
                            <div class="col-md-4">
                                <input type="text" class="form-control " value="Cover Image" disabled />
                            </div>
                            <div class="col-md-8">
                                <div class="mb-3">
                                    <div class="input-group " data-toggle="aizuploader" data-type="image">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text bg-soft-secondary">Browse</div>
                                        </div>
                                        <div class="form-control file-amount">Choose File</div>
                                        <input type="hidden" name="type" value="home_physician_care">
                                        <input type="hidden" name="value[cover_image]" value="<?=$HOME_PHYSICIAN_CARE->cover_image?>" class="selected-files">
                                    </div>
                                    <div class="file-preview box"></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row gutter-5">
                            <div class="col-md-4">
                                <input type="text" class="form-control " value="Image 1" disabled />
                            </div>
                            <div class="col-md-8">
                                <div class="mb-3">
                                    <div class="input-group " data-toggle="aizuploader" data-type="image">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text bg-soft-secondary">Browse</div>
                                        </div>
                                        <div class="form-control file-amount">Choose File</div>
                                        <input type="hidden" name="type" value="home_physician_care">
                                        <input type="hidden" name="value[images][0][image]" value="<?=$HOME_PHYSICIAN_CARE->images[0]->image?>" class="selected-files">
                                    </div>
                                    <div class="file-preview box"></div>
                                </div>
                                <div>
                                    <input type="text" class="form-control" name="value[images][0][title]" placeholder="Title" value="<?=$HOME_PHYSICIAN_CARE->images[0]->title?>" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group row gutter-5">
                            <div class="col-md-4">
                                <input type="text" class="form-control " value="Image 2" disabled />
                            </div>
                            <div class="col-md-8">
                                <div class="mb-3">
                                    <div class="input-group " data-toggle="aizuploader" data-type="image">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text bg-soft-secondary">Browse</div>
                                        </div>
                                        <div class="form-control file-amount">Choose File</div>
                                        <input type="hidden" name="type" value="home_physician_care">
                                        <input type="hidden" name="value[images][1][image]" value="<?=$HOME_PHYSICIAN_CARE->images[1]->image?>" class="selected-files">
                                    </div>
                                    <div class="file-preview box"></div>
                                </div>
                                <div>
                                    <input type="text" class="form-control" name="value[images][1][title]" placeholder="Slogan" value="<?=$HOME_PHYSICIAN_CARE->images[1]->title?>" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group row gutter-5">
                            <div class="col-md-4">
                                <input type="text" class="form-control " value="Image 3" disabled />
                            </div>
                            <div class="col-md-8">
                                <div class="mb-3">
                                    <div class="input-group " data-toggle="aizuploader" data-type="image">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text bg-soft-secondary">Browse</div>
                                        </div>
                                        <div class="form-control file-amount">Choose File</div>
                                        <input type="hidden" name="type" value="home_physician_care">
                                        <input type="hidden" name="value[images][2][image]" value="<?=$HOME_PHYSICIAN_CARE->images[2]->image?>" class="selected-files">
                                    </div>
                                    <div class="file-preview box"></div>
                                </div>
                                <div>
                                    <input type="text" class="form-control" name="value[images][2][title]" placeholder="Slogan" value="<?=$HOME_PHYSICIAN_CARE->images[2]->title?>" />
                                </div>
                            </div>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    <?php echo form_close() ?>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?=base_url('assets/js/vendors.js')?>"></script>
<script src="<?=base_url('assets/js/aiz-core.js')?>"></script>