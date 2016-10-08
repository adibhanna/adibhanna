@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-9">
            <h3>Hello, My name is Adib Hanna.</h3> <br>
            <p>I'm a Senior Web Developer from Beirut, Lebanon.</p>
            <p>I've been working in this field since 2011. Bellow are some of the technologies I use:</p>
            <strong>Favorite Languages:</strong>
            <span class="label label-primary">PHP</span>
            <span class="label label-primary">Javascript</span>
            <span class="label label-primary">Golang</span>
            <span class="label label-primary">Cypher</span>
            <span class="label label-primary">SQL</span>
            <br>
            <strong>Frameworks &amp; Libraries :</strong>
            <span class="label label-primary">Laravel (favorite)</span>
            <span class="label label-primary">Symfony</span>
            <span class="label label-primary">Codigniter</span>
            <span class="label label-primary">Yii</span>
            <span class="label label-primary">Kohana</span>
            <span class="label label-primary">Nodejs</span>
            <span class="label label-primary">Expressjs</span>
            <span class="label label-primary">Vuejs</span>
            <br>
            <strong>Tools &amp; Others:</strong>
            <span class="label label-primary">Neo4j</span>
            <span class="label label-primary">Mysql</span>
            <span class="label label-primary">MongoDB</span>
            <span class="label label-primary">Redis</span>
            <span class="label label-primary">Nginx</span>
            <span class="label label-primary">Apache</span>
            <span class="label label-primary">Elasticsearch</span>
            <span class="label label-primary">Logstash</span>
            <span class="label label-primary">Kibana</span>
            <span class="label label-primary">Linux</span>
            <span class="label label-primary">AWS</span>
            <span class="label label-primary">GIT</span>
            <span class="label label-primary">Docker</span>
            <span class="label label-primary">Vagrant</span>
            <span class="label label-primary">PHPUnit</span>
            <span class="label label-primary">Behat</span>
            <span class="label label-primary">PHPSpec</span>
            <span class="label label-primary">Design Patterns</span>
            <span class="label label-primary">Refactoring</span>
            <span class="label label-primary">Test Driven Developement</span>
            <span class="label label-primary">SOLID Design Patterns</span>
            <span class="label label-primary">Automated Deployments / CI</span>
            <hr>
            <h4>Things I can help you with:</h4>
            <ul>
                <li>Backend &amp; API Development.</li>
                <li>Application Deployments &amp; Continuous Integration.</li>
                <li>Application Architecture and Design.</li>
                <li>Refactoring/Migrating old PHP products to <a href="https://laravel.com" target="_blank">Laravel.</a></li>
                <li>Choosing the right technologies for your product.</li>
                <li>Frontend development using <a href="http://vuejs.org/" target="_blank">Vuejs.</a></li>
            </ul>
        </div>

        <div class="col-md-3">
            <img src="{{ asset('img/adib1.jpg') }}" alt="Adib Hanna" class="img-thumbnail" width="200px" style="margin-bottom: 10px;">
            <p>
                <i class="fa fa-google"></i> Email: <a href="mailto:adibhanna@gmail.com">adibhanna@gmail.com</a> <br>
                <i class="fa fa-skype"></i> Skype: adib_hanna
            </p>
            <a href="/resume" target="_blank" class="btn btn-sm btn-default" style="margin-top: 5px;"><i class="fa fa-download"></i> Download my resume</a>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-4">
            <p>You can also find me on these slack groups:</p>
            <ul>
                <li>Vuejs: <a href="http://vueslack.slack.com" target="_blank">vueslack.slack.com</a></li>
                <li>Laravel: <a href="http://larachat.slack.com" target="_blank">larachat.slack.com</a></li>
                <li>Emberjs: <a href="http://embercommunity.slack.com" target="_blank">embercommunity.slack.com</a></li>
                <li>Neo4j: <a href="http://neo4j-users.slack.com" target="_blank">neo4j-users.slack.com</a></li>
                <li>Mena Devs: <a href="http://mena-devs.slack.com" target="_blank">mena-devs.slack.com</a></li>
                <li>Golang: <a href="https://gophers.slack.com/" target="_blank">gophers.slack.com/</a></li>
            </ul>
        </div>
        <div class="col-md-5">
            <p>Other interests and hobbies:</p>
            <ul>
                <li>
                    Photography: <a href="http://adibhanna.deviantart.com/" target="_blank">Deviantart (archived)</a> - <a href="https://www.instagram.com/adib_hanna/" target="_blank">Instagram</a>
                </li>
                <li>Chess: <a href="https://ratings.fide.com/card.phtml?event=5301513" target="_blank">Fide.com</a> - <a href="http://www.chess.com">chess.com</a> (usename: Adib_Takween)</li>
                <li>Music: Composition, Bass Guitar.</li>
                <li>Reading, Painting, Bodybuilding.</li>
            </ul>
        </div>
    </div>
@stop
