<div class="px-15px px-lg-25px">
  <div class="aiz-titlebar text-left mt-2 mb-3">
    <div class="row align-items-center">
      <div class="col-md-6">
        <h1 class="h3">All categories</h1>
      </div>
      <div class="col-md-6 text-md-right">
        <a href="<?=site_url('admins/categories/create')?>" class="btn btn-primary">
          <span>Add New category</span>
        </a>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header d-block d-md-flex">
      <h5 class="mb-0 h6">Categories</h5>
      <form id="sort_categories"  method="GET">
       <div class="box-inline pad-rgt pull-left">
         <div class="" style="min-width: 200px;">
           <input type="text" class="form-control" id="search" name="search" placeholder="Type name &amp; Enter">
         </div>
       </div>
      </form>
    </div>
    <div class="card-body">
      <table class="table aiz-table mb-0">
        <thead>
          <tr>
            <th data-breakpoints="lg">#</th>
            <th>Name</th>
            <th data-breakpoints="lg">Parent Category</th>
            <th data-breakpoints="lg">Level</th>
            <!--<th data-breakpoints="lg">Banner</th>-->
            <!--<th data-breakpoints="lg">Icon</th>-->
            <!--<th data-breakpoints="lg">Cover Image</th>-->
            <th data-breakpoints="lg">Featured</th>
            <!--<th data-breakpoints="lg">Commission</th>-->
            <th width="10%" class="text-right">Options</th>
          </tr>
        </thead>
        <tbody>
<?php foreach($CATEGORIES as $category) { ?>
          <tr>
            <td><?=$category->id?></td>
            <td><?=$category->name?></td>
            <td>
                <?=$category->parent?>
            </td>
            <td><?=$category->level?></td>
            <!--<td>-->
            <!--  —-->
            <!--</td>-->
            <!--<td>-->
            <!--  <span class="avatar avatar-square avatar-xs">-->
            <!--    <img-->
            <!--      src="https://favori-dev.technos.app/public/uploads/all/GhQTCXz0dLdSKvzd4nBwqgzkQeIHWId7shzRRoij.png"-->
            <!--      alt="Icon">-->
            <!--  </span>-->
            <!--</td>-->
            <!--<td>-->
            <!--  <img src="https://favori-dev.technos.app/public/assets/img/placeholder.jpg" alt="Cover Image"-->
            <!--    class="h-50px">-->
            <!--</td>-->
            <td>
              <label class="aiz-switch aiz-switch-success mb-0">
                <input type="checkbox" onchange="update_featured(this)" <?=$category->featured? 'checked' :'' ?>  value="<?=$category->id?>">
                <span></span>
              </label>
            </td>
            <!--<td>0 %</td>-->
            <td class="text-right">
              <a class="btn btn-soft-primary btn-icon btn-circle btn-sm"
                href="<?=base_url('admins/categories/edit/'.$category->id)?>" title="Edit">
                <i class="las la-edit"></i>
              </a>
              <a href="#" class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete"
                data-href="<?=base_url('admins/categories/destroy/'.$category->id)?>" title="Delete">
                <i class="las la-trash"></i>
              </a>
            </td>
          </tr>
<?php } ?>
        </tbody>
      </table>
      <div class="aiz-pagination">
        <?=$links?>

      </div>
    </div>
  </div>
</div>
<div class="bg-white text-center py-3 px-15px px-lg-25px mt-auto">
  <p class="mb-0">&copy; </p>
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
    function update_featured(el){
        if(el.checked){
            var status = 1;
        }
        else{
            var status = 0;
        }
        $.post("<?=site_url('admins/categories/featured')?>", {_token:AIZ.data.csrf,table:'tbl_categories', id:el.value, status:status}, function(data){
           
            if(data == 1){
                AIZ.plugins.notify('success', 'Featured categories updated successfully');
            }
            else{
                AIZ.plugins.notify('danger', 'Something went wrong!');
            }
        });
    }
    </script>