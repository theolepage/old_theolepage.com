@extends('layouts.app')

@section('title', 'Laboratory')

@section('content')

<div class="lab wrapper_lab">

    <div class="heading">
        <div class="heading-title">Laboratory</div>
        <div class="heading-subtitle">Hello, my name is Theo and I am a computer science student.</div>
        <div class="heading-subtitle">My "laboratory" aims to present some of my current and past projects.</div>
    </div>

    <div class="lab-internship">
        I am currently seeking an internship in Software Engineering starting in September 2020.
        <a data-turbolinks="false" href="/resume">Learn more by reading my resume</a>
        (also available in <a data-turbolinks="false" href="/resume/fr">French</a>)
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
