<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Layout Mestre</title>
    </head>
    <body>
        <div>
            @yield('conteudo')
        </div>
    </body>
    <footer>
        @include('layouts.footer')
    </footer>
</html>