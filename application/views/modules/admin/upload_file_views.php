
<div class="px-15px px-lg-25px">
    <div class="aiz-titlebar text-left mt-2 mb-3">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1 class="h3">All uploaded files</h1>
            </div>
            <div class="col-md-6 text-md-right">
                <a href="" class="btn btn-primary">
                    <span>Upload New File</span>
                </a>
            </div>
        </div>
    </div>

    <div class="card">
        <form id="sort_uploads" action="">
            <div class="card-header row gutters-5">
                <div class="col">
                    <h5 class="mb-0 h6">All files</h5>
                </div>
                <div class="dropdown mb-2 mb-md-0">
                    <button class="btn border dropdown-toggle" type="button" data-toggle="dropdown">
                        Bulk Action
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#" onclick="bulk_delete()"> Delete selection</a>
                    </div>
                </div>
                <div class="col-md-3 ml-auto mr-0">
                    <select class="form-control form-control-xs aiz-selectpicker" name="sort" onchange="sort_uploads()">
                        <option value="newest">Sort by newest</option>
                        <option value="oldest">Sort by oldest</option>
                        <option value="smallest">Sort by smallest</option>
                        <option value="largest">Sort by largest</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <input type="text" class="form-control form-control-xs" name="search"
                        placeholder="Search your files" value="">
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </div>

            <div class="card-body">
                <div class="form-group">
                    <div class="aiz-checkbox-inline">
                        <label class="aiz-checkbox">
                            Select All
                            <input type="checkbox" class="check-all">
                            <span class="aiz-square-check"></span>
                        </label>
                    </div>
                </div>
                <!-- start here -->
                <div class="row gutters-5"> 
<?php foreach($FILES as $file) : ?>
                    <div class="col-auto w-140px w-lg-220px">
                        <div class="aiz-file-box">
                            <div class="dropdown-file">
                                <a class="dropdown-link" data-toggle="dropdown">
                                    <i class="la la-ellipsis-v"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="javascript:void(0)" class="dropdown-item" onclick="detailsInfo(this)"
                                        data-id="<?=$file->id?>">
                                        <i class="las la-info-circle mr-2"></i>
                                        <span>Details Info</span>
                                    </a>
                                    <a href="<?=base_url($file->file_name)?>"
                                        target="_blank" download="<?=$file->file_original_name?>.<?=$file->extension?>" class="dropdown-item">
                                        <i class="la la-download mr-2"></i>
                                        <span>Download</span>
                                    </a>
                                    <a href="javascript:void(0)" class="dropdown-item" onclick="copyUrl(this)"
                                        data-url="<?=base_url($file->file_name)?>">
                                        <i class="las la-clipboard mr-2"></i>
                                        <span>Copy Link</span>
                                    </a>
                                    <a href="javascript:void(0)" class="dropdown-item confirm-alert"
                                        data-href="<?=site_url('upload/destroy/'.$file->id)?>"
                                        data-target="#delete-modal">
                                        <i class="las la-trash mr-2"></i>
                                        <span>Delete</span>
                                    </a>
                                </div>
                            </div>
                            <div class="select-box">
                                <div class="aiz-checkbox-inline">
                                    <label class="aiz-checkbox">
                                        <input type="checkbox" class="check-one" name="id[]" value="<?=$file->id?>">
                                        <span class="aiz-square-check"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="card card-file aiz-uploader-select c-default" title="<?=$file->file_original_name?>.<?=$file->extension?>">
                                <div class="card-file-thumb">
                                    <img src="<?=base_url($file->file_name)?>"
                                        class="img-fit">
                                </div>
                                <div class="card-body">
                                    <h6 class="d-flex">
                                        <span class="text-truncate title"><?=$file->file_original_name?></span>
                                        <span class="ext">.<?=$file->extension?></span>
                                    </h6>
                                    <p><?=$file->file_size?></p>
                                </div>
                            </div>
                        </div>
                    </div>
<?php endforeach ?>
                </div>
                <div class="aiz-pagination mt-3">
                    <?php echo $links?>
                </div>
            </div>
        </form>
    </div>
</div>

<div id="delete-modal" class="modal fade">
    <div class="modal-dialog modal-sm modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title h6">Delete Confirmation</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body text-center">
                <p class="mt-1">Are you sure to delete this file?</p>
                <button type="button" class="btn btn-link mt-2" data-dismiss="modal">Cancel</button>
                <a href="" class="btn btn-primary mt-2 comfirm-link">Delete</a>
            </div>
        </div>
    </div>
</div>
<div id="info-modal" class="modal fade">
	<div class="modal-dialog modal-dialog-right">
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title h6">File Info</h5>
				<button type="button" class="close" data-dismiss="modal">
				</button>
			</div>
			<div class="modal-body c-scrollbar-light position-relative" id="info-modal-content">
				<div class="c-preloader text-center absolute-center">
                    <i class="las la-spinner la-spin la-3x opacity-70"></i>
                </div>
			</div>
		</div>
	</div>
</div>

<script src="<?=base_url('assets/js/vendors.js')?>" ></script>
<script src="<?=base_url('assets/js/aiz-core.js')?>" ></script>