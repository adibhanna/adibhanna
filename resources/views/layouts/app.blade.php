<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="Adib Hanna, Software developer, Chess player, Musician, Artist..." name="description">
    <meta content="Adib Hanna" name="author">
    <title>Adib Hanna</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}">Adib Hanna</a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <ul class="nav navbar-nav">
                    <!-- <li><a href="https://medium.com/@Adib_Hanna">Medium</a></li> -->
                    <li><a href="{{ url('/about') }}">About</a></li>
                    <!-- <li><a href="{{ url('/music') }}">Music</a></li> -->
                    <!-- <li><a href="{{ url('/random') }}">Random</a></li> -->
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="https://medium.com/@Adib_Hanna" target="_blank">
                        <i class="fa fa-medium"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/adibhanna" target="_blank">
                        <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://github.com/adibhanna" target="_blank">
                        <i class="fa fa-github"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://plus.google.com/113619238331121062947" target="_blank">
                        <i class="fa fa-google-plus"></i>
                        </a>
                    </li>
                    <li>
                        <a href="http://linkedin.com/in/adibhanna" target="_blank">
                        <i class="fa fa-linkedin"></i>
                        </a>
                    </li>
                </ul>
            </div>
            </div>
        </div>
    </nav>

    <div class="container">
        @yield('content')
        <hr>
        <footer class="footer">
            <div class="row">
                <div class="col-md-6">
                    <p>Copyright © {{ date("Y") }} - Adib Hanna</p>
                </div>
                <div class="col-md-6">
                    <div class="contact text-right">
                        <ul class="list-inline">
                            <li>
                                <a href="https://medium.com/@Adib_Hanna" target="_blank">
                                <i class="fa fa-medium"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/adibhanna" target="_blank">
                                <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com/adibhanna" target="_blank">
                                <i class="fa fa-github"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://plus.google.com/113619238331121062947" target="_blank">
                                <i class="fa fa-google-plus"></i>
                                </a>
                            </li>
                            <li>
                                <a href="http://linkedin.com/in/adibhanna" target="_blank">
                                <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-76520509-1', 'auto');
      ga('send', 'pageview');

    </script>
</body>
</html>
