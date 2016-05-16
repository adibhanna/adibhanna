<?php

namespace Blog\Http\Controllers;

use Illuminate\Http\Request;

use Blog\Http\Requests;

class PostsController extends Controller
{
    /**
     * Home page which is the same as the blog post listing.
     *
     * @return View
     */
    public function index()
    {
        return view('pages.blog.listing');
    }

    /**
     * Show a specific blog post.
     * @param  string|int $slugOrId
     * @return View
     */
    public function show($slugOrId)
    {
        return $slugOrId;
    }
}
