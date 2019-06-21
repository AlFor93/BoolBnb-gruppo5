<?php


// Route::get('/', function () {
//     return view('BoolBnb');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/' , 'BoolHomeController@index')->name('BoolHome');

Route::get('/flat/{id}' , 'FlatController@showFlat')->name('show.flat');
