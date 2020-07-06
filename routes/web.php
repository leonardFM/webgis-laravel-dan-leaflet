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

//vehicle
Route::get('/vehicle', 'vehicleController@index')->name('vehicle');
Route::get('/vehicle/add', 'vehicleController@create');
Route::post('/warehous/add', 'vehicleController@store')->name('vehicle.add');
Route::get('/vehicle/edit/{vehicle}', 'vehicleController@edit');
Route::put('/vehicle/edit/{vehicle}', 'vehicleController@update');
Route::get('/vehicle/map', 'vehicleController@map');

//warehouse
Route::get('/warehouse', 'warehouseController@index')->name('warehouse');
Route::get('/warehouse/add', 'warehouseController@create');
Route::post('/warehous/add', 'warehouseController@store')->name('warehouse.add');
Route::get('/warehouse/edit/{warehouse}', 'warehouseController@edit');
Route::put('/warehouse/edit/{warehouse}', 'warehouseController@update');
Route::get('/warehouse/map', 'warehouseController@map');

//distributor
Route::get('/distributor', 'distributorController@index')->name('distributor');
Route::get('/distributor/add', 'distributorController@create');
Route::post('/distributor/add', 'distributorController@store')->name('distributor.add');
Route::get('/distributor/edit/{distributor}', 'distributorController@edit');
Route::put('/distributor/edit/{distributor}', 'distributorController@update');
Route::get('/distributor/map', 'distributorController@map');
