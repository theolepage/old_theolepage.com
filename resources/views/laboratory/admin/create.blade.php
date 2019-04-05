@extends('layouts.admin')

@section('title', 'Create')

@section('content')

    <h2>Create</h2>

    <p>@include('laboratory.' . $resource . '.form')</p>

@endsection
