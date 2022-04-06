@extends('layouts.master')
@section('title', 'Comentarios')

@section('head')
<link rel="stylesheet" href="{{URL('css/comentarios.css')}}">
@endsection

@section('content')
@parent

<?php include $_SERVER['DOCUMENT_ROOT'].'/../resources/views/layouts/bienvenidosybarra.blade.php'; ?> <!-- Unificar la barra y título -->


<div class="subRectangulo">
    <div class="rectanguloPublicacion layout">
    <div class="sidebar" style="margin-top: 7vh">
                <button class="botones"><span class="bx bx-up-arrow-alt"><i></i></span></button>
                <div class="upvotes">874k</div>
                <button class="botones"><span class="bx bx-down-arrow-alt"><i></i></span></button>
    </div>
    <div class="body">
        <scap class="autor">AutorRandom123</scap> <scap class="fecha">17/03/2022</scap>
    	<div>
        	<img src="https://c.tenor.com/9nZ5fdxEyQQAAAAC/chatting-twich-emote-xqc-asmongold-chat-tyler1.gif">
     	</div>
        <div class="comentarioFoto">
        	<input type=image src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTDsKvKUVOqbJsF5oD4KXaBa_hoEBiYLQrY1A&usqp=CAU" width="30" height="30">
            <scap class="fecha">12 comentarios</scap>
            <input type=image src="https://www.nicepng.com/png/detail/119-1193195_white-left-arrow-png-png-white-arrow-left.png" width="30" height="30" style="transform:rotate(180deg);">
            <scap class="fecha">Compartir</scap>
        </div>
        <!-- Caja de comentario -->
        <div class="rectanguloComentario">
          <div class="cajaComentario">
              <form id="form"> 
                  <input class="barraComentario" placeholder="Comenta...">
              </form>
          </div>
      </div>
      <!-- Comentarios de la gente -->
      <div class="comentariosGente" align="left">
      	  <div class="usuario">
      		  <img src="https://cdn.autobild.es/sites/navi.axelspringer.es/public/styles/1200/public/media/image/2016/09/569465-whatsapp-que-tus-contactos-ponen-rana-perfil.jpg?itok=tpvHWpeZ" width="30" height="30">
              <scap class="autor2">Superjuan75 </scap><scap class="fecha2"> 17/03/2022</scap>
          </div>
          <div>
          	  <scap class="fuenteComentario"> Ja, ja, ja. Muy bueno! </scap>
          </div>
          <div class="upvotes">
          	  <input type=image src="https://www.kindpng.com/picc/m/73-736259_curved-white-arrow-png-transparent-background-white-arrow.png" width="30" height="30">
              <scap class="fecha2"> 2.4K</scap>
              <input type=image src="https://www.kindpng.com/picc/m/73-736259_curved-white-arrow-png-transparent-background-white-arrow.png" width="30" height="30" style="transform:rotate(180deg);">
          </div>
          <div class="subComentario">
              <div class="usuario">
                  <img src="https://imagenes.t13.cl/images/original/2021/09/1631369625-0009mm6yx.jpg" width="30" height="30">
                  <scap class="autor2">CristianoCR7 </scap><scap class="fecha2"> 25/02/2022</scap>
              </div>
              <div>
                  <scap class="fuenteComentario"> siii jajsjas </scap>
              </div>
              <div class="upvotes">
                  <input type=image src="https://www.kindpng.com/picc/m/73-736259_curved-white-arrow-png-transparent-background-white-arrow.png" width="30" height="30">
                  <scap class="fecha2"> 1.6K</scap>
                  <input type=image src="https://www.kindpng.com/picc/m/73-736259_curved-white-arrow-png-transparent-background-white-arrow.png" width="30" height="30" style="transform:rotate(180deg);">
              </div>
         </div>
       </div>
    </div>
    </div>
</div>
    


@endsection