<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">Adib Hanna</a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <ul class="nav navbar-nav">
                {{-- <li class="{{ set_active('blog') }}"><a href="{{ url('/blog') }}">Blog</a></li> --}}
                {{-- <li class="{{ set_active('work') }}"><a href="{{ url('/work') }}">Work</a></li> --}}
            </ul>

            <ul class="nav navbar-nav navbar-right">
                @include('pages.partials.social')
            </ul>
        </div>
    </div>
    </div>
</nav>
