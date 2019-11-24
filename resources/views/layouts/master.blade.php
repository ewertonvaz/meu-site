<!doctype html>
<html lang={{ app()->getLocale() }}>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('titulo')</title>
    </head>
    <body>
        <div class="container">
            @yield('conteudo')
        </div>
    </body>
    <footer>
        @include('layouts.footer')
    </footer>
</html>