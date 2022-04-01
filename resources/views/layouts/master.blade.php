<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{URL('css/app.css')}}">
    <link rel="stylesheet" href="{{URL('css/master.css')}}">

    @yield('head')
</head>

<body>

    <div class="rectanguloArriba">
        <div class="pepe">
            <img src="{{URL('/images/feelsweirdman.gif')}}" alt="pepe" width="166" height="141">
        </div>
    </div>

    <div class="barra">
        <div class="textoBarra">
            <span><a href="{{route('index')}}">Inicio</a> | <a href="{{route('crear-meme')}}">Crear meme</a> | <a href="{{route('tierlist')}}">TierList</a> | <a href="{{route('ranking')}}">Ranking</a></span>
        </div>
    </div><br>

    @yield('content')

    <div class="cuadroSpam" align="center">
        <p>Política de privacidad | Acerca de | Contacto</p>
        <div class="lineaHorizontal2"> </div>
        <p>Carr. de San Vicente del Raspeig, s/n, 03690 San Vicente del Raspeig, Alicante</p><br>
        <p>D-SSarrolladores</p>
    </div>

</body>

</html>