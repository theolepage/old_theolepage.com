<?php $__env->startSection('content'); ?>

<p><?php echo e($messageText); ?></p>

<h3><?php echo e($fromName); ?> (<?php echo e($fromAddress); ?>)</h3>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.email', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>