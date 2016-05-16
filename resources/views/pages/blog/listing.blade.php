@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-10 col-lg-8">
        <h1>Articles</h1>

        <ul class="post-list">
            <li class="post-list__post">
            <a href="https://mattstauffer.co/blog/using-sparkpost-for-transactional-emails-with-laravel" class="post-list__link">Using SparkPost for Transactional emails with Laravel</a>
            <p class="post-list__preview">Recently, Mandrill announced that they'd be sunsetting their transactional email service and instead rolling it in to a secondary service for paid Mai...</p>
            </li>
            <li class="post-list__post">
            <a href="https://mattstauffer.co/blog/getting-started-using-vues-vue-router-for-single-page-apps" class="post-list__link">Getting started using Vue's Vue-router for single page apps</a>
            <p class="post-list__preview">One of the things I love most about Vue.js is that it works on the simplest of pages with the simplest of components. You don't need any complicated b...</p>
            </li>
            <li class="post-list__post">
            <a href="https://mattstauffer.co/blog/how-to-use-vueify-es2015-and-browserify-on-your-vue-projects-with-laravel-elixir" class="post-list__link">How to use Vueify, ES2015, and Browserify on your Vue projects with Laravel Elixir</a>
            <p class="post-list__preview">I just wrote up a tutorial on the Tighten Blog about using Laravel Elixir to make it easy to add Vueify and use ES2015 on your Vue projects.

            Laravel ...</p>
            </li>
            <li class="post-list__post">
            <a href="https://mattstauffer.co/blog/how-i-created-a-password-less-email-only-authentication-system-in-laravel" class="post-list__link">How I created a password-less, email-only authentication system in Laravel</a>
            <p class="post-list__preview">I just wrote up a tutorial on the Tighten Blog about how to create a password-less login system in Laravel.

            If you've never had the chance to work wi...</p>
            </li>
            <li class="post-list__post">
            <a href="https://mattstauffer.co/blog/how-to-merge-only-specific-commits-from-a-pull-request" class="post-list__link">How to merge only specific commits from a pull request</a>
            <p class="post-list__preview">Tonight I was looking at pull requests to all of my open source repositories, and there was a pull request that had started out great and then been ru...</p>
            </li>
            <li class="post-list__post">
            <a href="https://mattstauffer.co/blog/strict-mode-and-other-mysql-customizations-in-laravel-5-2" class="post-list__link">"Strict" mode and other MySQL customizations in Laravel 5.2</a>
            <p class="post-list__preview">If you remember my post How To Disable MySQL Strict Mode on Laravel Forge (Ubuntu), you'll remember that MySQL 5.7 introduced something we've been cas...</p>
            </li>
            <li class="post-list__post">
            <a href="https://mattstauffer.co/blog/all-my-projects-asking-for-open-source-help" class="post-list__link">All My Projects: Asking for Open-Source Help</a>
            <p class="post-list__preview">If you listen to my podcast or follow me on Twitter, you probably already know that my life has gotten a little bit busier than usual as I work to fin...</p>
            </li>
            <li class="post-list__post">
            <a href="https://mattstauffer.co/blog/an-introduction-to-statamic-v2-beta-a-laravel-based-flat-file-cms" class="post-list__link">An introduction to Statamic v2 beta, a Laravel-based flat-file CMS</a>
            <p class="post-list__preview">After many weeks of preparation, we finally launched the long-awaited Tighten blog last week. It's been such a pleasure getting to have my hands on li...</p>
            </li>
            <li class="post-list__post">
            <a href="https://mattstauffer.co/blog/multiple-authentication-guard-drivers-including-api-in-laravel-5-2" class="post-list__link">Multiple authentication guard drivers (including API) in Laravel 5.2</a>
            <p class="post-list__preview">Let's get back to Laravel 5.2 features, shall we? 5.2 introduced a significant boost to the power of the entire authentication system, including makin...</p>
            </li>
            <li class="post-list__post">
            <a href="https://mattstauffer.co/blog/the-auth-scaffold-in-laravel-5-2" class="post-list__link">The auth scaffold in Laravel 5.2</a>
            <p class="post-list__preview">If you're like me, many of the applications you build in Laravel have a similar Saas-type framework: user signup, user login, password reset, public s...</p>
            </li>
        </ul>
    </div>

    <div class="col-lg-3 col-lg-push-1 col-md-2 right-rail">
        <div class="rail-bio">
            <a href="https://twitter.com/Adib_Hanna" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @Adib_Hanna</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
        </div>
        <hr>
        <div class="tags">
            <a href="#" class="btn btn-primary btn-xs">
              Laravel <span class="badge">4</span>
            </a>
            <a href="#" class="btn btn-primary btn-xs">
              Vuejs <span class="badge">4</span>
            </a>
            <a href="#" class="btn btn-primary btn-xs">
              AngularJS <span class="badge">4</span>
            </a>
            <a href="#" class="btn btn-primary btn-xs">
              AWS <span class="badge">4</span>
            </a>
            <a href="#" class="btn btn-primary btn-xs">
              Emberjs <span class="badge">4</span>
            </a>
        </div>
    </div>
</div>
@endsection()
