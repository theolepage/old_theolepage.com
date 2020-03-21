@extends('layouts.app')

@section('title', 'Laboratory')

@section('content')

<div class="lab wrapper_lab">

    <div class="lab-internship">
        I am currently seeking an internship in Software Engineering starting in September 2020.
        <a data-turbolinks="false" href="/resume">Learn more by reading my resume</a>
    </div>

    <div class="lab-heading">
        <div class="lab-heading-title">Hello, I am <span class="lab-emphasize">Theo</span>, a computer science student.</div>
        <div class="lab-heading-title">Welcome to my <span class="lab-emphasize">laboratory</span>.</div>
    </div>

    <div class="lab-container">
        <div class="lab-title">Projects</div>
        <div class="lab-projects">
            @foreach($projects as $project)
                @include('laboratory.projects.cuboid')
            @endforeach
        </div>
        <div class="lab-title">Small projects and experiments</div>
        <div class="lab-projects">
            @foreach($experiments as $project)
                @include('laboratory.projects.cuboid')
            @endforeach
        </div>
    </div>

</div>

@endsection
