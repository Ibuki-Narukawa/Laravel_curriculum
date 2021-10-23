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
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function(){
    Route::get('/posts','PostController@index');
    
    Route::get('/posts/create','PostController@create');
    
    Route::post('/posts/create','PostController@store');
    
    Route::get('/posts/{id}','PostController@show');
    
    Route::get('/posts/{id}/edit','PostController@edit');
    
    Route::put('/posts/{id}','PostController@update');
    
    Route::delete('/posts/{id}','PostController@destroy');
});
    
Auth::routes();
    
Route::get('/home', 'HomeController@index')->name('home');