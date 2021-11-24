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
Route::get('/', 'App\Http\Controllers\FrutaController@index') -> name('fruta.index');
Route::get('/fruta/create', 'App\Http\Controllers\FrutaController@create') -> name('fruta.create');
Route::get('/fruta/store', 'App\Http\Controllers\FrutaController@store') -> name('fruta.store');


