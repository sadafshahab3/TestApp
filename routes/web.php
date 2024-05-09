<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvoiceController;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::post('/', 'App\Http\Controllers\SumController@store');



Route::get('/', 'App\Http\Controllers\SumController@index');





Route::get('/result', 'App\Http\Controllers\SumController@display');
















