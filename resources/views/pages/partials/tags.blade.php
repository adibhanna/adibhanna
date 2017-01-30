<div class="tags">
    @foreach($tags as $tag)
        <a href="/tags/{{ $tag->slug }}" class='btn btn-xs {{ ( url()->current() == url("/tags/$tag->slug")) ? "btn-danger" : "btn-primary"  }}'>
            {{ $tag->title }} <span class="badge">{{ $tag->articles()->count() }}</span>
        </a>
    @endforeach
</div>
