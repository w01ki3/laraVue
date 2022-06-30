<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>laraVue</title>
    <link rel="icon" href="{{ url('img/vkIcon.png') }}" />
    <link rel="shortcut icon" href="{{ url('img/vkIcon.png') }}" type="image/x-icon" />

    <link rel="stylesheet" href="css/app.css">

</head>

<body class="antialiased">
    <div id="app">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="{{ url('img/vkIcon.png') }}" height="50" alt="logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <router-link to="/" class="nav-link" exact>Home</router-link>
                            </li>
                            <li class="nav-item">
                                <router-link to="/link1" class="nav-link" exact>Link - 1</router-link>
                            </li>
                            <li class="nav-item">
                                <router-link to="/link2" class="nav-link" exact>Link - 2</router-link>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <router-view></router-view>
    </div>
    <script type="text/javascript" src="js/app.js"></script>
</body>

</html>