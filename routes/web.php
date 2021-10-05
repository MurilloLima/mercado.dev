<?php


Route::get('/', 'Home\HomeController@welcome')->name('welcome');

Route::get('register/', 'Home\HomeController@register')->name('register');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
