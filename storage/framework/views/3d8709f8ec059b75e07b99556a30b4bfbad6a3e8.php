<?php $__env->startSection('title', 'Laboratory'); ?>

<?php $__env->startSection('content'); ?>

<div class="lab">

    <?php if($setting->alert_enabled): ?>
        <div class="lab-alert">
            <span class="lab-alert-title">Message</span><?php echo e($setting->alert_text); ?>

        </div>
    <?php endif; ?>

    <div class="lab-header">
        <div class="lab-title">Explore my laboratory</div>
        <div class="lab-subtitle">My name is Theo and I am a computer science student.</div>
        <div class="lab-subtitle">Below are all the projects I have worked on.</div>
    </div>

    <div class="lab-experiments">

        <div class="experiments">
            <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo $__env->make('laboratory.projects.cube', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

    </div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>