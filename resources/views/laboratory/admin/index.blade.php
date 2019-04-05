@extends('layouts.admin')

@section('title', ucfirst($resource))

@section('content')

    <h2>{{ ucfirst($resource) }}</h2>

    <p style="margin: 40px 0 20px 0">
        <a href="{{ route('admin.' . $resource . '.create') }}" class="btn btn-primary btn-lg">Create</a>
    </p>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($items as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>
                    <a href="{{ route('admin.' . $resource . '.edit', ['id' => $item->id]) }}" class="btn btn-primary">Edit</a>
                </td>
                <td>
                    {!! Form::open()
                        ->fill($item)
                        ->route('admin.' . $resource . '.destroy', [$item])
                        ->method('DELETE')
                        ->attrs(['style' => 'display: inline'])
                    !!}
                    {!! Form::submit('Delete')->attrs(['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
