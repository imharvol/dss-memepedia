<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="{{URL('css/app.css')}}">
    <link rel="stylesheet" href="{{URL('css/master.css')}}">

    @yield('head')
</head>

<body>
    <div class="container-fluid p-0">
        <div class="brand-bar row p-0 m-0" align="center">
            <img src="{{URL('/images/pepe.png')}}" alt="pepe" class="pepe col-1">
            <h1 class="brand-title col-6">MEMEPEDIA</h1>
            <img src="{{URL('/images/pepe.png')}}" alt="pepe" class="pepe col-1">
        </div>


        <nav class="navbar row pr-0 m-0">
            <a class="navbar-item col-2" href="{{route('index')}}">Inicio</a>
            @if( Auth::check() ) <!-- Sólo mostrar el botón de crear meme cuándo el usuario esté logeado -->
            <a class="navbar-item col-2" href="{{route('meme.create')}}">Crear Meme</a>
            @endif
            <a class="navbar-item col-2" href="{{route('tierlist')}}">TierList</a>
            <a class="navbar-item col-2" href="{{route('ranking')}}">Ranking</a>
            <a class="navbar-item col-2" href="{{route('news')}}">Noticias</a>

            @if( Auth::check() )
            <a class="navbar-item col-2" href="{{route('user.me')}}">Mi Perfil: {{Auth::user()->username}}</a>
            @else
            <a class="navbar-item col-2" href="{{route('user.signin')}}">Iniciar Sesión/Crear cuenta</a>
            @endif
        </nav>

        <div class="content row mb-4 p-0 m-0">
            @yield('content')
        </div>

        <footer class="footer row m-0 p-0" align="center">
            <p>Política de privacidad | Acerca de | Contacto</p>
            <hr>
            <p>Carr. de San Vicente del Raspeig, s/n, 03690 San Vicente del Raspeig, Alicante</p>
            <p>D-SSarrolladores</p>
        </footer>
    </div>

</body>

</html>