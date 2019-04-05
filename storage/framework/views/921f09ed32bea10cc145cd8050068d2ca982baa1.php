<?php $__env->startSection('content'); ?>

<h2>Message from <?php echo e($fromAddress); ?></h2>
<p><?php echo e($messageText); ?></p>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.email', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>