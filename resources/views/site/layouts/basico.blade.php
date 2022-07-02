<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Super Gestão - @yield('titulo')</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset('css/estilo_basico.css')}}">
    </head>
    <body>
    
        {{-- Diretório views/site/layouts/_partials/topo.blade.php --}}
        @include('site.layouts._partials.topo')

        {{-- Conteúdo --}}
        @yield('conteudo')
    </body>
</html>