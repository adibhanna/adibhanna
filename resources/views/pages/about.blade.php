@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-9">
            <h3>Hello, My name is Adib Hanna.</h3> <br>
            <p>I'm a <u>Software Developer</u> from Beirut, Lebanon.</p>
            <p>I've been working in this field since 2011. Bellow are some of the technologies I use:</p>
            <strong>Languages:</strong>
            <span class="label label-primary">PHP</span>
            <span class="label label-primary">Golang</span>
            <span class="label label-primary">Javascript</span>
            <span class="label label-primary">Lua</span>
            <span class="label label-primary">HTML5</span>
            <span class="label label-primary">CSS</span>
            <span class="label label-primary">SQL</span>
            <span class="label label-primary">Cypher</span>
            <br>
            <strong>Frameworks &amp; Libraries :</strong>
            <span class="label label-primary">Laravel 3,4,5..</span>
            <span class="label label-primary">Symfony</span>
            <span class="label label-primary">Codigniter</span>
            <span class="label label-primary">Nodejs</span>
            <span class="label label-primary">Expressjs</span>
            <span class="label label-primary">Loopback</span>
            <span class="label label-primary">Meteorjs</span>
            <span class="label label-primary">Vuejs</span>
            <span class="label label-primary">Emberjs</span>
            <span class="label label-primary">Reactjs</span>
            <span class="label label-primary">Socket.io</span>
            <span class="label label-primary">D3.js</span>
            <span class="label label-primary">Alchemy.js</span>
            <span class="label label-primary">jQuery</span>
            <br>
            <strong>Tools &amp; Others:</strong>
            <span class="label label-primary">Neo4j</span>
            <span class="label label-primary">Mysql</span>
            <span class="label label-primary">RethinkDB</span>
            <span class="label label-primary">MongoDB</span>
            <span class="label label-primary">Redis</span>
            <span class="label label-primary">Nginx</span>
            <span class="label label-primary">Apache</span>
            <span class="label label-primary">Elasticsearch</span>
            <span class="label label-primary">Kibana</span>
            <span class="label label-primary">Logstash</span>
            <span class="label label-primary">Linux</span>
            <span class="label label-primary">AWS: EC2...</span>
            <span class="label label-primary">GIT</span>
            <span class="label label-primary">Docker</span>
            <span class="label label-primary">Vagrant</span>
            <span class="label label-primary">PHPUnit</span>
            <span class="label label-primary">Behat</span>
            <span class="label label-primary">PHPSpec</span>
            <span class="label label-primary">Codeception</span>
            <span class="label label-primary">Design Patterns</span>
            <span class="label label-primary">Refactoring</span>
            <span class="label label-primary">Domain Driven Design</span>
            <span class="label label-primary">Behavior Driven Developement</span>
            <span class="label label-primary">Test Driven Developement</span>
            <span class="label label-primary">SOLID Design Patterns</span>
            <span class="label label-primary">Machine Learning</span>
            <span class="label label-primary">Natural Language Processing</span>
            <span class="label label-primary">Automated Deployments / CI</span>
            <br><br>
            <p><a href="/resume" target="_blank"><i class="fa fa-download"></i> Download my resume.</a></p>
        </div>

        <div class="col-md-3">
            <img src="{{ asset('img/adib1.jpg') }}" alt="Adib Hanna" class="img-circle" width="200px">
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <strong>Contact:</strong>
            <p>
                <i class="fa fa-google"></i> Email: <a href="mailto:adibhanna@gmail.com">adibhanna@gmail.com</a> <br>
                <i class="fa fa-skype"></i> Skype: adib_hanna <br>
            </p>
        </div>
        <div class="col-md-3">
            <p>You can also find me on these slack groups:</p>
            <ul>
                <li><a href="http://vueslack.slack.com" target="_blank">vueslack.slack.com</a></li>
                <li><a href="http://larachat.slack.com" target="_blank">larachat.slack.com</a></li>
                <li><a href="http://embercommunity.slack.com" target="_blank">embercommunity.slack.com</a></li>
                <li><a href="http://neo4j-users.slack.com" target="_blank">neo4j-users.slack.com</a></li>
                <li><a href="http://mena-devs.slack.com" target="_blank">mena-devs.slack.com</a></li>
            </ul>
        </div>
        <div class="col-md-3">
            <p>Other interests and hobbies:</p>
            <ul>
                <li>
                    Photography: <a href="http://adibhanna.deviantart.com/" target="_blank">Deviantart (archived)</a> - <a href="https://www.instagram.com/adib_hanna/" target="_blank">Instagram</a>
                </li>
                <li>Chess: <a href="https://ratings.fide.com/card.phtml?event=5301513" target="_blank">Fide.com</a> - <a href="http://www.chess.com">chess.com</a> (usename: Adib_Takween)</li>
                <li>Music: Composition, Bass guitar, some classical guitar.</li>
                <li>Reading, Painting, Bodybuilding.</li>
            </ul>
        </div>
    </div>
@stop
