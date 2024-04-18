<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
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

 
Route::get('hola','App\Http\Controllers\Api\UserController@index');
Route::get('m','App\Api\Infrestructure\Repository\CharacterRepository@getAll');
Route::get('m','App\Api\Controllers\Main\CharacterMain@getAll');