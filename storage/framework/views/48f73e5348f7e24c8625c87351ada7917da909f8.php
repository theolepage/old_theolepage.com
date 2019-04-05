<?php $__env->startSection('title', 'Contact'); ?>

<?php $__env->startSection('content'); ?>

<div class="wrapper">

    <div class="heading">
        <div class="heading-title">Contact</div>
        <div class="heading-subtitle">Get in touch with me for whatever reason.</div>
    </div>

    <div class="contact">

        <div class="contact-section contact-section_form">
            <div class="lab-section-title">Send me a message</div>

            <div class="lab-alert">
                You can send an email directly to theo[at]thdoteo[dot]com.
            </div>

            <?php if(session()->has('success')): ?>
                <div class="contact-success">
                    <?php echo e(session()->get('success')); ?>

                </div>
            <?php endif; ?>

            <form class="contact-form" action="/contact" method="post">
                <?php echo csrf_field(); ?>

                <div class="contact-info">
                    <label for="name" class="contact-label">First and last name</label>
                    <input type="text" name="name" class="contact-name <?php if($errors->has('name')): ?> contact-input-error <?php endif; ?>" placeholder="John Doe">
                    <?php if($errors->has('name')): ?>
                        <div class="contact-error"><?php echo e($errors->first('name')); ?></div>
                    <?php endif; ?>
                </div>
                <div class="contact-info">
                    <label for="email" class="contact-label">Email address</label>
                    <input type="email" name="email" class="contact-email <?php if($errors->has('email')): ?> contact-input-error <?php endif; ?>" placeholder="john@doe.com">
                    <?php if($errors->has('email')): ?>
                        <div class="contact-error"><?php echo e($errors->first('email')); ?></div>
                    <?php endif; ?>
                </div>

                <label for="message" class="contact-label">Message</label>
                <textarea name="message" class="contact-message <?php if($errors->has('message')): ?> contact-input-error <?php endif; ?>" placeholder="Hello, ..."></textarea>
                <?php if($errors->has('message')): ?>
                    <div class="contact-error"><?php echo e($errors->first('message')); ?></div>
                <?php endif; ?>

                <button type="submit" class="contact-button">Send</button>
            </form>
        </div>

        <div class="contact-section contact-section_more">
            <div class="lab-section-title">Other ways to reach me</div>

            You can also check my profile on the following websites.
            <a target="_blank" rel="noopener" href="http://twitter.com/thdoteo" class="contact-link">Twitter</a>
            <a target="_blank" rel="noopener" href="http://github.com/thdoteo" class="contact-link">Github</a>
            <a target="_blank" rel="noopener" href="https://fr.linkedin.com/in/theolepage" class="contact-link">LinkedIn</a>
        </div>

    </div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>