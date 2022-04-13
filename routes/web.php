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

Route::get('/', 'ControllerUser@index');

/**
 * USERS
 */
Route::get('/dashboard', 'ControllerUser@index');
Route::get('/usuarios', 'ControllerUser@index');
Route::get('/custumers/create-form', 'ControllerUser@createForm');
Route::post('/custumers/create', 'ControllerUser@create');
Route::get('/customer/show/{id}', 'ControllerUser@show');
Route::put('/customer/edit/{id}', 'ControllerUser@edit');
Route::get('/customer/delete/{id}', 'ControllerUser@destroy');
Route::get('/customer/total', 'ControllerUser@count');
