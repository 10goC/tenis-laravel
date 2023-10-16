@extends('layout')
@section('content')
    <h1>Edit court</h1>

    @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <form action="{{ route('courts.update', $court->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group mb-3">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" value="{{ $court->name }}">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection