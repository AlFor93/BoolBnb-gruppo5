<?php
Auth::routes();

// HOME ROUTES

Route::get('/' , 'FlatController@showSponsoredFlat')->name('BoolHome');
Route::get('/flat/{id}' , 'FlatController@showFlat')->name('show.flat');
Route::get('/searchFlat' , 'FlatController@searchFlat')->name('search.flat');
//


// USER ROUTES

Route::get('/user/{name}' , 'HomeController@showProfile')->name('show.user');
Route::post('/user' , 'HomeController@saveNewFlat')->name('save.flat');
Route::get('/addFlat' , 'AdminController@addFlat')->name('add.flat');
Route::patch('/updateFlat/{id}','HomeController@updateFlat')->name('update.flat');
Route::post('/uploadImage','ImageController@upload')->name('upload.image');
Route::get('/flat-detail/{id}', 'AdminController@showGraph')->name('show.graph');
Route::delete('/delete/{id}','AdminController@deleteFlat')->name('delete.flat');

// MESSAGES ROUTES

Route::get('/newMessage/{id}', 'MessageController@newMessage')->name('new.message');
Route::post('/saveMessage/{id}', 'MessageController@storeMessage')->name('save.message');
Route::get('/user/messages/{id}','MessageController@showMyMessages')->name('show.MyMessages');
