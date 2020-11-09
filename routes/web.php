<?php

use Illuminate\Support\Facades\Route;



Route::get('/car/all', '\App\Http\Controllers\CarController@viewCar');
Route::post('/car/add', '\App\Http\Controllers\CarController@addCar');
Route::post('/car/delete', '\App\Http\Controllers\CarController@deleteCar');
Route::get('/car/edit', '\App\Http\Controllers\CarController@editCar');
Route::post('/car/update', '\App\Http\Controllers\CarController@updateCar');