@extends('layouts.vote')

@section('content')
        <a class="btn" href="/"><h1 class="title">Home</h1></a>

    <form method="POST" action="/vote/confirm">
        @csrf
        <div class="form-group">
            <label for="voterskey">Enter your voter's key</label>
            <input type="text" name="voterskey" class="form-control" id="voterskey">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection