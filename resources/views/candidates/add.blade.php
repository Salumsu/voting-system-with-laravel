@extends('layouts.dashboard')

@section('content')
    <h1>Candidate Form</h1>
    <div class="info">
        <h4>{{$student['firstname'] . " " . $student['middlename'] . " " . $student['lastname']}}</h4>
        <p>From {{$student['program']}} year {{$student['yearlevel']}}</p>
    </div>
    <form method="POST" action="/add/candidate" class="add-candidate">
        @csrf
        <input type="hidden" name="studentid" value="{{$student['studentid']}}">
        <input type="hidden" name="candidatename" value="{{$student['firstname'] . " " . $student['middlename'] . " " . $student['lastname']}}">
        <input type="hidden" name="yearlevel" value="{{$student['yearlevel']}}">
        <select name="position">
            <option selected disabled>Choose a position</option>
            @foreach($positions as $position)
                <option value="{{$position['positionindex'] . "," . $position['position']}}">{{$position['position']}}</option>
            @endforeach
        </select>
        <br><br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <script src="{{url('js/validateCandidateForm.js')}}"></script>
@endsection