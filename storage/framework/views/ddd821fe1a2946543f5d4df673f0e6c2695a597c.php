<?php $__env->startSection('title', 'Laboratory'); ?>

<?php $__env->startSection('content'); ?>

<div class="lab wrapper_lab">

    <div class="heading">
        <div class="heading-title">Laboratory</div>
        <div class="heading-subtitle">Hello, my name is Theo and I am a computer science student.</div>
        <div class="heading-subtitle">My "laboratory" aims to present some of my current and past projects.</div>
    </div>

    <div class="lab-internship">
        I am currently seeking an internship in Software Engineering starting in September 2020.
        <a data-turbolinks="false" href="/resume">Learn more by reading my resume</a>
        (also available in <a data-turbolinks="false" href="/resume/fr">French</a>)
    </div>    

    <div class="lab-container">
        <div class="lab-title">Projects</div>
        <div class="lab-projects">
            <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo $__env->make('laboratory.projects.cuboid', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="lab-title">Small projects and experiments</div>
        <div class="lab-projects">
            <?php $__currentLoopData = $experiments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo $__env->make('laboratory.projects.cuboid', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>