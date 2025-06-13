<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/', '/movies');

Route::get('/', 'App\Http\Controllers\MovieController@index');
Route::get('/movie', 'App\Http\Controllers\MovieController@index')->name('movie.index');
Route::get('/movie/{movie}', 'App\Http\Controllers\MovieController@show')->name('movie.show');


Route::get('/actor', 'App\Http\Controllers\ActorController@index')-> name ('actor.index');
Route::get('/actor/{actor}', 'App\Http\Controllers\ActorController@show')->name('actor.show');

Route::get('/tv', 'App\Http\Controllers\TvController@index')->name('tv.index');
Route::get('/tv/{tv}', 'App\Http\Controllers\TvController@show')->name('tv.show');