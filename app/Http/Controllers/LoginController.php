<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
	public function __construct()
    {
        $this->middleware('guest', ['except' => 'destroy']);
    }
    public function create()
	{
		return view('login.create');
	}

	public function store()
	{
		if (!auth()->attempt(
				request(['email', 'password'])
			)) {

			return back()->withErrors([
				'message' => 'Bad credentials. Please try again'
			]);
		}

		return redirect('/teams');
	}

    public function destroy()
    {
    	auth()->logout();

    	return redirect('/login');
    }
}
