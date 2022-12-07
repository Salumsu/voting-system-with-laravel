@extends('layouts.dashboard')

@section('content')
    <h1>Candidate Form</h1>
    <div class="info">
        <h4>{{$candidate['candidatename']}}</h4>
        <p>Running for the position <b>{{$candidate['position']}}</b></p>
    </div>
    <form method="POST" action="/update/candidate" class="add-candidate">
        @csrf
        <input type="hidden" name="candidateid" value="{{$candidate['candidateid']}}">
        <p>Change the current position to: </p>
        <select name="position">
            @foreach($positions as $position)
                <option {{$position['positionindex' == $candidate['positionindex']] ? 'selected' : ''}}
                value="{{$position['positionindex'] . "," . $position['position']}}">{{$position['position']}}</option>
            @endforeach
        </select>
        <br><br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <script src="{{url('js/validateCandidateForm.js')}}"></script>
@endsection