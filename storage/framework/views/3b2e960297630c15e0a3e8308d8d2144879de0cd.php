
<?php $__env->startSection('content'); ?>

    <div class="container">
        <h1 class="mt-5">Edit Postman</h1>
        <hr>
        <form action="<?php echo e(url('postman', [$postman->postman_id])); ?>" method="POST">
            <input type="hidden" name="_method" value="PUT">
                <?php echo e(csrf_field()); ?>

            <div class="form-group">
                <label for="postman_id">Postman id</label>
                <input type="text" value="<?php echo e($postman->postman_id); ?>" class="form-control" id="postman_id" name="postman_id">
            </div>  
            <div class="form-group">
                <label for="truck_number">Truck Number</label>
                <input type="text" value="<?php echo e($postman->postman_number); ?>" class="form-control" id="truck_number" name="truck_number">
            </div>
            <div class="form-group">
                <label for="postman_number">Postman Number</label>
                <input type="text" value="<?php echo e($postman->postman_number); ?>" class="form-control" id="postman_number" name="postman_number">
            </div>  
            <div class="form-group">
                <label for="postman_name">Postman Number</label>
                <input type="text" value="<?php echo e($postman->postman_name); ?>" class="form-control" id="postman_name" name="postman_name">
            </div> 
            <div class="form-group">
                <label for="date_of_operation">Operation Date</label>
                <input type="date" value="<?php echo e($postman->date_of_operation); ?>" class="form-control" id="date_of_operation" name="date_of_operation">
            </div> 

            <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\webapp\postman\resources\views/postman/edit.blade.php ENDPATH**/ ?>