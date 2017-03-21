<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> @yield('title') </title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="/css/app.css">

    </head>

    <body>
        <br />
        <div class="panel-default">
            <div class="container code">
                <ul class="panel panel-default">
                    <h4>
                        <a href="/">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="/about">About</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="/calculated">Calculated</a>
                    </h4>
                </ul>
            </div>
        </div>

        <div class="container">
            <div class="content">
                @section('content')
                @show
            </div>
        </div>
        <br />
        <div class="panel-footer text-center">
            © 2017 Weerasak Ratchawangmueang All rights reserved.<br />Designed by Antwickler
        </div>

    </body>
</html>
