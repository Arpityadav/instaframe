<?php

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/users/{user}', 'UsersController@show');
Route::get('/users/{user}/follow', 'UsersController@follow');
Route::get('/users/{user}/unfollow', 'UsersController@unfollow');

// Route::get('/users/{user}/dp/update', 'UsersController@updateDP');

Route::post('/images/update', 'ImagesController@store');
