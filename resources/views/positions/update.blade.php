@extends('layouts.dashboard')

@section('content')
    <p>Update position: <b>{{$position['position']}}</b></p>
    <form method="POST" action="/update/position">
        @csrf 
        <input type="hidden" name="positionindex" value="{{$position['positionindex']}}">
        <div class="form-group">
            <label for="positionname">change name</label>
            <input type="text" name="positionname" class="form-control" id="positionname" value="{{$position['position']}}"> 
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection