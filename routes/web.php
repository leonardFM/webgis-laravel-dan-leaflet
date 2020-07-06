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

Route::get('/dashboard', 'dashboardController@dashboard');

Route::get('/warehouse', 'warehouseController@index');
Route::get('/warehouse/add', 'warehouseController@create');
Route::post('/warehous/add', 'warehouseController@store')->name('warehouse.add');
Route::get('/warehouse/map', 'warehouseController@map');
