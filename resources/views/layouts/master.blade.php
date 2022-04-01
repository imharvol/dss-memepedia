<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        .rectanguloArriba {
            width: 100%;
            height: 162px;
            padding: 8px 8px 8px 8px;
            background: #2b2e4a;
            display: flex;
            justify-content: space-between;
        }

        .pepe {
            margin-top: 10px;
        }

        .linea {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .barra {
            width: 100%;
            height: 37px;
            padding: 8px 8px 8px 8px;
            background: #903749;
        }

        .textoBarra {
            color: #ffffff;
            font-family: "Source Sans Pro";
            font-weight: bold;
            margin-top: -12px;
            margin-left: -40px;
            white-space: pre;
            font-size: 18px;
        }

        .rectanguloInicio {
            width: 43.45%;
            height: 502px;
            padding: 8px 8px 8px 8px;
            background: #903749;
            margin: auto;
        }

        .textoInicio {
            color: #ffffff;
            font-family: "Source Sans Pro";
            font-weight: bold;
            text-align: center;
            font-size: 40px;
            margin-top: 10px;
        }

        .lineaHorizontal1 {
            width: 130px;
            border-color: #2b2e4a;
            border-width: 0.5px;
            border-style: solid;
            margin-top: 30px;
            align: center;
        }

        .lineaHorizontal2 {
            width: 1000px;
            border-color: #ffffff;
            border-width: 0.5px;
            border-style: solid;
            align: center;
        }

        .botonInicio {
            margin-top: 20px;
        }

        .textoSpam {
            color: #ffffff;
            font-family: "Source Sans Pro";
            font-weight: bold;
            text-align: center;
            font-size: 25px;
            margin-top: 5px;
        }

        .botonRegistro {
            margin-top: 20px;
        }

        .cuadroSpam {
            width: 100%;
            height: 170px;
            padding: 8px 8px 8px 8px;
            background: #903749;
        }

        p {
            color: #ffffff;
            font-family: "Source Sans Pro";
            white-space: pre;
            font-size: 18px;
            margin-top: -30px;
        }
    </style>
    <title>@yield('title')</title>
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