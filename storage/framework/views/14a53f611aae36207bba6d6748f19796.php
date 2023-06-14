<?php $__env->startSection("content"); ?>
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="album py-5 bg-light">
            <div class="container">

                <div class="col-lg-6 col-md-8 mx-auto">

        <div class="col">
            <div class="card shadow-sm">
            <a href="/detail/<?php echo e($post->id); ?>">
                <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="<?php echo e(asset($post->image)); ?>" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/></img>

            </a>
              <div class="card-body">
                <p class="card-text"><?php echo e($post->content); ?></p>
                <div class="d-flex justify-content-between align-items-center">
                  <small class="text-muted">June 2023</small>
                </div>
              </div>
            </div>
          </div>

        </div>
    </div>
    </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\test-app\resources\views/welcome.blade.php ENDPATH**/ ?>