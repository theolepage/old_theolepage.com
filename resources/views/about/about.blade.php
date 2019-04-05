@extends('layouts.app')

@section('title', 'About')

@section('content')

<div class="wrapper">

    <div class="heading">
        <div class="heading-title">About</div>
        <div class="heading-subtitle">Get to know me and my interest in computers.</div>
    </div>

    <div class="about">

        <div class="about-section">
            <p class="about-section-content">
                Hello. First of all, welcome to my website.
                My name is Theo and my pseudonym is <span class="about-significant">thdoteo</span>.
                I am 20 years old and I live in Paris, France.
                I am a computer science enthusiast who have a tons of project ideas.
                Currently, I am pursuing a master degree in this field.
            </p>
            <div class="about-subsection about-cv">
                If you a recruiter, I suggest you take a look at my resume.
                <a href="/uploads/Theo-Lepage_CV_EN.pdf" class="about-button">See my resume</a>
            </div>
        </div>

        <div class="about-section">
            <h1 class="about-section-title">My journey to computer science</h1>
            <p class="about-section-content">
                I have always been interested in science and especially in new technologies.
                As a child, I wanted to build my own robot by playing around with a Mindstorms kit from Lego.
                Seeing my code running and interacting with real life motivated me.
                Thereby, for about 10 years my passion is programming on computers.
                I learnt with some books from a french community of developers, the SiteDuZero, now known as OpenClassrooms.
            </p>
            <p class="about-section-content">
                Since then, I experienced the creation of games, mobile and desktop applications.
                I discovered Linux, built my own computer and started to host my services on a dedicated server.
                Nowadays, I am still learning new technologies because being versatile is important for me.

                Since I started studying in a computer engineering school, I feel more involved in complex computer science concepts.
                One of our recent project was to create a software able to extract text from an image.
                Using a low level programing languages, understanding how a neural network is made and solving a real life problem inspired me.
            </p>
            <p class="about-section-content">
                As I was starting to work on many different projects, I created this website.
                Its aim is to present every one of them, from unfinished prototypes to complete significant projects.
            </p>
            <div class="about-subsection about-lab">
                Go to my laboratory and take a look at my work.
                <a class="about-button" href="/">See my projects</a>
            </div>
        </div>

        <div class="about-section">
            <h1 class="about-section-title">Some other interests</h1>
            <img src="/images/sailing.jpg" alt="sailing" class="about-section-image">
            <p class="about-section-content">
                Spending time far away from a screen has helped me solving many bugs.
                This is one of the reason why I like spending time in Britanny, France.
                I go there to sail and <span class="about-significant">windsurf</span>.
                I am also a sailing instructor during summer.
            </p>
        </div>

        <div class="about-section">
            <h1 class="about-section-title">See you later</h1>
            <p class="about-section-content">
                Many of my projects are open source as I enjoy contributing with other people.
                Thus, do not hesitate look at them and maybe fork them.
                Moreover, I would be glad to answer your questions and maybe start working with you.
            </p>
            <div class="about-subsection">
                Send me a message or reach me on social networks...
                <a href="/contact" class="about-button">Get in touch</a>
            </div>
        </div>
    </div>

</div>

@endsection
