<?php




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/' , 'BoolHomeController@index')->name('BoolHome');

Route::get('/flat/{id}' , 'FlatController@showFlat')->name('show.flat');
Route::get('/user/{name}' , 'HomeController@showProfile')->name('show.user');
Route::post('/user' , 'HomeController@saveNewFlat')->name('save.flat');
Route::get('/searchFlat' , 'HomeController@searchFlat')->name('search.flat');
Route::get('/addFlat' , 'AdminController@addFlat')->name('add.flat');
Route::get('/flat-detail/{id}', 'AdminController@showGraph')->name('show.graph');
Route::delete('/delete/{id}','AdminController@deleteFlat')->name('delete.flat');
