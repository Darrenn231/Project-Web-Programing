

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
        <h2 class="text-warning">更新食物 | UpdateFood</h2>
        <div class="container">
    
            <form method="POST" action="<?php echo e(route('updateFood', ['id' => $items->id])); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
    
                <div class="form-group">
                    <label for="item_name" class="text-warning">Item Name:</label>
                    <input type="text" name="item_name" placeholder="<?php echo e(old('item_name', $items->item_name)); ?>" class="form-control" required>
                </div>
    
                <div class="form-group">
                    <label for="bdesc" class="text-warning">Brief Description:</label>
                    <input type="text" name="bdesc" class="form-control" placeholder="<?php echo e(old('bdesc', $items->bdesc)); ?>" required>
                </div>
    
                <div class="form-group">
                    <label for="desc" class="text-warning">Detailed Description:</label>
                    <input type="text" name="desc" class="form-control" placeholder="<?php echo e(old('desc', $items->desc)); ?>" required>
                </div>
    
                <div class="form-group">
                    <div class="form-group">
                        <label for="Category" class="text-warning">Category</label>
                        <select class="form-control" id="country" name="item_category">
                          <option value="" disabled selected>Select food category</option>
                          <option value="Main Course">Main Course</option>
                          <option value="Beverage">Beverage</option>
                          <option value="Dessert">Dessert</option>
                        </select>
                    </div>
                </div>
    
                <div class="form-group">
                    <label for="item_price" class="text-warning">Price:</label>
                    <input type="number" name="item_price" placeholder="<?php echo e(old('item_price', $items->item_price)); ?>" class="form-control" required>
                </div>
    
                <div class="form-group">
                    <label for="item_image" class="text-warning">Image:</label>
                    <input type="file" name="item_image" class="form-control">
                </div>
    
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
    
        </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('./components/mainNav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\DARREN ENGELBERT\Desktop\BINUS\SEM5\Web Programming\Project Web Programming\Project_Lab\resources\views/update.blade.php ENDPATH**/ ?>