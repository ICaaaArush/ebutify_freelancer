
<?php $__env->startSection('content'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <!-- Main content -->
    <section id="main-content" class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form class="row mb-3 mt-1">
                    <div class="col-12 col-sm pr-sm-0">
                        <input type="text" id="myInput" onkeyup="myFunction()" class="form-control" placeholder="Search for names here... " aria-label="Recipient's username">
                    </div>
                    <div class="col-12 col-sm-auto pl-sm-0">
                    </div>
                    <div class="col-12 col-sm-auto pl-sm-0">
                        <a href="/super/blog/create" class="btn my-2 my-sm-0 btn-primary">Add New Blog</a>
                    </div>
                </form>
            </div>
        </div>
        <!-- Info table -->
        <div class="row mr-2">
          <div class="col-12 product-table bg-white pl-0 pr-0 ml-2 shadow-sm">

            <table class="bg-white table table-hover table-bordered table-responsive">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Header Image</th>
                  <th>Header</th>
                  <th>Created By</th>
                  <th width="100">Action</th>
                </tr>
              </thead>
              <tbody id="myTable">
                <?php $i=1 ?>
                <?php $__currentLoopData = $blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($item->id); ?></td>
                  <td> <img  src="<?php echo e(asset('storage/'.$item->image)); ?>" alt="" class="img-fluid" style='height: auto; width: 200px; object-fit: contain'></td>
                  <td><?php echo e($item->heading); ?></td>
                  <td><?php echo e($item->name); ?></td>
                  <td><a href="" class="btn btn-primary">Edit</a></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>  

            <nav aria-label="Page navigation">
              <ul class="pagination justify-content-center">
              </ul>
            </nav>
      
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\ebutify\ebutify_freelancer\resources\views/admin/blog-index.blade.php ENDPATH**/ ?>