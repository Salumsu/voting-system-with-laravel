@extends('layouts.dashboard')

@section('content')
    <h3>Search for a student</h3>
    <form method="POST" action="/candidates/add">
        @csrf
        <div class="form-group">
            <label for="studentid">Student ID</label>
            <input type="text" name="studentid" class="form-control" id="studentid">
        </div>
        <br />
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>    
@endsection