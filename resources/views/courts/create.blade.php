@extends('layout')
@section('content')
    <h1>Add new court</h1>

    @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <form action="{{ route('courts.store') }}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" value="{{ old('name') }}">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection