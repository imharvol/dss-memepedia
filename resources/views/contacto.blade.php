@extends('layouts.master')
@section('title', 'Contacto')

@section('head')
<link rel="stylesheet" href="{{URL('css/contacto.css')}}">
@endsection

@section('content')
@parent

<div class="MEMEpedia">
    <span> Contacto </span>
</div>

<div class="container" style="height: 100%;">

    <div class="rectanguloRegistro" align="center">
        
        <div class="form">
            <form action="" align="left" class="form" method="POST">
                @csrf
                @method('PUT')
                <section class="columnas">
                    <div style="width:50%">
                        <label class="subtitle">Nombre y Apellidos</label>
                        <input type="text" name="name" id="name" class="textbox" placeholder="Nombre y Apellidos" auto>
                        <label class="subtitle">Correo electrónico</label>
                        <input type="text" name="email" id="email" class="textbox" placeholder="Correo electrónico" auto>
                        <label class="subtitle">Asunto</label>
                        <input type="text" name="asunto" id="asunto" class="textbox" placeholder="Asunto" auto>
                    </div>
                    <div style="width:40%">
                    <label class="subtitle">Mensaje</label>
                        <textarea type="text" name="mensaje" id="mensaje" class="textbox mensaje" placeholder="Mensaje" auto></textarea>
                        <div class="botonform" align="right">
                            <input class="boton" type="submit" value="Registrarse">
                        </div>
                    </div>
                </section> 
                <div class="textoCondiciones">
                    <span> En cumplimiento de la Ley Orgánica 15/1999, de Protección de Datos de Carácter Personal, le informamos de que los datos que facilite serán tratados por 
                            UNIDAD EDITORIAL INFORMACION ESPAÑOLA S.L.U, con domicilio social en Calle Lo Torrent, San Vicente del Raspeig (España), y C.I.F. número A-31391354, 
                            con la finalidad de atender sus consultas, reclamaciones o solicitudes de información, así como para el seguimiento posterior de las mismas. 
                            Para ejercitar los derechos de acceso, rectificación, cancelación y oposición de los datos debe dirigirse a UNIDAD EDITORIAL INFORMACIÓN ESPAÑOLA,
                            S.L.U., a la dirección anteriormente indicada, o a tm-flconect@spaceship.es, con la referencia D-SSarrolladores, 
                            indicando claramente su nombre, apellidos y dirección postal y adjuntando copia de su DNI, pasaporte u otro documento identificativo. 
                    </span> 
                </div>
                               
            </form>
            
                
                    

        </div>
       
       

    </div>
</div>

@endsection