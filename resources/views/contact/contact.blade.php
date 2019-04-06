@extends('layouts.app')

@section('title', 'Contact')

@section('content')

<div class="wrapper">

    <div class="heading">
        <div class="heading-title">Contact</div>
        <div class="heading-subtitle">Send me a message or reach me on social networks.</div>
    </div>

    <div class="contact">

        <div class="contact-section contact-section_form">
            @if(session()->has('success'))
                <div class="contact-success">
                    {{ session()->get('success') }}
                </div>
            @endif

            <form class="contact-form" action="/contact" method="post">
                @csrf

                <div class="contact-senderinfo">
                    <label for="name" class="contact-label">First and last name</label>
                    <input type="text" name="name" class="contact-name @if ($errors->has('name')) contact-input-error @endif" placeholder="John Doe">
                    @if ($errors->has('name'))
                        <div class="contact-error">{{ $errors->first('name') }}</div>
                    @endif
                </div>
                <div class="contact-senderinfo">
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
            <div class="contact-info">
                Or email me directly at theo[at]thdoteo[dot]com.
            </div>

            You can also check my profile on
            <a target="_blank" rel="noopener" href="http://twitter.com/thdoteo" class="contact-link">Twitter</a>,
            <a target="_blank" rel="noopener" href="http://github.com/thdoteo" class="contact-link">Github</a> or
            <a target="_blank" rel="noopener" href="https://fr.linkedin.com/in/theolepage" class="contact-link">LinkedIn</a>.
        </div>

    </div>

</div>

@endsection
