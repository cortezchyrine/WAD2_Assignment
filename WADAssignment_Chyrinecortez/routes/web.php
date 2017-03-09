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

Route::get('/','Controller@getData');
Route::get('/',function(){
	return view('forms');
});
Route::post('/insert','StudentController@add');
Route::get('/Form', 'Registration@showForm');
Route::post('/listahan','Registration@reg');
Route::get('/List','Registration@showlist');
Route::get('/edit/{id}', 'Registration@edit');
Route::post('/editing/{id}', 'Registration@editing');
Route::get('/Delete/{id}', 'Registration@delete');
Route::get('/Add/{id}', 'Registration@add');
Route::post('/adding/{id}', 'Registration@adding');
