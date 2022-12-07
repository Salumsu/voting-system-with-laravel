@extends('layouts.dashboard')


@section('content')
    <form method="POST" action="/update/student">
        @csrf
        <input type="hidden" name="studentid" value="{{$student['studentid']}}">
        <div class="row">
            <div class="col form-group">
                <label for="firstname">First name</label>
                <input type="text" name="firstname" class="form-control" id="firstname" value="{{$student['firstname']}}">
            </div>
            <div class="col form-group">
                <label for="middlename">Middle name</label>
                <input type="text" name="middlename" class="form-control" id="middlename" value="{{$student['middlename']}}">
            </div>
            <div class="col form-group">
                <label for="lastname">Last name</label>
                <input type="text" name="lastname" class="form-control" id="lastname" value="{{$student['lastname']}}">
            </div>
        </div>
        <div class="row">
            <div class="col form-group">
                <label for="program">Program</label>
                <input type="text" name="program" class="form-control" id="program" value="{{$student['program']}}">
            </div>
            <div class="col form-group">
                <label for="yearlevel">Year level</label>
                <input type="num" min="1" max="4" name="yearlevel" class="form-control" id="yearlevel" value="{{$student['yearlevel']}}">
            </div>
        </div>
        <br/> 
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection