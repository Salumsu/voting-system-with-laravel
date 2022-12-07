@extends('layouts.vote')

@section('content')
    <form method="POST" action="/vote/record">
        @csrf
        @foreach($positions as $position)
        <div class="section" data-limit="{{$position['validvote']}}">
            <h1>{{$position['position']}}</h1> 
                @foreach(array_filter($candidates, fn($candidate) => $position['positionindex'] == $candidate['positionindex']) as $candidate)
                    <div class="form-group">
                        <input type="checkbox" onClick="return checkLimit('{{str_replace(' ', '_', $position['position'])}}')" name="{{$position['position']}}[]" class="{{str_replace(' ', '_', $position['position'])}}" value="{{$candidate['candidateid']}}" id="{{$candidate['candidateid']}}">
                        <label for="{{$candidate['candidateid']}}">{{$candidate['candidatename']}}</label>
                    </div>
                @endforeach
        </div>
        @endforeach
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <script src="{{url('js/limitChoices.js')}}">
    </script>
    <script>
        let positions = @json($positions);
    </script>
    <script src="{{url('js/validateVoteChoices.js')}}"></script>
@endsection