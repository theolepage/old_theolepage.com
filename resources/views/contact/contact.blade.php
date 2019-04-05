@extends('layouts.app')

@section('title', 'Contact')

@section('content')

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

            @if(session()->has('success'))
                <div class="contact-success">
                    {{ session()->get('success') }}
                </div>
            @endif

            <form class="contact-form" action="/contact" method="post">
                @csrf

                <div class="contact-info">
                    <label for="name" class="contact-label">First and last name</label>
                    <input type="text" name="name" class="contact-name @if ($errors->has('name')) contact-input-error @endif" placeholder="John Doe">
                    @if ($errors->has('name'))
                        <div class="contact-error">{{ $errors->first('name') }}</div>
                    @endif
                </div>
                <div class="contact-info">
                    <label for="email" class="contact-label">Email address</label>
                    <input type="email" name="email" class="contact-email @if ($errors->has('email')) contact-input-error @endif" placeholder="john@doe.com">
                    @if ($errors->has('email'))
                        <div class="contact-error">{{ $errors->first('email') }}</div>
                    @endif
                </div>

                <label for="message" class="contact-label">Message</label>
                <textarea name="message" class="contact-message @if ($errors->has('message')) contact-input-error @endif" placeholder="Hello, ..."></textarea>
                @if ($errors->has('message'))
                    <div class="contact-error">{{ $errors->first('message') }}</div>
                @endif

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

@endsection
