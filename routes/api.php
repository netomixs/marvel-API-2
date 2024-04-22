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

Route::get('events', 'App\Api\Controllers\Main\EventsMain@getAll');
Route::get('events/{id}', 'App\Api\Controllers\Main\EventsMain@get');
Route::get('events/{id}/characters', 'App\Api\Controllers\Main\EventsMain@getCharacters');
Route::get('events/{id}/creators','App\Api\Controllers\Main\EventsMain@getCreators');
Route::get('events/{id}/stories', 'App\Api\Controllers\Main\EventsMain@getStories');
Route::get('events/{id}/comics', 'App\Api\Controllers\Main\EventsMain@getComics');
Route::get('events/{id}/series', 'App\Api\Controllers\Main\EventsMain@getSeries');

Route::get('series', 'App\Api\Controllers\Main\SeriesMain@getAll');
Route::get('series/{id}', 'App\Api\Controllers\Main\SeriesMain@get');
Route::get('series/{id}/characters', 'App\Api\Controllers\Main\SeriesMain@getCharacters');
Route::get('series/{id}/comics','App\Api\Controllers\Main\SeriesMain@getComics');
Route::get('series/{id}/creators', 'App\Api\Controllers\Main\SeriesMain@getCreators');
Route::get('series/{id}/events', 'App\Api\Controllers\Main\SeriesMain@getEvents');
Route::get('series/{id}/stories', 'App\Api\Controllers\Main\SeriesMain@getStories');

Route::get('stories', 'App\Api\Controllers\Main\StoriesMain@getAll');
Route::get('stories/{id}', 'App\Api\Controllers\Main\StoriesMain@get');
Route::get('stories/{id}/characters', 'App\Api\Controllers\Main\StoriesMain@getCharacters');
Route::get('stories/{id}/comics','App\Api\Controllers\Main\StoriesMain@getComics');
Route::get('stories/{id}/creators', 'App\Api\Controllers\Main\StoriesMain@getCreators');
Route::get('stories/{id}/events', 'App\Api\Controllers\Main\StoriesMain@getEvents');
Route::get('stories/{id}/series', 'App\Api\Controllers\Main\StoriesMain@getSeries');
