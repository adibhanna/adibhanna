@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-10 col-lg-8">
        <h1>Articles: {{ $tag }}</h1>

        <ul class="post-list">
            <!-- Loop through all posts -->
            @foreach($articles as $article)
            <li class="post-list__post">
                <a href="/blog/{{ $article->slug }}" class="post-list__link">{{ $article->title }}</a>
                <p class="post-list__preview">{{ $article->description }}</p>
            </li>
            @endforeach
        </ul>
    </div>

    <div class="col-lg-3 col-lg-push-1 col-md-2 right-rail">
        <div class="rail-bio">
            <a href="https://twitter.com/Adib_Hanna" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @Adib_Hanna</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
        </div>
        <hr>
        <div class="tags">
            @foreach($tags as $tag)
                <a href="/tags/{{ $tag->slug }}" class="btn btn-primary btn-xs">
                  {{ $tag->title }} <span class="badge">{{ $tag->articles()->count() }}</span>
                </a>
            @endforeach
        </div>
    </div>
</div>
@endsection()
