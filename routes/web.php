<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return Image::canvas(800, 600, '#ccc')->response();
});

Auth::routes();

Route::get('/home', ['as'=>'home', 'uses'=>'HomeController@index']);

Route::resource('bikes', 'BikeController');