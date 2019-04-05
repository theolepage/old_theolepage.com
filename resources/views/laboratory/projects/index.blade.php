@extends('layouts.app')

@section('title', 'Laboratory')

@section('content')

<div class="wrapper_lab">

    <div class="heading">
        <div class="heading-title">Laboratory</div>
        <div class="heading-subtitle">My name is Theo and I am a computer science student.</div>
        <div class="heading-subtitle">Below are all the projects I have worked on.</div>

        @if ($setting->alert_enabled)
            <div class="lab-alert">
                <span class="lab-alert-title">Message</span>{{ $setting->alert_text }}
            </div>
        @endif
    </div>

    <div class="lab">

        <div class="experiments">
            @foreach($projects as $project)
                @include('laboratory.projects.cube')
            @endforeach
        </div>

    </div>

</div>

@endsection
