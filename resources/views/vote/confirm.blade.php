@extends('layouts.vote')

@section('content')
    <p>Are you</p>
    <h1>
        {{$student['firstname']}} {{$student['middlename']}} {{$student['lastname']}}
    </h1>
    <p>From</p>
    <h2>{{$student['program']}}-{{$student['yearlevel']}}?</h2>
    <a href="/vote/{{$student['studentid']}}" class="btn btn-primary">Confirm</a>
@endsection