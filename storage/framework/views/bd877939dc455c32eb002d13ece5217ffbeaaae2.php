
<?php $__env->startSection('admin'); ?>

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <div class="card"><br><br>
                    <center>
                        <img class="img-thumbnail" width="200" src="<?php echo e(URL::to('backend/assets/images/small/img-8.jpg')); ?>" alt="Card image cap">
                    </center>
                   
                    <div class="card-body">
                        <h4 class="card-title">Name: <?php echo e($adminData->name); ?></h4>
                        <hr>
                        <h5 class="card-title"> Email: <?php echo e($adminData->email); ?></h5>
                        <hr>
                        <a href="<?php echo e(route('edit-admin-Profile')); ?>" class="btn btn-info btn-rounded waves-effect waves-light">Edit Profile</a>
                    </div>
                    
                </div>
            </div>


        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Udemy\Project1\resources\views/admin/adminProfilePage.blade.php ENDPATH**/ ?>