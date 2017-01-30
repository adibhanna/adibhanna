@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-10 col-lg-10">
        <h2 style="margin-bottom: 15px">Articles</h2>
        @foreach($articles as $article)
            <div class="blog-post">
                <strong>
                    <a href="/blog/{{ $article->slug }}" class="post-list__link"><i class="fa fa-angle-right"></i> {{ $article->title }}</a>
                </strong>

                <br>

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
