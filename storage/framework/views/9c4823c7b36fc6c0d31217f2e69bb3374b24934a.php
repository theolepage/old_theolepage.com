<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <meta name="description" content="Hello and welcome to my laboratory. My name is Theo and I am a computer science student. Take a look at my projects.">

    <meta name="turbolinks-cache-control" content="no-cache">

    <meta name="theme-color" content="#377dff">
    <meta name="msapplication-navbutton-color" content="#377dff">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport" content="initial-scale=1, width=device-width">
    <link rel="icon" type="image/png" href="/images/icon.png">

    <link rel="stylesheet" href="<?php echo e(asset('css/about.css')); ?>">
</head>
<body>

<div class="container">

    <?php echo $__env->yieldContent('content'); ?>

</div>

</body>
</html>