@extends('layouts.master')

@section('first_name', 'last_name')
    {{ $player->first_name, last_name}}
@endsection

@section('content')
    {{ $player->email }}
    {{ $player->team }}      
  
@endsection