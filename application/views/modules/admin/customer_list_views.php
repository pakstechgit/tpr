<div class="px-15px px-lg-25px">

        <div class="aiz-titlebar text-left mt-2 mb-3">
            <div class="align-items-center">
                <h1 class="h3">All Customers</h1>
            </div>
        </div>


        <div class="card">
            <form class="" id="sort_customers" action="" method="GET">
                <div class="card-header row gutters-5">
                    <div class="col">
                        <h5 class="mb-0 h6">Customers</h5>
                    </div>

                    <div class="dropdown mb-2 mb-md-0">
                        <button class="btn border dropdown-toggle" type="button" data-toggle="dropdown">
                            Bulk Action
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#" onclick="bulk_delete()">Delete selection</a>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group mb-0">
                            <input type="text" class="form-control" id="search" name="search"
                                placeholder="Type email or name &amp; Enter">
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table aiz-table mb-0">
                        <thead>
                            <tr>
                                <!--<th data-breakpoints="lg">#</th>-->
                                <th>
                                    <div class="form-group">
                                        <div class="aiz-checkbox-inline">
                                            <label class="aiz-checkbox">
                                                <input type="checkbox" class="check-all">
                                                <span class="aiz-square-check"></span>
                                            </label>
                                        </div>
                                    </div>
                                </th>
                                <th>Name</th>
                                <th data-breakpoints="lg">Email Address</th>
                                <th data-breakpoints="lg">Phone</th>
                                <!--<th data-breakpoints="lg">Package</th>-->
                                <!--<th data-breakpoints="lg">Wallet Balance</th>-->
                                <th class="text-right">Options</th>
                            </tr>
                        </thead>
                        <tbody>
<?php foreach($CUSTOMERS as $customer) : ?>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <div class="aiz-checkbox-inline">
                                            <label class="aiz-checkbox">
                                                <input type="checkbox" class="check-one" name="id[]" value="<?=$customer->id?>">
                                                <span class="aiz-square-check"></span>
                                            </label>
                                        </div>
                                    </div>
                                </td>
                                <td><?=$customer->name?></td>
                                <td><?=$customer->email?></td>
                                <td><?=$customer->phone?></td>
                                <td class="text-right">
                                    <a href="<?=site_url('admins/customers/login/'.urlencode($this->technos_encryption->encryptData($customer->id)))?>"
                                        class="btn btn-soft-primary btn-icon btn-circle btn-sm"
                                        title="Log in as this Customer">
                                        <i class="las la-edit"></i>
                                    </a>
    <?php if($customer->banned==0){?>
                                    <a href="#" class="btn btn-soft-danger btn-icon btn-circle btn-sm"
                                        onclick="confirm_ban('<?=site_url('admins/customers/customer_ban/'.urlencode($this->technos_encryption->encryptData($customer->id)))?>');"
                                        title="Ban this Customer">
                                        <i class="las la-user-slash"></i>
                                    </a>
    <?php } else{ ?>
                                    <a href="#" class="btn btn-soft-success btn-icon btn-circle btn-sm"
                                        onclick="confirm_unban('<?=site_url('admins/customers/customer_ban/'.urlencode($this->technos_encryption->encryptData($customer->id)))?>');"
                                        title="Unban this Customer">
                                        <i class="las la-user-slash"></i>
                                    </a>
                                    
    <?php  } ?>
                                    <a href="#" class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete"
                                        data-href="<?=site_url('admins/customers/destroy/'.urlencode($this->technos_encryption->encryptData($customer->id)))?>"
                                        title="Delete">
                                        <i class="las la-trash"></i>
                                    </a>
                                </td>
                            </tr>
<?php endforeach?>
                        </tbody>
                    </table>
                    <div class="aiz-pagination" >
                        <?php echo $links ?>
                    </div>
                </div>
            </form>
        </div>


        <div class="modal fade" id="confirm-ban">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title h6">Confirmation</h5>
                        <button type="button" class="close" data-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <p>Do you really want to ban this Customer?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                        <a type="button" id="confirmation" class="btn btn-primary">Proceed!</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="confirm-unban">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title h6">Confirmation</h5>
                        <button type="button" class="close" data-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <p>Do you really want to unban this Customer?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                        <a type="button" id="confirmationunban" class="btn btn-primary">Proceed!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="bg-white text-center py-3 px-15px px-lg-25px mt-auto">
    <p class="mb-0">&copy;</p>
</div>
<div id="delete-modal" class="modal fade">
    <div class="modal-dialog modal-sm modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title h6">Delete Confirmation</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body text-center">
                <p class="mt-1 fs-14">Are you sure to delete this?</p>
                <button type="button" class="btn btn-secondary rounded-0 mt-2" data-dismiss="modal">Cancel</button>
                <a href="" id="delete-link" class="btn btn-primary rounded-0 mt-2">Delete</a>
            </div>
        </div>
    </div>
</div><!-- /.modal -->
<script src="<?=base_url('assets/js/vendors.js')?>"></script>
<script src="<?=base_url('assets/js/aiz-core.js')?>"></script>
<script type="text/javascript">
    $(document).on("change", ".check-all", function() {
        if (this.checked) {
            // Iterate each checkbox
            $('.check-one:checkbox').each(function() {
                this.checked = true;
            });
        } else {
            $('.check-one:checkbox').each(function() {
                this.checked = false;
            });
        }
    
    });
    
    function sort_customers(el) {
        $('#sort_customers').submit();
    }
    
    function confirm_ban(url) {
        $('#confirm-ban').modal('show', {
            backdrop: 'static'
        });
        document.getElementById('confirmation').setAttribute('href', url);
    }
    
    function confirm_unban(url) {
        $('#confirm-unban').modal('show', {
            backdrop: 'static'
        });
        document.getElementById('confirmationunban').setAttribute('href', url);
    }
    
    function bulk_delete() {
        var data = new FormData($('#sort_customers')[0]);
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "https://favori-dev.technos.app/admin/bulk-customer-delete",
            type: 'POST',
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            success: function(response) {
                if (response == 1) {
                    location.reload();
                }
            }
        });
    }
</script>
