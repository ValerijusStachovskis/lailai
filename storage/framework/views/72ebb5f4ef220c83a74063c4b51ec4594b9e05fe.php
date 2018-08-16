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

                        <div>
                            <form action="<?php echo e(url("pirma_maxi")); ?>" method="POST">
                                <?php echo e(csrf_field()); ?>

                                <h1>Pirma maxi</h1>
                                <div><input type="text" name="campino">    Campino   </div><br>
                                <div><input type="text" name="suris">      Suris     </div><br>
                                <div><input type="text" name="kumpis">     Kumpis    </div><br>
                                <div><input type="text" name="jelopenas">  Jelopenas </div><br>
                                <div><input type="text" name="salsa">      Salsa     </div><br>
                                <div><input type="text" name="cesnakinis"> Cesnakinis</div><br>
                                <button type="submit">Ok</button>
                            </form>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>