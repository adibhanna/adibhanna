<?php

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/blog', function () {
    return 'coming soon.';
});

Route::get('/resume', function () {
    return response()->download(public_path().'/cv/resume.pdf');
});
