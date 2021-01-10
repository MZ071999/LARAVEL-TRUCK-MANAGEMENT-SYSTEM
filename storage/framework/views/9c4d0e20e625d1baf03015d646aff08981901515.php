
<?php $__env->startSection('content'); ?>

<div class="container">
        <h1 class="mt-5">Show postman <?php echo e($postman->postman_number); ?></h1>

        <div class="jumbotron text-center">
            <p class="pd-5">  
                <strong>Postman ID: </strong> <?php echo e($postman->postman_id); ?><br>
                <strong>Truck number: </strong> <?php echo e($postman->truck_number); ?><br>
                <strong>Postman number: </strong> <?php echo e($postman->postman_number); ?><br>
                <strong>Postman name: </strong> <?php echo e($postman->postman_name); ?><br>
                <strong>Operation Date: </strong> <?php echo e($postman->date_of_operation); ?><br>
            </p>
        </div>
</div>
<?php echo $__env->make('layouts.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\webapp\postman\resources\views/postman/show.blade.php ENDPATH**/ ?>