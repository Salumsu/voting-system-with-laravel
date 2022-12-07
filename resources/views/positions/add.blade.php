@extends('layouts.dashboard')

@section('content')
    <h1>Position Form</h1>
    <form method="POST" action="/add/position">
        @csrf 
        <div class="form-group">
            <label for="positionname">Position name</label>
            <input type="text" name="positionname" class="form-control" id="positionname">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection