<?php

use Illuminate\Http\Request;
use App\Farm;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
   
});

Route::get('farms', 'FarmController@index');
Route::get('farms/{farm}', 'FarmController@show');
Route::post('farms', 'FarmController@store');
Route::put('farms/{farm}', 'FarmController@update');
Route::delete('farms/{farm}', 'FarmController@delete');
Route::post('register', 'Auth\RegisterController@register');
Route::post('/login', 'Auth\LoginController@login');

Route::post('/logout', 'Auth\LoginController@logout');