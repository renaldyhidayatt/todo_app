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
/* Todos Index */
Route::get('todos','TodosController@index');
/* Todos view */
Route::get('todos/{todo}', 'TodosController@show');
/*  Todos  input*/
Route::get('create','TodosController@create');
Route::post('store-todos', 'TodosController@store');

/* Todos update */
Route::get('todos/{todo}/edit', 'TodosController@edit');
Route::post('todos/{todo}/update-todos', 'TodosController@update');

Route::get('todos/{todo}/delete', 'TodosController@destroy');

Route::get('todos/{todo}/complete', 'TodosController@complete');
