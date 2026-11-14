<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Super Gestão - @yield('titulo')</title>

    <!-- O link do CSS deve ficar dentro do head -->
    <link rel="stylesheet" href="{{ asset('css/basico.css') }}">
</head>

<body>
    @include('site.layouts._partials.topo')
    @yield('conteudo')
</body>

</html>