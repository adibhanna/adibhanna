@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-10 col-lg-8">
        <h1>Articles</h1>

        <ul class="post-list">
            @foreach($articles as $article)
            <li class="post-list__post">
                {{--#disqus_thread--}}
                <a href="/blog/{{ $article->slug }}" class="post-list__link">{{ $article->title }}</a>
                <p class="post-list__preview">{{ $article->description }}</p>
            </li>
            @endforeach
        </ul>
        {!! $articles->links() !!}
    </div>

    <div class="col-lg-3 col-lg-push-1 col-md-2 right-rail">
        @include('pages.partials.twitter')
        <hr>
        @include('pages.partials.tags')
    </div>
</div>
@endsection()
