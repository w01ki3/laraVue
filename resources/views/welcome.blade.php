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
                <ul class="nav">
                    <li class="nav-item">
                      <router-link class="nav-link" to="/">Home</router-link>
                    </li>
                    <li class="nav-item">
                      <router-link class="nav-link" to="/link1">Link - 1</router-link>
                    </li>
                    <li class="nav-item">
                      <router-link class="nav-link" to="/link2">Link - 2</router-link>
                    </li>
                  </ul>
            </div>
            <router-view></router-view>
        </div>
        <script type="text/javascript" src="js/app.js"></script>
    </body>
</html>
