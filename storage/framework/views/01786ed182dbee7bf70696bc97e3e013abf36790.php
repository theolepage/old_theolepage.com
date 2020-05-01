<?php $__env->startSection('title', 'About'); ?>

<?php $__env->startSection('content'); ?>

<div class="wrapper">

    <div class="heading">
        <p>Hello, I am <span class="emphasize">Theo</span>, a computer science student.</p>
        <p>Welcome to my <span class="emphasize">laboratory</span>.</p>
        <a href="/resume">Read my resume</a>
    </div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>