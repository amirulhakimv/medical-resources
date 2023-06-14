    
    <?php $__env->startSection("content"); ?>

    <div class="album py-5 bg-light">
        <div class="container">

          <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 g-1">

    <div class="col">
        <div class="card shadow-sm">
          <img class="bd-placeholder-img card-img-top" width="100%" height="auto" src="<?php echo e(asset($post->image)); ?>" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/></img>

          <div class="card-body">
            <p class="card-text"><?php echo e($post->content); ?>.</p>
            <p class="float-end mb-1">
                <a href="https://www.imf.org/external/pubs/ft/fandd/2020/04/allocating-scarce-medical-resources-during-the-covid19-pandemic-bloom.htm">Visit Website</a>
              </p>
            <div class="d-flex justify-content-between align-items-center">
              <small class="text-muted">June 2023</small>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
</div>

    <?php $__env->stopSection(); ?>


<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\test-app\resources\views/detail.blade.php ENDPATH**/ ?>