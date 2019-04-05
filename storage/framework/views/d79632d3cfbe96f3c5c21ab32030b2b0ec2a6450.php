<?php $__env->startSection('title', 'Contact'); ?>

<?php $__env->startSection('content'); ?>

    <div class="lab_narrow">
        <div class="contact-header">
            <div class="lab-title">Get in touch</div>
            <div class="lab-subtitle">Do not hesitate to contact me by sending an email.</div>
            <div class="lab-subtitle">
                More over you can check my profile on
                <a target="_blank" rel="noopener" href="http://twitter.com/thdoteo" class="about-link">Twitter</a>,
                <a target="_blank" rel="noopener" href="http://github.com/thdoteo" class="about-link">Github</a> or
                <a target="_blank" rel="noopener" href="https://fr.linkedin.com/in/theolepage" class="about-link">LinkedIn</a>.
            </div>
        </div>

        <?php if($errors->any()): ?>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>

        <div class="contact">
            <form class="contact-form" action="/contact" method="post">
                <?php echo csrf_field(); ?>
                <textarea autofocus name="message" class="contact-message" placeholder="Type your message..."></textarea>
                <input type="email" name="email" class="contact-email" placeholder="Type your email...">
                <button type="submit" class="contact-button">Send</button>
            </form>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>