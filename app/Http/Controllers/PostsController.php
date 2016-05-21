<?php

namespace Blog\Http\Controllers;

use Blog\Tag;
use Blog\Article;
use Blog\Http\Requests;
use Illuminate\Http\Request;

/**
 * @author Adib Hanna <adibhanna@gmail.com>
 * Class PostsController
 */
class PostsController extends Controller
{
    /**
     * Home page which is the same as the blog post listing.
     *
     * @return View
     */
    public function index()
    {
        $articles = Article::orderBy('created_at', 'desc')->paginate(10);

        $tags = Tag::has('articles', '>', 0)->get();

        return view('pages.blog.listing', compact('articles', 'tags'));
    }

    /**
     * Show a specific blog post.
     *
     * @param  string|int $slugOrId
     *
     * @return View
     */
    public function show($slugOrId)
    {
        return $slugOrId;
    }
}
