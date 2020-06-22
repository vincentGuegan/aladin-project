<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Aladin Project</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- I call the css of the public folder I got by compiling the project -->

    </head>
    <body>
        <div id="app"> <!-- app from app.js created by compilation is called with the below script -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Aladin Project</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <router-link to="/home" class="nav-link">Accueil</router-link>
                        </li>
                        <li class="nav-item">
                            <router-link to="/products" class="nav-link">Nos Produits</router-link>
                        </li>
                        <li class="nav-item">
                            <router-link to="/articles" class="nav-link">Nos Articles</router-link>
                        </li>
                        <li class="nav-item">
                            <router-link to="/sites" class="nav-link">Nos Sites</router-link>
                        </li>
                        <li class="nav-item">
                            <router-link to="/login" class="nav-link">S'identifier</router-link>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container">
                <!-- route outlet -->
                <!-- component matched by the route will render here -->
                <router-view></router-view>
            </div>
            
        </div>
        <script src="{{ asset('js/app.js') }}"></script> <!-- I call vuejs of the public folder I got by compiling the project-->
    </body>
</html>
