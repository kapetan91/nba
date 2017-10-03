<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;

class TeamController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth', ['except' => ['teams', 'show']]);
    }

    public function index(){
    	$teams = Team::all();
    	return view ('teams', compact('teams'));
    }

    public function show($id){
    	$team = Team::with('players')->find($id);

    	return view ('show', compact('team'));
    }
}

