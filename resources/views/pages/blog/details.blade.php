@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-10 col-lg-8">
            <h1>{{ $article->title }}</h1>
            <p class="article-metadata">Posted on {{ $article->created_at->formatLocalized('%A %d %B %Y') }}</p>
            <hr>
            <p>{!! markdown($article->body) !!}</p>
            <br>
            @include('pages.partials.disqus')
        </div>

        <div class="col-lg-3 col-lg-push-1 col-md-2 right-rail">
            @include('pages.partials.twitter')
            <hr>
            @include('pages.partials.tags')
        </div>
    </div>
@endsection
