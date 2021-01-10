
<?php $__env->startSection('content'); ?>

<div class="col-sm-12">
    <br />
    <h3 class="display-5 text-center">postman Details</h3> 
    <?php if(Session::has('message')): ?>
        <div class="alert alert-info"><?php echo e(Session::get('message')); ?></div>
    <?php echo e(Session::get('message')); ?>

    <?php endif; ?>
    <table class="table">
        <thead class="thead-dark">
            <tr>
              <th scope="col">No</th>
              <th scope="col">Postman id</th>
              <th scope="col">Truck Number</th>
              <th scope="col">Postman number</th>
              <th scope="col">Postman name</th>
              <th scope="col">Operation Date</th>
              <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $postman; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $postman): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th scope="row"><?php echo e($postman->postman_id); ?></th>
                    <td><a href="/postman/<?php echo e($postman->postman_id); ?>"><?php echo e($postman->truck_number); ?></a></td>
                    <td><?php echo e($postman->postman_number); ?></td>
                    <td><?php echo e($postman->postman_name); ?></td>
                    <td><?php echo e($postman->date_of_operation); ?></td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="<?php echo e(URL::to("postman/" .$postman->postman_id . '/edit')); ?>">
                        <button type="button" class="btn btn-warning">Edit</button>
                    </a>
                    
                    <form action="<?php echo e(url('postman', [$postman->postman_id])); ?>" method="post">
                        <input type="hidden" name="_method" value="delete">
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                        <input type="submit" class="btn btn-danger" value="delete">
                    </form>
                    </div> 
                </td> 
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>
    </div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\webapp\postman\resources\views/postman/index.blade.php ENDPATH**/ ?>