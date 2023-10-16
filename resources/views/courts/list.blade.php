@extends('layout')
@section('content')
    <h1>Courts</h1>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a class="btn btn-primary mb-3" href="{{ route('courts.create') }}">Add new court</a>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Name</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
            @foreach ($courts as $court)
                <tr>
                    <td>{{ $court->name }}</td>
                    <td>
                        <div class="text-end">
                            <a class="btn btn-primary" href="{{ route('courts.edit', $court->id) }}">Edit</a>
                            <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete-court-modal-{{ $court->id }}">Delete</a>
                        </div>
                        @include('courts.modal.delete')
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection