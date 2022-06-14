<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Laravel</title>
        <link rel="icon" href="{{ url('img/vkIcon.png') }}" />
        <link rel="shortcut icon" href="{{ url('img/vkIcon.png') }}" type="image/x-icon" />

        <link rel="stylesheet" href="css/app.css">
        
    </head>
    <body class="antialiased">
        <div id="app">
            <example-component></example-component>
        </div>
        <script type="text/javascript" src="js/app.js"></script>
    </body>
</html>