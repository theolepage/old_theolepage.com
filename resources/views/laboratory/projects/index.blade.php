@extends('layouts.app')

@section('title', 'Laboratory')

@section('content')

<div class="wrapper">

    <div class="internship">
        <img class="internship-icon" src="/images/icon-internship.svg">
        I am currently seeking an internship in Software Engineering starting in September 2020.
        <a data-turbolinks="false" class="internship-link" href="/resume">Learn more by reading my resume</a>
    </div>

    <div class="heading">
        <p>Hello, I am <span class="emphasize">Theo</span>, a computer science student.</p>
        <p>Welcome to my <span class="emphasize">laboratory</span>.</p>
    </div>

    <div class="projects">
        <div class="projects-title">Projects</div>
        <div class="projects-section">
            @foreach($projects as $project)
                @include('laboratory.projects.cuboid')
            @endforeach
        </div>
        <div class="projects-title">Small projects and experiments</div>
        <div class="projects-section">
            @foreach($experiments as $project)
                @include('laboratory.projects.cuboid')
            @endforeach
        </div>
    </div>

</div>

@endsection
