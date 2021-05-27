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

Route::get('/', 'TestController@home') -> name('home');

Route::get('employee/details/{id}', 'TestController@show') -> name('show');

Route::get('employee/edit/{id}', 'TestController@edit') -> name('edit');
Route::post('employee/update/{id}', 'TestController@update') -> name('update');

Route::get('newemployee', 'TestController@newEmployee') -> name('create');
Route::post('addEmployee', 'TestController@addEmployee') -> name('add');

Route::get('employ/destroy/{id}', 'TestController@destroy') -> name('destroy');
