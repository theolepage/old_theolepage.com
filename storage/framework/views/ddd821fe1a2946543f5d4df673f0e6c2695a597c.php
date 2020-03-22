<?php $__env->startSection('title', 'Laboratory'); ?>

<?php $__env->startSection('content'); ?>

<div class="wrapper">

    <div class="internship">
        I am currently seeking an internship in Software Engineering starting in September 2020.
        <a data-turbolinks="false" href="/resume">Learn more by reading my resume</a>
    </div>

    <div class="heading">
        <p>Hello, I am <span class="emphasize">Theo</span>, a computer science student.</p>
        <p>Welcome to my <span class="emphasize">laboratory</span>.</p>
    </div>

    <div class="projects">
        <div class="projects-title">Projects</div>
        <div class="projects-section">
            <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo $__env->make('laboratory.projects.cuboid', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="projects-title">Small projects and experiments</div>
        <div class="projects-section">
            <?php $__currentLoopData = $experiments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo $__env->make('laboratory.projects.cuboid', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>