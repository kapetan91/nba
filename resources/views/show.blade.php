@extends('layouts.master')


@section('content')
   	<div class="blog-post">

		<h1 class="blog-post-title">{{ $team->name}}</h1>
		<h3>{{ $team->city }}</h3>
	    <h4>{{ $team->email }}</h4>
	    <h4>{{ $team->address }}</h4>
	    <br>
	    <br>
	       @foreach ($team->$players as $player) 
	    <p>{{ $player->first_name }} , {{$player->last_name }}</p>  
	    	@endforeach
	</div>
  
@endsection