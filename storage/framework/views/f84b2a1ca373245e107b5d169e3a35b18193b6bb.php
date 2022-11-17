<?php $__env->startSection('container'); ?>
    <div class="text-center mb-4">
        <h3>IP : </h3>
            3.33
    </div>
    <div class="d-flex justify-content-center">
        <?php if(($nilai >= 0) and ($nilai <= 2.0)): ?>
            <div>
                IP kamu belum memenuhi passing grade, Semangat.
            </div>
        <?php else: ?>
            <div>
               Pertahankan IP kamu ya.
            </div>
        <?php endif; ?>
    </div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GSLC2\resources\views/contents.blade.php ENDPATH**/ ?>