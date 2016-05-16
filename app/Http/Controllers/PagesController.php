<?php

namespace Blog\Http\Controllers;

use Illuminate\Http\Request;
use Blog\Http\Requests;

class PagesController extends Controller
{
    /**
     * List the blog posts
     *
     * @return View
     */
    public function index()
    {
        return view('pages.blog.listing');
    }

    /**
     * Show a specific blog post.
     *
     * @return View
     */
    public function about()
    {
        return view('pages.about');
    }

    /**
     * Download my resume.
     *
     * @return Response
     */
    public function resume()
    {
        return response()->download(public_path().'/cv/resume.pdf');
    }
}
