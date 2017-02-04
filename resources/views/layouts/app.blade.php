<!DOCTYPE html>
<html lang="en">
<head>
    @include('pages.partials.head')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.9.0/styles/github.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.9.0/highlight.min.js"></script>

</head>
<body id="app-layout">

    @include('pages.partials.menu')

    <div class="container">
        @yield('content')

        <hr>
        @include('pages.partials.footer')
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
   <script>
    $(document).ready(function() {
      $('pre code').each(function(i, block) {
        hljs.highlightBlock(block);
      });
    });
    </script>

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-76520509-1', 'auto');
      ga('send', 'pageview');
    </script>

    <script id="dsq-count-scr" src="//adibhannablog.disqus.com/count.js" async></script>

</body>
</html>
