<?php


/**
 * Convert some text to Markdown...
 * @param $text
 * @return mixed|string
 */
function markdown($text) {
    return (new ParsedownExtra)->text($text);
}

Route::get('/', 'PagesController@index');
Route::get('/resume', 'PagesController@resume');
Route::resource('/blog', 'PostsController', ['only' => ['index', 'show']]);
Route::get('/tags/{tag}', 'PostsController@index');
