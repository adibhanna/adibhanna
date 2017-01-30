@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-9">
            <h3>Hi, I'm Adib Hanna.</h3>
            <p><strong><i class="fa fa-angle-right"></i> Senior Software Engineer from Beirut, Lebanon. I've been working in this field since 2011.</strong></p>
            <br>

            <strong><i class="fa fa-angle-right"></i> Things I can help you with:</strong>
            <ul class="margin-top-10">
                <li>Backend &amp; API Development using PHP/<a href="https://laravel.com" target="_blank">Laravel</a> - <a href="https://nodejs.org" target="_blank">Nodejs</a>.</li>
                <li>Application Deployments &amp; Continuous Integration.</li>
                <li>Application Architecture and Design.</li>
                <li>Refactoring/Migrating old PHP products.</li>
                <li>Nodejs:
                    <a href="https://expressjs.com" target="_blank">ExpressJs</a>,
                    <a href="http://loopback.io/" target="_blank">Loopback</a>.
                </li>
                <li>Frontend SPA development using <a href="http://vuejs.org/" target="_blank">Vuejs.</a></li>
            </ul>
            <br>
             <div class="row">
                <div class="col-md-5">
                    <strong><i class="fa fa-angle-right"></i> You can also find me on these slack groups:</strong>
                    <ul class="margin-top-10">
                        <li>Vuejs: <a href="http://vueslack.slack.com" target="_blank">vueslack.slack.com (creator)</a></li>
                        <li>Laravel: <a href="http://larachat.slack.com" target="_blank">larachat.slack.com</a></li>
                        <li>Emberjs: <a href="http://embercommunity.slack.com" target="_blank">embercommunity.slack.com</a></li>
                        <li>Neo4j: <a href="http://neo4j-users.slack.com" target="_blank">neo4j-users.slack.com</a></li>
                        <li>Mena Devs: <a href="http://mena-devs.slack.com" target="_blank">mena-devs.slack.com</a></li>
                        <li>Golang: <a href="https://gophers.slack.com/" target="_blank">gophers.slack.com/</a></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <strong><i class="fa fa-angle-right"></i> Other interests and hobbies:</strong>
                    <ul class="margin-top-10">
                        <li>Chess: <a href="https://ratings.fide.com/card.phtml?event=5301513" target="_blank">Fide.com</a> - <a href="http://www.chess.com">chess.com</a> (usename: Adib_Takween)</li>
                        <li>Music: Composition, Bass Guitar.</li>
                        <li>Reading, Painting, Bodybuilding.</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            @include('pages.partials.twitter')
            <img src="{{ asset('img/me.jpg') }}" alt="Adib Hanna" class="img-thumbnail" width="200px" style="margin-bottom: 10px;">
            <p>
                <i class="fa fa-google"></i> Email: <a href="mailto:adibhanna@gmail.com">adibhanna@gmail.com</a> <br>
                <i class="fa fa-skype"></i> Skype: adib_hanna
            </p>
            <a href="/resume" target="_blank" class="btn btn-sm btn-default" style="margin-top: 5px;"><i class="fa fa-download"></i> Download my resume</a>
        </div>
    </div>
@stop
