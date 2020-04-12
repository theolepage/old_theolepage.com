<?php $__env->startSection('title', 'Laboratory'); ?>

<?php $__env->startSection('content'); ?>

<div class="wrapper">

    <div class="internship">
        <img class="internship-icon" src="/images/icon-internship.svg">
        <p>
            I am seeking an <span class="internship-emphasize">internship in Software Engineering</span> starting in September 2020.
            <a data-turbolinks="false" class="internship-link" href="/resume">Download my resume</a>
        </p>
    </div>

    <div class="heading">
        <p>Hello, I am <span class="emphasize">Theo</span>, a computer science student.</p>
        <p>Welcome to my <span class="emphasize">laboratory</span>.</p>
    </div>

    <div class="projects">
        <div class="projects-section">
            <div class="projects-title">Main projects</div>
            <div class="projects-container">
                <?php if(array_key_exists("Main project", $projects)): ?>
                    <?php $__currentLoopData = $projects["Main project"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo $__env->make('laboratory.projects.cuboid', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>
        </div>

        <div class="projects-section">
            <div class="projects-title">AI & Machine learning</div>
            <div class="projects-container">
                <?php if(array_key_exists("AI", $projects)): ?>
                    <?php $__currentLoopData = $projects["AI"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo $__env->make('laboratory.projects.cuboid', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>
        </div>

        <div class="projects-section">
            <div class="projects-title">Software and web apps</div>
            <div class="projects-container">
                <?php if(array_key_exists("App", $projects)): ?>
                    <?php $__currentLoopData = $projects["App"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo $__env->make('laboratory.projects.cuboid', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>
        </div>

        <div class="projects-section">
            <div class="projects-title">Frameworks</div>
            <div class="projects-container">
                <?php if(array_key_exists("Framework", $projects)): ?>
                    <?php $__currentLoopData = $projects["Framework"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo $__env->make('laboratory.projects.cuboid', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>
        </div>

        <div class="projects-section">
            <div class="projects-title">Tools</div>
            <div class="projects-container">
                <?php if(array_key_exists("Tool", $projects)): ?>
                    <?php $__currentLoopData = $projects["Tool"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo $__env->make('laboratory.projects.cuboid', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>
        </div>

        <div class="projects-section">
            <div class="projects-title">Others</div>
            <div class="projects-container">
                <?php if(array_key_exists("Other", $projects)): ?>
                    <?php $__currentLoopData = $projects["Other"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo $__env->make('laboratory.projects.cuboid', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>