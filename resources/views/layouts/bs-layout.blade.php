<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.css">

        <title>@yield('title')</title>
    </head>
    <body>
 
        @yield('content')
   
        <script src="js/bootstrap.js"></script>
    </body>
</html>
