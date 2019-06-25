<?php


// Route::get('/', function () {
//     return view('BoolBnb');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/' , 'BoolHomeController@index')->name('BoolHome');

Route::get('/flat/{id}' , 'FlatController@showFlat')->name('show.flat');
Route::get('/user/{id}' , 'HomeController@createNewFlat')->name('show.user');
Route::post('/user' , 'HomeController@saveNewFlat')->name('save.flat');
Route::get('/searchFlat' , 'HomeController@searchFlat')->name('search.flat');
