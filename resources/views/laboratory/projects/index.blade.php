@extends('layouts.app')

@section('title', 'Laboratory')

@section('content')

<div class="wrapper">

    <div class="internship">
        <img class="internship-icon" src="/images/icon-internship.svg">
        <p>
            I am seeking an <span class="internship-emphasize">internship in Software Engineering</span> starting in September 2020.
            <a data-turbolinks="false" class="internship-link" href="/resume">Download my resume</a>
        </p>
    </div>

    <div class="heading">
        <p>Hello, I am <span class="emphasize">Theo</span>, a computer science student.</p>
        <p>Welcome to my <span class="emphasize">laboratory</span>.</p>
    </div>

    <div class="projects">
        <div class="projects-section">
            <div class="projects-title">Main projects</div>
            <div class="projects-container">
                @if(array_key_exists("Main project", $projects))
                    @foreach($projects["Main project"] as $project)
                        @include('laboratory.projects.cuboid')
                    @endforeach
                @endif
            </div>
        </div>

        <div class="projects-section">
            <div class="projects-title">AI & Machine learning</div>
            <div class="projects-container">
                @if(array_key_exists("AI", $projects))
                    @foreach($projects["AI"] as $project)
                        @include('laboratory.projects.cuboid')
                    @endforeach
                @endif
            </div>
        </div>

        <div class="projects-section">
            <div class="projects-title">Software and web apps</div>
            <div class="projects-container">
                @if(array_key_exists("App", $projects))
                    @foreach($projects["App"] as $project)
                        @include('laboratory.projects.cuboid')
                    @endforeach
                @endif
            </div>
        </div>

        <div class="projects-section">
            <div class="projects-title">Frameworks</div>
            <div class="projects-container">
                @if(array_key_exists("Framework", $projects))
                    @foreach($projects["Framework"] as $project)
                        @include('laboratory.projects.cuboid')
                    @endforeach
                @endif
            </div>
        </div>

        <div class="projects-section">
            <div class="projects-title">Tools</div>
            <div class="projects-container">
                @if(array_key_exists("Tool", $projects))
                    @foreach($projects["Tool"] as $project)
                        @include('laboratory.projects.cuboid')
                    @endforeach
                @endif
            </div>
        </div>

        <div class="projects-section">
            <div class="projects-title">Others</div>
            <div class="projects-container">
                @if(array_key_exists("Other", $projects))
                    @foreach($projects["Other"] as $project)
                        @include('laboratory.projects.cuboid')
                    @endforeach
                @endif
            </div>
        </div>
    </div>

</div>

@endsection
