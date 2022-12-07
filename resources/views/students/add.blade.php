@extends('layouts.dashboard')

@section('content')
    <h1>Student form</h1>
    <form method="POST" action="/add/student">
        @csrf
        <div class="form-group">
            <label for="studentid">Student ID</label>
            <input type="text" name="studentid" class="form-control" id="studentid">
        </div>
        <div class="row">
            <div class="col form-group">
                <label for="firstname">First name</label>
                <input type="text" name="firstname" class="form-control" id="firstname">
            </div>
            <div class="col form-group">
                <label for="middlename">Middle name</label>
                <input type="text" name="middlename" class="form-control" id="middlename">
            </div>
            <div class="col form-group">
                <label for="lastname">Last name</label>
                <input type="text" name="lastname" class="form-control" id="lastname">
            </div>
        </div>
        <div class="row">
            <div class="col form-group">
                <label for="program">Program</label>
                <input type="text" name="program" class="form-control" id="program">
            </div>
            <div class="col form-group">
                <label for="yearlevel">Year level</label>
                <input type="num" min="1" max="4" name="yearlevel" class="form-control" id="yearlevel">
            </div>
        </div>
        <br />
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection