<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo $__env->yieldContent('code'); ?> <?php echo $__env->yieldContent('title'); ?> | thdoteo.com</title>

    <meta name="theme-color" content="#83a5e2">
    <meta name="msapplication-navbutton-color" content="#83a5e2">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport" content="initial-scale=1, width=device-width">
    <link rel="icon" type="image/png" href="/images/icon.png">

    <link rel="stylesheet" href="/css/error.css">
</head>
<body>

    <div class="content">

        <img class="logo" src="/images/logo.png" alt="logo">

        <p class="code"><?php echo $__env->yieldContent('code', __('Oh no')); ?></p>
        <p class="title"><?php echo $__env->yieldContent('title'); ?></p>

    </div>

    <div class="ocean"></div>
    <div class="front-waves"></div>
    <div class="back-waves"></div>

</body>
</html>
