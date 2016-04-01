<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
                    <li><a href="{{ url('/blog') }}">Blog</a></li>
                    <li><a href="{{ url('/contact') }}">Contact</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
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
        <div class="row">
            @yield('content')
        </div>
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
</body>
</html>
