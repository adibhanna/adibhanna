@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1><i class="fa fa-angle-right"></i> {{ $article->title }}</h1>
            <p class="article-metadata">Posted on {{ $article->created_at->formatLocalized('%A %d %B %Y') }} | Tags:
                @if($article->tags->count())
                    @foreach($article->tags as $tag)
                        <a href="/tags/{{ $article->slug }}">{{ $tag->title }}</a>
                    @endforeach
                @else
                    N/A
                @endif
            </p>
            <hr>

            <p>{!! markdown($article->body) !!}</p>

            <br>
            @include('pages.partials.disqus')
        </div>
    </div>
@endsection
