<!doctype html>
<html lang="en">
    <head>
        <title><?php echo $__env->yieldContent('title'); ?></title>
    </head>
    <body>
    <?php echo $__env->yieldContent('code', __('Oh no')); ?>
    <?php echo $__env->yieldContent('message'); ?>
    </body>
</html>
