<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('teams');
});
Route::get('/teams', 
	[ 'as' => 'all-teams',
	'uses' => 'TeamController@index'
]
);
Route::get('/teams/{id}',
	[ 'as' => 'single-team',
	'uses' => 'TeamController@show'
]
);
Route::get('/players/{id}',
	[ 'as' => 'single-player',
	'uses' => 'PlayerController@show'
]
);

Route::get('/users/{id}', 'UsersController@show');

Route::get('/register', 'RegisterController@create');
Route::post('/register', 'RegisterController@store');

Route::get('/login', 'LoginController@create')->name('login');
Route::post('/login', 'LoginController@store');
Route::get('/logout', 'LoginController@destroy');