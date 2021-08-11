
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
                        <input type="button" name="commit" value="Search" class="btn btn-primary btn-block">
                    </div>
                    <div class="col-12 col-sm-auto pl-sm-0">
                        <a href="<?php echo e(route('add-new-shopify')); ?>"  class="btn my-2 my-sm-0 btn-primary">Add New Product</a>
                    </div>
                </form>
            </div>
        </div>
        <!-- Info table -->
        <div class="row mr-2">
          <div class="col-12 product-table bg-white pl-0 pr-0 ml-2 shadow-sm">
            <?php if($productDetails->count() == 0): ?>
            <div class="row justify-content-center my-4">
                <td colspan="5">No products to display.</td>
            </div>
            <?php else: ?>
            <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
            <?php endif; ?>
            <?php if(session('status')): ?>
                <div class="alert alert-success">
                    <?php echo e(session('status')); ?>

                </div>
            <?php endif; ?>
            <table class="bg-white table table-hover table-bordered table-responsive">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Product Image</th>
                  <th>Product Names</th>
                  <th>Price</th>
                  <th>Monthly Traffic</th>
                  <th>Ads Spend</th>
                  <th>Date</th>
                  <th>Uploader Name</th>
                  <th width="100">Action</th>
                </tr>
              </thead>
              <tbody id="myTable">
                <?php $__currentLoopData = $productDetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productDetail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($productDetail->id); ?></td>
                  <td><img class="tbl-img" src="<?php echo e($productDetail->image_link); ?>"></td>
                  <td><?php echo e($productDetail->product_name); ?>,<br><?php echo e($productDetail->product_name2); ?>,<br><?php echo e($productDetail->product_name3); ?>,<br><?php echo e($productDetail->product_name4); ?></td>
                  <td>$<?php echo e($productDetail->price); ?></td>
                  <td><?php echo e($productDetail->monthly_traffic); ?></td>
                  <td>$<?php echo e($productDetail->ad_spend); ?></td>
                  <td><?php echo e($productDetail->created_at); ?></td>
                  <td><?php echo e($productDetail->uploader_name); ?></td>
                  <td>
                    <a href="<?php echo e(route ('shopify-product-edit', ['id' => $productDetail->id])); ?>" class="btn btn-primary">Edit</a>
                  </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
            <?php endif; ?>

            <nav aria-label="Page navigation">
              <ul class="pagination justify-content-center">
                <?php echo e($productDetails->links()); ?>

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
<?php echo $__env->make('layouts.freelancer-amazon-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\New folder\ebutify_freelancer\resources\views/freelancer/explorer-shopify.blade.php ENDPATH**/ ?>