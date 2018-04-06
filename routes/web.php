<?php

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/users/{user}', 'UsersController@show');
// Route::get('/users/{user}/dp/update', 'UsersController@updateDP');

Route::post('/images/update', 'ImagesController@store');
