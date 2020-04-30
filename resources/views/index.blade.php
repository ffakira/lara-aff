@extends('layouts.app')

@section('content')
    <div class="img-jumbo-container">
        <img class="img-jumbo" src="images/wallpaper.png" alt="wallpaper.png">
        <div class="text-jumbo-container">
            <h1 class="grey-text text-lighten-3">Akira F. Fukushima</h1>
            <h3 class="grey-text text-lighten-3">Fullstack Web Developer</h3>
        </div>
    </div>
    <div class="container">
        <div id="about">
            <div class="row">
                <div class="col m12">
                    <h3 class="text-bold">About Me</h3>
                    <p>My name is Akira, from Brazil. I am a self-taught developer. And have been programming since 2011.
                        I mainly enjoy
                        backend web development, developing RESTful APIs, configuring NGINX servers and playing around
                        with Docker containers.</p>
                </div>
            </div>
        </div>

        <p class="white-text" id="skills">.</p>
        <div>
            <div class="row">
                <div class="col m12">
                    <h3 class="text-bold">Skills</h3>
                </div>
            </div>
            <div class="row">
                <div class="col m6 s12">
                    <h4>Frontend</h4>
                    <ul class="collection">
                        <li class="collection-item">HTML, CSS, Javascript</li>
                        <li class="collection-item">React</li>
                        <li class="collection-item">Vue</li>
                        <li class="collection-item">jQuery <span
                                class="badge red white-text text-bold">It's 2020!</span></li>
                    </ul>
                </div>
                <div class="col m6 s12">
                    <h4>Backend</h4>
                    <ul class="collection">
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
                <div class="col m12">
                    <h3 class="text-bold">Projects</h3>
                </div>

                <div class="col m4">
                    <h4>Go Manage</h4>
                    <p>
                        <span class="text-bold">Source code: </span>
                        <a target="_blank" href="https://github.com/ffakira/lara-bsr">Click here</a>
                    </p>
                    <p>
                        <span class="text-bold">Description:</span> A partial solution for ordering management system.
                    </p>
                    <p>
                        <span class="text-bold">Framework:</span> Laravel and Vue
                    </p>
                </div>

                <div class="col m4">
                    <h4>HexaBeez</h4>
                    <p>
                        <span class="text-bold">Source code: </span>
                        <a href="https://github.com/ffakira/hexabeez">Click here</a>
                    </p>
                    <p>
                        <span class="text-bold">Description:</span> Inventory management system
                    </p>
                    <p>
                        <span class="text-bold">Framework:</span> Express and Vue
                    </p>
                </div>

                <div class="col m4">
                    <h4>Some old projects</h4>
                    <p>Availble on my old <a target="_blank" href="https://github.com/Akiraff2015/projects">Github</a>
                        repository.</p>
                </div>
            </div>
        </div>

        <p class="white-text" id="contact">.</p>
        <div id="contact">
            <div class="row">
                <div class="col s12">
                    <h3 class="text-bold">Contact Me</h3>
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
                                <input name="phone" type="text" id="phone">
                                <label for="phone">Phone</label>
                            </div>
                        </div>
                    </div>

                    <div class="input-field col s12">
                        <textarea name="message" id="textarea1" class="materialize-textarea"></textarea>
                        <label for="textarea1">Write something nice :)</label>
                    </div>

                    <div class="col s12">
                        <div class="row">
                            <div class="input-field col s6">
                                <button class="btn wave-effect red" type="submit">
                                    Send
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="row">
                <div class="col sm-12">
                    <p>Alternatively feel free to reach me out:</p>
                    <a target="_blank" href="https://linkedin.com/in/akiraff">
                        <button class="btn black wave-effect">LinkedIn</button>
                    </a>

                    <a target="_blank" href="https://github.com/ffakira">
                        <button class="btn black wave-effect">
                            Github
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
