<?php

Route::get('/', 'PagesController@index');
Route::get('/resume', 'PagesController@resume');
Route::resource('/blog', 'PostsController', ['only' => ['index', 'show']]);
Route::get('/tags/{tag}', 'TagsController@index');
