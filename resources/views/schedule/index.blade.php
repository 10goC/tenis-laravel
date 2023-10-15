@extends('layout')
@section('content')
    <h1>Schedule</h1>
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @error('opening_hours')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <form action="{{ route('schedule.store') }}" method="POST">
        @csrf
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th></th>
                    <th>Monday</th>
                    <th>Tuesday</th>
                    <th>Wednesday</th>
                    <th>Thursday</th>
                    <th>Friday</th>
                    <th>Saturday</th>
                    <th>Sunday</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Opening Hours</th>
                    @foreach ([1,2,3,4,5,6,7] as $day)
                        <td>
                            <input type="time" class="form-control" name="opening_hours[{{ $day }}]" value="{{ $schedule[$day]->opening_hours }}">
                        </td>
                    @endforeach
                </tr>
                <tr>
                    <th>Closing Hours</th>
                    @foreach ([1,2,3,4,5,6,7] as $day)
                        <td>
                            <input type="time" class="form-control" name="closing_hours[{{ $day }}]" value="{{ $schedule[$day]->closing_hours }}">
                        </td>
                    @endforeach
                </tr>
            </tbody>
        </table>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection