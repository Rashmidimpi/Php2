<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::apiResource('homes', 'app\Http\Controllers\HomeController');

Route::get('home', 'App\Http\Controllers\HomeController@index');
// Route::get('todor', 'App\Http\Controllers\TodoRController@getAll');
// Route::get('todor/{todor}', 'TodoRController@show');
Route::post('home', 'HomeController@store');
Route::post('home', 'App\Http\Controllers\HomeController@store');
Route::put('home/{id}', 'App\Http\Controllers\HomeController@update');
Route::delete('home/{id}', 'App\Http\Controllers\HomeController@destroy');
