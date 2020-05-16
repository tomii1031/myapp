<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['prefix' => 'book', 'middleware' => 'auth'], function(){
    Route::get('index', 'BookController@index')->name('book.index');
    Route::get('create', 'BookController@create')->name('book.create');
    Route::post('store', 'BookController@store')->name('book.store');
    Route::get('show/{id}', 'BookController@show')->name('book.show');
    Route::get('edit/{id}', 'BookController@edit')->name('book.edit');
    Route::post('update/{id}', 'BookController@update')->name('book.update');
    Route::post('destroy/{id}', 'BookController@destroy')->name('book.destroy');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
