<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Landing page website">
        <meta name="keywords" content="akiraff, akira, akira fukushima, web developer,
        developer, engineer, software engineer, javascript, vue, js, python, ecmascript,
        php, laravel, express">
        <meta name="author" content="Akira F. Fukushima">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Akira F. Fukushima</title>

        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

        <link rel="stylesheet" href="css/app.css">

        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
{{--        <script type="application/javascript" src="js/index.js"></script>--}}
    </head>

    <body>
        <div class="page-container">
            <div class="wrap-container">
                @include('layouts.nav')
                @yield('content')
            </div>
            <footer class="grey-text text-darken-2">
                <div style="text-align: center;">&copy; 2011-2020 &lambda;kiraff || Developed with Laravel &hearts;</div>
            </footer>
        </div>
    </body>
</html>
