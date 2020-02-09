<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo $__env->yieldContent('title'); ?> — Theo Lepage</title>
    <meta name="description" content="Hello and welcome to my laboratory. My name is Theo and I am a computer science student. Take a look at my projects.">

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
        <a class="header-name" href="/">Theo</a>

        <div class="header-nav">
            <?php if(Route::currentRouteName() === 'projects.show'): ?>
                <a href="/" class="header-nav-item">
                    <svg class="header-nav-back" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
                        <path d="M408,178.5H96.9L239.7,35.7L204,0L0,204l204,204l35.7-35.7L96.9,229.5H408V178.5z"/>
                    </svg>
                    Laboratory
                </a>
            <?php endif; ?>
        </div>
    </div>

    <div class="content">
        <?php echo $__env->yieldContent('content'); ?>
    </div>

</div>

</body>
</html>
