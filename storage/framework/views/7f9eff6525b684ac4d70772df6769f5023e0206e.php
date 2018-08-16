<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Picos</div>

                <div class="card-body" style="background-color: black; color: white;">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    You are logged in!<br><br>

                            <a href="<?php echo e(url('/pirma_midi')); ?>" style="color: white;">Pirma midi</a><br>
                            <a href="<?php echo e(url('/pirma_maxi')); ?>" style="color: white;">Pirma maxi</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>