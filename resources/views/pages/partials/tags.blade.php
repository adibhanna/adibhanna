<div class="tags">
    @foreach($tags as $tag)
        <a href="/tags/{{ $tag->slug }}" class="btn btn-primary btn-xs">
            {{ $tag->title }} <span class="badge">{{ $tag->articles()->count() }}</span>
        </a>
    @endforeach
</div>
