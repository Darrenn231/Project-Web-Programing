
<?php $__env->startSection('title', 'Xiao Ding Dong'); ?>

<?php $__env->startSection('error'); ?>
<?php if($errors->any()): ?>
<div class="fixed-top">  
    <div class="alert alert-danger alert-dismissible fade show" role="alert" style="font-size: 14px;">
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
</div>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container mt-3">
    <h2>Update Profile</h2>
    <form action="<?php echo e(route('update', $user->id)); ?>" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div class="form-group">
            <label for="name" class="text-warning">Name</label>
            <input type="text" name="name" value="<?php echo e($user->name); ?>" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="email" class="text-warning">Email</label>
            <input type="email" name="email" value="<?php echo e($user->email); ?>" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="phone_number" class="text-warning">Phone Number</label>
            <input type="text" name="phone_number" value="<?php echo e($user->phone_number); ?>" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="address" class="text-warning">Address</label>
            <textarea name="address" class="form-control" required><?php echo e($user->address); ?></textarea>
        </div>

        <div class="form-group">
            <label for="profile_image" class="text-warning">Profile Image</label>
            <input type="file" name="profile_image" class="form-control-file" style="background-color: white">
        </div>

        <div class="form-group">
            <label for="password" class="text-warning">Current Password</label>
            <input type="password" name="password" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Update Profile</button>
    </form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('./components/mainNav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\DARREN ENGELBERT\Desktop\BINUS\SEM5\Web Programming\Project Web Programming\Project_Lab\resources\views/editProfile.blade.php ENDPATH**/ ?>