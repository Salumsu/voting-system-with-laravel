@extends('layouts.vote')

@section('head')
    <link rel="stylesheet" href="{{url('css/slide.css')}}">
@endsection

@section('content')
    <form method="POST" action="/vote/record">
        @csrf
        <input type="hidden" name="studentid" value="{{$studentid}}">
        <div class="slide-container">
            @foreach($positions as $position)
            <div class="section" data-limit="{{$position['validvote']}}">
                <h1>{{$position['position']}}</h1> 
                @foreach(array_filter($candidates, fn($candidate) => $position['positionindex'] == $candidate['positionindex']) as $candidate)
                <div class="form-group">
                    <input type="checkbox" onClick="return checkLimit('{{str_replace(' ', '_', $position['position'])}}')" name="{{$position['positionindex']}}[]" class="{{str_replace(' ', '_', $position['position'])}}" value="{{$candidate['candidateid']}}" id="{{$candidate['candidateid']}}">
                    <label for="{{$candidate['candidateid']}}">{{$candidate['candidatename']}}</label>
                </div>
                @endforeach
            </div>
            @endforeach
            <nav class="row">
                <button type="button" class="btn btn-primary nav prev col-5">Prev</button>
                <span class="col-1"></span>
                <button type="button" class="btn btn-primary nav next col-5">Next</button>
                <button type="submit" class="btn btn-primary col-5">Submit</button>
            </nav>
        </div>
    </form>
    <script src="{{url('js/limitChoices.js')}}">
    </script>
    <script>
        let positions = @json($positions);
    </script>
    <script src="{{url('js/validateVoteChoices.js')}}"></script>
    <script src="{{url('js/slide.js')}}"></script>
@endsection