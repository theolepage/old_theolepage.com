<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo $__env->yieldContent('title'); ?> | thdoteo.com</title>
    <meta name="description" content="Explore my laboratory. My name is Theo and I am a computer science student. Below are all the projects I have worked on.">

    <meta name="turbolinks-cache-control" content="no-cache">

    <meta name="theme-color" content="#377dff">
    <meta name="msapplication-navbutton-color" content="#377dff">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport" content="initial-scale=1, width=device-width">
    <link rel="icon" type="image/png" href="/images/icon.png">

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.10.0/styles/ocean.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">

    <script src="//cdnjs.cloudflare.com/ajax/libs/turbolinks/5.2.0/turbolinks.js" defer></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/autosize.js/4.0.2/autosize.min.js" defer></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.10.0/highlight.min.js" defer></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/timeago.js/3.0.2/timeago.min.js" defer></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js" defer></script>
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
</head>
<body>

<div class="container">

    <div class="header">
        <a href="/">
            <img class="header-icon" src="/images/logo.png">
        </a>

        <div class="header-nav">
            <a href="/" class="header-nav-item <?php echo e(strpos(Route::currentRouteName(), 'projects') !== false ? 'header-nav-item_active' : ''); ?>">Laboratory</a>
            <a href="/about" class="header-nav-item <?php echo e(Route::currentRouteName() == 'about' ? 'header-nav-item_active' : ''); ?>">About</a>
            <a href="/contact" class="header-nav-item <?php echo e(Route::currentRouteName() == 'contact' ? 'header-nav-item_active' : ''); ?>">Contact</a>
        </div>
    </div>

    <div class="content">
        <?php echo $__env->yieldContent('content'); ?>
    </div>

</div>

</body>
</html>
