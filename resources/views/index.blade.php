@extends('layouts.app')

@section('content')
    <div class="img-jumbo-container">
        <img class="img-jumbo" src="images/wallpaper.png" alt="wallpaper.png">
        <div class="text-jumbo-container">
            <h1 class="grey-text text-lighten-3">Akira F. Fukushima</h1>
            <h3 class="grey-text text-lighten-3">Fullstack Web Developer</h3>
        </div>
        <div class="cta-jumbo-container center">
            <a href="#contact">
                <button style="display:inline-flex; vertical-align:middle;"
                        class="btn deep-purple darken-1 waves-effect btn-large">
                    <span style="margin-right:10px;">Let's setup for a coffee talk!</span> <i class="material-icons">send</i>
                </button>
            </a>
        </div>
    </div>
    <div class="container">
        <div id="about">
            <div class="row">
                <div class="col m12">
                    <h3 class="text-bold indigo-text text-darken-4">About Me</h3>
                    <p class="grey-text text-darken-2">
                        My name is Akira, and I've come a long way from home in Brazil. Since 2011, I have been on a
                        self-taught
                        journey and I can proudly say that I am a self-taught developer. My areas of expertise are
                        Fullstack Development,
                        but I am in sheer joy when I am using my skills as a backend web developer, doing RESTful APIs,
                        configuring NGINX
                        servers and messing with Docker containers.
                    </p>
                </div>
            </div>
        </div>

        <p class="white-text" id="skills">.</p>
        <div>
            <div class="row">
                <div class="col m12">
                    <h3 class="indigo-text text-darken-4 text-bold">Skills</h3>
                </div>
            </div>
            <div class="row">
                <div class="col m6 s12">
                    <h4 class="indigo-text text-darken-2">Frontend</h4>
                    <ul class="grey-text text-darken-2 collection">
                        <li class="collection-item">HTML, CSS, Javascript</li>
                        <li class="collection-item">React</li>
                        <li class="collection-item">Vue</li>
                        <li class="collection-item">jQuery
                            <span class="badge red white-text text-bold">It's 2020!</span>
                        </li>
                    </ul>
                </div>
                <div class="col m6 s12">
                    <h4 class="indigo-text text-darken-2">Backend</h4>
                    <ul class="grey-text text-darken-2 collection">
                        <li class="collection-item">PHP, Laravel, Symphony</li>
                        <li class="collection-item">Python, Flask</li>
                        <li class="collection-item">Express, Nodejs</li>
                        <li class="collection-item">Mongo, SQL</li>
                    </ul>
                </div>

            </div>
        </div>

        <p class="white-text" id="projects">.</p>
        <div>
            <div class="row">
                <div class="col s12">
                    <h3 class="text-bold indigo-text text-darken-4">Projects</h3>
                    <p class="grey-text text-darken-2">Click on <i class="fa fa-github"></i> icon to view the source
                        code.</i></p>
                </div>

                <div class="col m12 s12 l4">
                    <div class="card">
                        <div class="card-image">
                            <a target="_blank" href="https://github.com/ffakira/lara-bsr"
                               class="btn-floating btn-large halfway-fab waves-effect waves-light teal accent-4"><i
                                    class="fa fa-github"></i></a>
                        </div>
                        <div class="card-content">
                            <h4 class="indigo-text text-darken-2">Go Manage</h4>
                            <h5 class="indigo-text text-darken-2">Description</h5>
                            <p class="grey-text text-darken-2">A partial solution for ordering management system.
                                Helping in a better and efficient
                                communication platform system.</p>
                            <h5 class="indigo-text text-darken-2">Technologies used</h5>
                            <p class="grey-text text-darken-2">PHP, Laravel, Vue, Javascript, HTML, CSS, Sqlite,
                                Bootstrap 4</p>

                            <button style="margin-top:20px;" class="btn teal accent-4 waves-effect">Live Demo</button>
                        </div>
                    </div>
                </div>

                <div class="col m12 l4">
                    <div class="card">
                        <div class="card-image">
                            <a target="_blank" href="https://github.com/ffakira/hexabeez"
                               class="btn-floating btn-large halfway-fab waves-effect waves-light teal accent-4"><i
                                    class="fa fa-github"></i></a>
                        </div>
                        <div class="card-content">
                            <h4 class="indigo-text text-darken-2">HexaBeez</h4>
                            <h5 class="indigo-text text-darken-2">Description</h5>
                            <p class="grey-text text-darken-2">An inventory management system, in creating RESTful
                                API.</p> <br>
                            <h5 class="indigo-text text-darken-2">Technologies used</h5>
                            <p class="grey-text text-darken-2">Express, Nodejs, Vue, MongoDB</p> <br>
                            <button style="margin-top:20px;" class="btn teal accent-4 waves-effect">Live Demo</button>
                        </div>
                    </div>
                </div>

                <div class="col m12 l4">
                    <div class="card">
                        <div class="card-image">
                            <a target="_blank" href="https://github.com/ffakira/lara-bsr"
                               class="btn-floating btn-large halfway-fab waves-effect waves-light teal accent-4"><i
                                    class="fa fa-github"></i></a>
                        </div>
                        <div class="card-content">
                            <h4 class="indigo-text text-darken-2">Old Projects</h4>
                            <h5 class="indigo-text text-darken-2">Description</h5>
                            <p class="grey-text text-darken-2">This projects are over three years old and are considered
                                legacy. And does not reflect upon my
                                current development skills.</p>
                            <h5 class="indigo-text text-darken-2">Technologies used</h5>
                            <p class="grey-text text-darken-2">HTML, CSS, Javascript, jQuery, AngularJS, Express,
                                Nodejs, MongoDB, Materialize, Bootstrap 3</p>

                            <button style="margin-top:20px;" class="btn grey dark-4">Unavailable</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <p class="white-text" id="contact">.</p>
        <div id="contact">
            <div class="row">
                <div class="col s12">
                    <h3 class="text-bold indigo-text text-darken-4">Contact Me</h3>
                </div>

                <form action="/contact/store" method="POST">
                    @csrf
                    <div class="col s12">
                        <div class="row">
                            <div class="input-field col s6">
                                <input name="name" id="name" type="text">
                                <label for="name">Name</label>
                            </div>

                            <div class="input-field col s6">
                                <input name="phone" type="email" id="phone">
                                <label for="phone">E-mail</label>
                            </div>
                        </div>
                    </div>

                    <div class="input-field col s12">
                        <textarea name="message" id="textarea1" class="materialize-textarea"></textarea>
                        <label for="textarea1">Write something nice :)</label>
                    </div>

                    <div class="col s12">
                        <div class="row">
                            <div class="input-field col s12">
                                <button style="display:inline-flex; vertical-align: middle;"
                                        class="btn wave-effect blue lighten-1" type="submit">
                                    <span style="margin-right:10px;">Send</span> <i class="material-icons">send</i>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="row">
                <div class="col sm-12">
                    <p class="grey-text text-darken-2">Alternatively feel free to reach me out:</p>
                    <a target="_blank" href="https://linkedin.com/in/akiraff">
                        <button class="btn blue lighten-1 wave-effect">
                            <i class="fa fa-linkedin"></i> LinkedIn
                        </button>
                    </a>

                    <a target="_blank" href="https://github.com/ffakira">
                        <button class="btn blue lighten-1 wave-effect">
                            <i class="fa fa-github"></i> Github
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
