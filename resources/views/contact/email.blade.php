@extends('layouts.email')

@section('content')

<p>{{ $messageText }}</p>

<h3>{{ $fromName }} ({{ $fromAddress }})</h3>

@endsection
