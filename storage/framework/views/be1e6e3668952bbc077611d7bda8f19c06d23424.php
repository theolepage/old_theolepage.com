<?php $__env->startSection('code', '404'); ?>
<?php $__env->startSection('title', __('Page not found')); ?>

<?php echo $__env->make('errors.layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>