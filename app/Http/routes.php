<?php

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/resume', 'PagesController@resume');
Route::resource('/posts', 'PostsController', ['only' => ['index', 'show']]);
