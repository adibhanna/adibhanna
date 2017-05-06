@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-10 col-lg-10">
        <div style="margin-top: 10px"></div>
        @foreach($articles as $article)
            <div class="blog-post">
                <h3>
                    <a href="/blog/{{ $article->slug }}" class="post-list__link">{{ $article->title }}</a>
                </h3>

                <p class="meta">Posted on {{ $article->created_at->formatLocalized('%A %d %B %Y') }} | Tags:
                    @if($article->tags->count())
                        @foreach($article->tags as $tag)
                            <a href="/tags/{{ $article->slug }}">{{ $tag->title }}</a>
                        @endforeach
                    @else
                        N/A
                    @endif
                </p>
            </div>

        @endforeach

        {!! $articles->links() !!}
    </div>
</div>
@endsection()
