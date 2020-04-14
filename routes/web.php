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
// Route::resource('/todos', 'TodoController');
Route::get('/todos', 'TodoController@index')->name('todo.index');

Route::get('/todos/create', 'TodoController@create');
Route::post('/todos/create', 'TodoController@store');

Route::get('/todos/{todo}/show', 'TodoController@show');

Route::get('/todos/{todo}/edit', 'TodoController@edit');
Route::patch('/todos/{todo}/update', 'TodoController@update')->name('todo.update');

Route::put('/todos/{todo}/delete', 'TodoController@destroy')->name('todo.delete');

Route::put('/todos/{todo}/complete', 'TodoController@complete')->name('todo.complete');
Route::put('/todos/{todo}/incomplete', 'TodoController@incomplete')->name('todo.incomplete');



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
