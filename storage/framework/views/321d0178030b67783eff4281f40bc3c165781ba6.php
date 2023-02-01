<?php $__env->startSection('login&register'); ?>
<div class="container-fluid p-0">
    <div class="card">
        <div class="card-body">

            <div class="text-center mt-4">
                <div class="mb-3">
                    <a href="index.html" class="auth-logo">
                        <img src="assets/images/logo-dark.png" height="30" class="logo-dark mx-auto" alt="">
                        <img src="assets/images/logo-light.png" height="30" class="logo-light mx-auto" alt="">
                    </a>
                </div>
            </div>

            <h4 class="text-muted text-center font-size-18"><b>Register</b></h4>
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.auth-validation-errors','data' => ['class' => 'mb-4','errors' => $errors]]); ?>
<?php $component->withName('auth-validation-errors'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'mb-4','errors' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            <div class="p-3">
                <form class="form-horizontal mt-3" method="POST" action="<?php echo e(route('register')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="form-group mb-3 row">
                        <div class="col-12">
                            <input class="form-control" id="name" type="text" name="name" :value="old('name')" required autofocus  placeholder="Full-Name">
                        </div>
                    </div>

                    <div class="form-group mb-3 row">
                        <div class="col-12">
                            <input class="form-control" id="email" type="email" name="email" :value="old('email')"placeholder="Email-Address" required>
                        </div>
                    </div>

                    <div class="form-group mb-3 row">
                        <div class="col-12">
                            <input class="form-control" id="password"
                            type="password"
                            name="password"
                            required autocomplete="new-password" placeholder="Password">
                        </div>
                    </div>

                    <div class="form-group mb-3 row">
                        <div class="col-12">
                            <input class="form-control" id="password_confirmation"
                            type="password"
                            name="password_confirmation" required placeholder="Confirm-Password">
                        </div>
                    </div>

                    <div class="form-group text-center row mt-3 pt-1">
                        <div class="col-12">
                            <button class="btn btn-info w-100 waves-effect waves-light" type="submit">Register</button>
                        </div>
                    </div>

                    <div class="form-group mt-2 mb-0 row">
                        <div class="col-12 mt-3 text-center">
                            <a href="<?php echo e(route('login')); ?>" class="text-muted">Already have account?</a>
                        </div>
                    </div>
                </form>
                <!-- end form -->
            </div>
        </div>
        <!-- end cardbody -->
    </div>
    <!-- end card -->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.guest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Udemy\Project1\resources\views/auth/register.blade.php ENDPATH**/ ?>