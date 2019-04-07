<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>@yield('code') @yield('title') — thdoteo.com</title>

    <meta name="theme-color" content="#377dff">
    <meta name="msapplication-navbutton-color" content="#377dff">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport" content="initial-scale=1, width=device-width">
    <link rel="icon" type="image/png" href="/images/icon.png">

    <link rel="stylesheet" href="/css/error.css">
</head>
<body>

    <div class="wrapper_error">

        <a href="https://thdoteo.com">
            <img class="logo" src="/images/icon.png" alt="logo">
        </a>

        <p class="code">@yield('code', __('Oh no'))</p>
        <p class="title">@yield('title')</p>

    </div>

    <div class="ocean"></div>
    <div class="front-waves"></div>
    <div class="back-waves"></div>

</body>
</html>
