<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/BoolBnB' , 'BoolHomeController@index')->name('BoolHome');

Route::get('/BoolBnB/Flats' , 'BoolFlatsController@index')->name('BoolFlats');
