<?php $__env->startSection('title', 'Create'); ?>

<?php $__env->startSection('content'); ?>

    <h2>Create</h2>

    <p><?php echo $__env->make('laboratory.' . $resource . '.form', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?></p>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>