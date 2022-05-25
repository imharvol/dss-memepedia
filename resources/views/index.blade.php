@extends('layouts.master')
@section('title', 'Memepedia')

@section('head')
<link rel="stylesheet" href="{{URL('css/index.css')}}">
@endsection

@section('content')
@parent
<?php include $_SERVER['DOCUMENT_ROOT'].'/../resources/views/layouts/bienvenidosybarra.blade.php'; ?> <!-- Unificar la barra y título -->

<script src="https://kit.fontawesome.com/704ff50790.js" 
        crossorigin="anonymous">
    </script>
    

    <div class="subRectangulo row p-0 m-0">
        <div class="mensajeMemes row pl-3">
            <scap>MEMES destacados</scap>
        </div>
        
        @foreach($memes as $index=>$meme)
        <div style="width:95%" align="center">
            <div class="rectanguloPublicacion">
                <scap class="autor">{{$meme->author->username}}</scap> 
                <scap class="fecha">{{$meme->created_at}}</scap>
                <div>
                    <a id="meme$meme->id" href="{{route('meme.show', ['memeId' => $meme->id])}}">
                        <img style="max-width:100%" src="{{asset('storage/memes/'.(string)$meme->id)}}">
                    </a>
                </div>
                <div id=heh{{$index}}>
                <div class="comentarioFoto">
                    <div class="contenedor" align="center">
                        <a href="{{route('meme.show', ['memeId' => $meme->id])}} #comentarios">
                            <input type=image src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTDsKvKUVOqbJsF5oD4KXaBa_hoEBiYLQrY1A&usqp=CAU" width="30" height="30">
                        </a>
                        <div class="share-button">
                            <span><i class="fas fa-share-alt"></i></span>
                            <a href="https://twitter.com/intent/tweet?text=Wow!%20Este%20Meme%20es%20buenísimo%20{{route('meme.show', ['memeId' => $meme->id])}}" target="_blank" data-size="large"><i class="fab fa-twitter"></i></a>
                            <!--<a href="#"><i class="fa fa-whatsapp"></i></a>-->
                            <a href="https://web.whatsapp.com/send?text=Wow! Este Meme es buenísimo {{route('meme.show', ['memeId' => $meme->id])}}" data-action="share/whatsapp/share"  
                            target="_blank"><i class="fa fa-whatsapp"></i></a>   
                            <a href="http://www.reddit.com/submit?url=Wow!%20Este%20meme%20es%20buen%C3%ADsimo%20{{route('meme.show', ['memeId' => $meme->id])}}" target="_blank"><i class="fab fa-reddit"></i></a>
                            
                            <button style="background:transparent;border:0" src="https://iconarchive.com/show/mono-general-2-icons-by-custom-icon-design/copy-icon.html" class="" onclick="navigator.clipboard.writeText( '{{route('meme.show', ['memeId' => $meme->id])}}' );alert('Meme copiado! Buen Trabajo MemePedier!')"><img width=20 height=20 src="http://cdn.onlinewebfonts.com/svg/img_201365.png"/></button>
                        </div>
                        
                        
                        
                    </div>
                </div>
                

<!--                    <input type=image src="https://www.nicepng.com/png/detail/119-1193195_white-left-arrow-png-png-white-arrow-left.png" width="30" height="30" style="transform:rotate(180deg);"> -->
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>

ç

@endsection
