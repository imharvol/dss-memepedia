@extends('layouts.master')
@section('title', 'Editar Perfil')

@section('head')
<link rel="stylesheet" href="{{URL('css/editar-perfil.css')}}">
@endsection

@section('content')
@parent

<div class="editarPerfil" align="center">
	<div class="textoEditar">
    	<span> {{Auth::user()->username}} - Editar perfil </span>
    </div>
    <div class="lineaHorizontal1"> </div>
    <div class="form">
        <form action="/action_page.php" align=left >
            <div class="espacio"></div>
            <div class="hueco">
                <span class="texto ">Nombre: </span>
                <input type="text" name="name" id="name" class="textbox " placeholder="Nombre" auto value="{{Auth::user()->name}}">
            </div>
            <div class="espacio"></div>
            <div>
                <span class="texto">Apellidos: </span>
                <input type="text" name="surname" id="surname" class="textbox" placeholder="Apellidos" auto value="{{Auth::user()->surname}}">
            </div>
            <div class="espacio"></div>

            <div>
                <span class="texto">Correo electrónico: </span>
                <input type="text" name="email" id="email" class="textbox" placeholder="Correo electrónico" auto value="{{Auth::user()->email}}">
            </div>

            <div class="espacio"></div>
            <div>
                <span class="texto">Pais: </span>
                <input type="text" name="country" id="country" class="textbox" placeholder="País" auto>
            </div>
            <div class="espacio"></div>
            <div>
                <span class="texto">Cambiar Contraseña: </span>
                <input class="textbox" placeholder="Contraseña"> 
                <div class="espacio"></div>
                <input class="textbox" placeholder="Repetir Contraseña">
            </div>
            <div class="espacio" style="margin-bottom: 3vh;"></div>
            
            <div>
                <span class="texto">Foto de Perfil: </span>
                <form action="/action_page.php" >
                    <input type="file" id="img" name="img" accept="image/*">
                </form>
            </div>
            <span style="font-size:1.3vmin;color:white;float:left">Formatos admitidos: .jpg, .jpeg y .png (máx 32MB)</span>

           
        </form>
        <div class="botonInicio">
            <input class="boton" type="submit" value="Hecho">
        </div>
        <form action="{{route('user.signout')}}" method="POST">
            @csrf
            @method('POST')
            <div class="botonInicio">
                <input class="boton" type="submit" value="Cerrar Sesión">
            </div>
        </form>
    </div>
    
    
</div>

@endsection