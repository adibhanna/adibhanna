<?php

/**
 * Set active class to menu links.
 *
 * @param $path
 * @param string $active
 * @return string
 */
function set_active($path, $active = 'active') {
    return call_user_func_array('Request::is', (array)$path) ? $active : '';
}


/**
 * Convert some text to Markdown...
 * @param $text
 * @return mixed|string
 */
function markdown($text) {
    return (new ParsedownExtra)->text($text);
}

Route::get('/', 'PagesController@index');
Route::get('/work', 'PagesController@work');
Route::get('/resume', 'PagesController@resume');
Route::resource('/blog', 'PostsController', ['only' => ['index', 'show']]);
Route::get('/tags/{tag}', 'PostsController@index');
