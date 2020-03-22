<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <meta name="description" content="Hello, I am Theo, a computer science student. Welcome to my laboratory.">

    <meta name="turbolinks-cache-control" content="no-cache">

    <meta name="theme-color" content="#377dff">
    <meta name="msapplication-navbutton-color" content="#377dff">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport" content="initial-scale=1, width=device-width, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="/images/icon.png">

    <link rel="stylesheet" href="<?php echo e(asset('css/resume.css')); ?>">
    <style type="text/css" media="print">
    @page  {
        size: auto;
        margin: 0;
    }
    .resume {
        margin: 0;
        box-shadow: none;
    }
</style>
</head>
<body>

<div class="container">

    <?php echo $__env->yieldContent('content'); ?>

</div>

</body>
</html>