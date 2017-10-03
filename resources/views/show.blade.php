@extends('layouts.master')


@section('content')
   	<div class="blog-post">

		<h1 class="blog-post-title">{{ $team->name}}</h1>
		<h3>{{ $team->city }}</h3>
	    <h4>{{ $team->email }}</h4>
	    <h4>{{ $team->address }}</h4>
	    <br>
	    <br>
	        
	    <p>{{ $team->player }}</p>  
	</div>
  
@endsection