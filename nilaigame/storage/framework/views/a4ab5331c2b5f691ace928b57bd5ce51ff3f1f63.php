<?php $__env->startSection('content'); ?>
    
    <h1><?php echo e($title); ?></h1>
    <!--<h1>About</h1>-->
    <!--<p>About this Page</p>-->
    <?php if(count($services) > 0): ?>
        <ul>
            <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($service); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\nilaigame\resources\views/pages/about.blade.php ENDPATH**/ ?>