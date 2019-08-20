<?php

Route::get('/', 'WeatherController@index')->name('index');
Route::get('/show', 'WeatherController@show')->name('show');
