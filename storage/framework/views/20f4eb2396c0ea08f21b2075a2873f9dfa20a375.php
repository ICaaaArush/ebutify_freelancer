
<?php $__env->startSection('content'); ?>
    <main>
        <section class="blog-author-header">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center blog-author-name">
                        <h3>100% No Questions Asked Refund Policy</h3>
                    </div>
                </div>
            </div>
        </section>
        <section class="refund-policy-page">
            <div class="container">
                <div class="row">
                    <div class="col-12 refund-main-contant pb-5">
                        <div class="refund-policy-here">
                            <?php echo $data->content; ?>            
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\ebutify\ebutify_freelancer\resources\views/front/refund-policy.blade.php ENDPATH**/ ?>