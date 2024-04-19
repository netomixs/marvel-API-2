<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;


Route::get('character', 'App\Api\Controllers\Main\CharacterMain@getAll');
Route::get('character/{id}', 'App\Api\Controllers\Main\CharacterMain@get');
Route::get('character/{id}/comics', 'App\Api\Controllers\Main\CharacterMain@getComic');
Route::get('character/{id}/series', 'App\Api\Controllers\Main\CharacterMain@getSeries');
Route::get('character/{id}/stories', 'App\Api\Controllers\Main\CharacterMain@getStories');
Route::get('character/{id}/events', 'App\Api\Controllers\Main\CharacterMain@getEvent');

Route::get('comic', 'App\Api\Controllers\Main\ComicMain@getAll');
Route::get('comic/{id}', 'App\Api\Controllers\Main\ComicMain@get');
Route::get('comic/{id}/characters', 'App\Api\Controllers\Main\ComicMain@getCharacters');
Route::get('comic/{id}/creators','App\Api\Controllers\Main\ComicMain@getCreators');
Route::get('comic/{id}/stories', 'App\Api\Controllers\Main\ComicMain@getStories');
Route::get('comic/{id}/events', 'App\Api\Controllers\Main\ComicMain@getEvents');
