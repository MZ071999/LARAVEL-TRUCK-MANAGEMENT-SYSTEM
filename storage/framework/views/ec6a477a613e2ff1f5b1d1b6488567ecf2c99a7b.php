

<?php $__env->startSection('content'); ?>
   <div class="container"> 
       <h1 class="mt-5">Add New Postman</h1>
    <hr>
    <form action="/postman" method="post">
        <?php echo e(csrf_field()); ?>

        <div class="form-group">
            <label for="title">Postman id</label>
            <input type="text" class="form-control" id="postman_id" name="postman_id">
        </div>
        <div class="form-group">   
            <label for="title">Truck Number</label>
            <input type="text" class="form-control" id="truck_number" name="truck_number">
        </div>
        <div class="form-group">
            <label for="title">Postman Number</label>
            <input type="text" class="form-control" id="postman_number" name="postman_number">
        </div>
        <div class="form-group">
            <label for="title">Postman Name</label>
            <input type="text" class="form-control" id="postman_name" name="postman_name">
        </div>
        <div class="form-group">
            <label for="title">Operation Date</label>
            <input type="date" class="form-control" id="date_of_operation" name="date_of_operation">
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
<?php echo $__env->make('layouts.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\webapp\postman\resources\views/postman/create.blade.php ENDPATH**/ ?>