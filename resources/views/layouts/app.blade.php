<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>@yield('title') — Theo Lepage</title>
    <meta name="description" content="Hello, I am Theo, a computer science student. Welcome to my laboratory.">

    <meta name="turbolinks-cache-control" content="no-cache">

    <meta name="theme-color" content="#377dff">
    <meta name="msapplication-navbutton-color" content="#377dff">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport" content="initial-scale=1, width=device-width">
    <link rel="icon" type="image/png" href="/images/icon.png">

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.10.0/styles/ocean.min.css">
    <link rel="stylesheet" href="/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="/owlcarousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <script src="//cdnjs.cloudflare.com/ajax/libs/turbolinks/5.2.0/turbolinks.js" defer></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.10.0/highlight.min.js" defer></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/timeago.js/3.0.2/timeago.min.js" defer></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js" defer></script>
    <script src="//code.jquery.com/jquery-1.11.0.min.js" defer></script>
    <script src="/owlcarousel/owl.carousel.min.js" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>

<div class="container">

<div class="internship">
    <img class="internship-icon" src="/images/icon-internship.svg">
    <p>
        I am seeking an <span class="internship-emphasize">internship in Software Engineering</span> starting in September 2020.
        <a data-turbolinks="false" class="internship-link" href="/resume">Go to my resume</a>
    </p>
</div>

    <div class="header">
        <div class="wrapper">
            <a class="header-name" href="/">Theo</a>
            <div class="header-nav">
                @if (Route::currentRouteName() === 'projects.index')
                    <!-- <a href="/" class="header-nav-item header-nav-item_active">Laboratory</a> -->
                    <a href="/resume" class="header-nav-item">Resume</a>
                @else
                    <a href="/" class="header-nav-item">
                        
                        <div class="header-nav-back">
                            <svg class="header-nav-back-icon" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
                                <path d="M408,178.5H96.9L239.7,35.7L204,0L0,204l204,204l35.7-35.7L96.9,229.5H408V178.5z"/>
                            </svg>
                            <span class="header-nav-back-text">Laboratory</span>
                        </div>
                        
                    </a>
                @endif
            </div>
        </div>
    </div>

    <div class="content">
        @yield('content')
    </div>

</div>

</body>
</html>
