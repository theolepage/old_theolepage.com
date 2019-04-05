@extends('layouts.admin')

@section('title', 'Edit ' . $item->name)

@section('content')

    <h2>Edit {{ $item->name }}</h2>

    <p>@include('laboratory.' . $resource . '.form')</p>

@endsection
