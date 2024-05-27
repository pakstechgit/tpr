<div class="px-15px px-lg-25px">
  <div class="aiz-titlebar text-left mt-2 mb-3">
    <div class="align-items-center">
      <h1 class="h3">Setup Product Options</h1>
    </div>
  </div>

  <div class="row">
    <!-- Small table -->
    <div class="col-lg-12">
      <div class="card">
            <table class="table table-bordered aiz-table" >
                <thead>
                    <tr>
                        <td rowspan='2'>Variant</td>
                <?php foreach($ITEM_OPTIONS as $option) : ?>
                        <td><?=$option->name?></td>
                <?php endforeach?>
                    </tr>
                </thead>
            </table>
      </div>
    </div>
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
                <p class="mt-1 fs-14">Are you sure to delete this?</p>
                <button type="button" class="btn btn-secondary rounded-0 mt-2" data-dismiss="modal">Cancel</button>
                <a href="" id="delete-link" class="btn btn-primary rounded-0 mt-2">Delete</a>
            </div>
        </div>
    </div>
</div><!-- /.modal -->
<script src="<?=base_url('assets/js/vendors.js')?>"></script>
<script src="<?=base_url('assets/js/aiz-core.js')?>"></script>