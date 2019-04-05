<?php $__env->startSection('title', 'About'); ?>

<?php $__env->startSection('content'); ?>

<div class="about">

    <div class="about-content">

        <div class="about-section">
            <img src="/images/portrait.jpg" alt="about-portrait" class="about-portrait">
            <p class="about-section-content">
                Hello. First of all, welcome to my website.
                My name is Theo and my pseudonym is <span class="about-significant">thdoteo</span>.
                I am 20 years old and I live in Paris, France.
                To introduce myself in a few words, I would say that I am a computer science enthusiast who have a tons of project ideas.
                Currently, I am pursuing a master degree in this field.
            </p>
            <div class="about-subsection about-cv">
                You can download my <span class="about-significant">curriculum vitae</span> in english or in <a class="about-link" href="#">french</a>.
                <a href="#" class="about-button">Download in english</a>
            </div>
        </div>

        <div class="about-section">
            <h1 class="about-section-title">Computers</h1>
            <p class="about-section-content">
                I have always been interested in science and especially in new technologies.
                Although, for about 10 years my passion is programming on computers.
                During my childhood, I was making a website to talk about my trips and share my photos.
                The software I was using was limited in terms of features and I felt the need to go further.
            </p>
            <p class="about-section-content">
                This is how I started to learn my first programming language, PHP.
                The idea was to make my website dynamic by building it on top of a database.
                I started learning using some books from a french community of developers, the SiteDuZero, now known as OpenClassrooms.
                Then, as I started to adopt english, I discovered many other programing languages.

                At the beginning I wanted to be as polyvalent as possible.
                Therefore I experienced the creation of games as well as mobile and desktop applications.
                I discovered linux, built my own computer and started to host my services on a dedicated server.
                Even if I am not really comfortable with the "hardware" aspect, I had some fun making several robots with prebuilt kits.
                Seeing my code running and interacting in real life motivated me.
            </p>
            <div class="about-subsection about-lab">
                All my work is gathered in my laboratory...
                <a class="about-button" href="/">Take a look at my projects</a>
            </div>
            <p class="about-section-content">
                At the moment, I am more about developing my own implementations of complex softwares.
                Indeed, I work on an algorithm to detect human faces on an image with the aim to make it very efficient.
                I am working on other different projects and I am overloaded of ideas, all of them are accessible on my laboratory.
            </p>
        </div>

        <div class="about-section">
            <h1 class="about-section-title">Sailing</h1>
            <img class="about-section-image" src="/images/brittany.jpg" alt="brittany">
            <p class="about-section-content">
                It is noteworthy that many of my bugs were solved by spending a day far from a screen.
                This is why, I like spending time in Britanny, France.
                I go there to do what I love, <span class="about-significant">windsurfing</span>.
                I am also a sailing instructor during summer.
            </p>
        </div>

        <div class="about-section">
            <h1 class="about-section-title">See you</h1>
            <p class="about-section-content">
                Do not hesitate to contact me by sending a mail to <span class="about-significant">theo[at]thdoteo[dot]com</span>.
                I would be glad to answer your questions and maybe start working with you.
                Contributing with other people on open source projects is very important to me.
                So please, if you are interested in what I am working on, fork my projects!
            </p>
            <div class="about-subsection">
                <a href="/contact" class="about-button">Send me a mail</a>
                ... or check my profile on
                <a target="_blank" rel="noopener" href="http://twitter.com/thdoteo" class="about-link">Twitter</a>,
                <a target="_blank" rel="noopener" href="http://github.com/thdoteo" class="about-link">Github</a>,
                <a target="_blank" rel="noopener" href="https://fr.linkedin.com/in/theolepage" class="about-link">LinkedIn</a>.
            </div>
        </div>
    </div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>