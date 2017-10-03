<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;

class PlayerController extends Controller
{

    public function show($id){
    	dd($id);
    	$player = Player::find($id);
    	return view ('players', compact('players'));
    }
}
