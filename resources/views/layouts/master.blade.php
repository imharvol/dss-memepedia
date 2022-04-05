<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{URL('css/app.css')}}">
    <link rel="stylesheet" href="{{URL('css/master.css')}}">

    @yield('head')
</head>

<body>

    <div class="brand-bar">
        <img src="{{URL('/images/pepe.png')}}" alt="pepe" class="pepe">
        <h1 class="brand-title">MEMEPEDIA</h1>
        <img src="{{URL('/images/pepe.png')}}" alt="pepe" class="pepe">
    </div>

    <nav class="navbar">
        <a class="navbar-item" href="{{route('index')}}">Inicio</a>
        <a class="navbar-item" href="{{route('crear-meme')}}">Crear Meme</a>
        <a class="navbar-item" href="{{route('tierlist')}}">TierList</a>
        <a class="navbar-item" href="{{route('ranking')}}">Ranking</a>
        <a class="navbar-item" href="{{route('inicio-sesion')}}">Iniciar Sesión</a>

    </nav>

    <div class="content">
        @yield('content')
    </div>

    <footer class="footer">
        <p>Política de privacidad | Acerca de | Contacto</p>
        <hr>
        <p>Carr. de San Vicente del Raspeig, s/n, 03690 San Vicente del Raspeig, Alicante</p>
        <p>D-SSarrolladores</p>
    </footer>

</body>

</html>