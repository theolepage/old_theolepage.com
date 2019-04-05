@extends('layouts.admin')

@section('title', 'Settings')

@section('content')

    <h2>Settings</h2>

    {!! Form::open()
        ->fill($item)
        ->route('admin.settings', [$item])
        ->method('POST')
    !!}

    <div class="card">
        <div class="card-header">Alert</div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-2">
                    {!! Form::hidden('alert_enabled', 0) !!}
                    {!! Form::checkbox('alert_enabled', 'Alert enabled', '1') !!}
                </div>
                <div class="col-sm-10">
                    {!! Form::text('alert_text', 'Alert text') !!}
                </div>
            </div>
        </div>
    </div>


    {!! Form::submit('Update') !!}
    {!! Form::close() !!}


@endsection
