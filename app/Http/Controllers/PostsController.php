<?php

namespace Blog\Http\Controllers;

use Blog\Article;
use Blog\Http\Requests;

/**
 * @author Adib Hanna <adibhanna@gmail.com>
 * Class PostsController
 */
class PostsController extends Controller
{
    /**
     * List the all articles, or filter them by tags.
     *
     * @param null $tag
     * @return View
     */
    public function index($tag = null)
    {
        $articles = Article::listing($tag);

        return view('pages.blog.listing', compact('articles'));
    }

    /**
     * Show a specific blog post.
     *
     * @param  string $slug
     *
     * @return View
     */
    public function show($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();

        // those are used for SEO.
        list($meta_page_title, $meta_post_title, $meta_post_description, $meta_post_url, $meta_post_type) = $this->seoData($article);

        return view('pages.blog.details',
            compact(
                'article',
                'meta_page_title',
                'meta_post_title',
                'meta_post_description',
                'meta_post_url',
                'meta_post_type'
            )
        );
    }

    /**
     * SEO Data.
     *
     * @param $article
     * @return array
     */
    private function seoData($article)
    {
        $meta_page_title = 'Adib Hanna - ' . $article->title;
        $meta_post_title = $article->title;
        $meta_post_description = $article->description;
        $meta_post_url = url()->current();
        $meta_post_type = implode(', ', $article->tags->map(function ($tag) {
            return $tag->title;
        })->toArray());

        return array($meta_page_title, $meta_post_title, $meta_post_description, $meta_post_url, $meta_post_type);
    }
}
