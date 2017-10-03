@extends('layouts.master')

@section('content')
    @foreach($teams as $team)

        <div class="blog-post">
            <h2 class="blog-post-title"><a href="/teams/{{ $team->id }}">{{ $team->name }}</a></h2>
          
        </div>

    @endforeach

   

@endsection