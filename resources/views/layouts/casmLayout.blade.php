<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>C / A  / S / M  | Climbing</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" type="text/css">
        <link href="{{{ url('/css/style.css') }}}" rel="stylesheet" type="text/css">
        

        <!--<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" type="text/css">-->

        <!-- Styles -->
        
    </head>
    <body>
        <div id="bgimage"></div>
        <div id="contentHolder">
            @yield('content')
        </div>
    </body>
</html>
