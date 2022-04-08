@extends('layouts.master')
@section('title', 'Meme Tierlist')

@section('head')
<link rel="stylesheet" href="{{URL('css/tierlist-jugar.css')}}">
@endsection

@section('content')
@parent

<div class="TierList">
        <span>Tier List</span>
    </div>

 
    <div class="JugarTierList">

        <div class="fuenteTexto">
            <scap>"Nombre de la Tier List"</scap>
        </div>
    <div id="board">
        <div class="rows">
            <div class="label rojo">S</div>
        </div>
        <div class="rows">
            <div class="label naranja">A</div>
        </div>
        <div class="rows">
            <div class="label amarillo">B</div>
        </div>
        <div class="rows">
            <div class="label verde">C</div>
        </div>
        <div class="rows">
            <div class="label azul">D</div>
        </div>
        <div class="rows">
            <div class="label lila">F</div>
        </div>
    </div>
        
            <div class="mydiv" id="mydivheader">
                <img id="1" class = "card" src="https://upload.wikimedia.org/wikipedia/commons/e/ee/Sample_abc.jpg">
                <img id="2" class = "card" src="https://upload.wikimedia.org/wikipedia/commons/e/ee/Sample_abc.jpg">
                <img id="3" class = "card" src="https://upload.wikimedia.org/wikipedia/commons/e/ee/Sample_abc.jpg">
                <img id="4" class = "card" src="https://upload.wikimedia.org/wikipedia/commons/e/ee/Sample_abc.jpg">
                <img id="5" class = "card" src="https://upload.wikimedia.org/wikipedia/commons/e/ee/Sample_abc.jpg">
                <img id="6" class = "card" src="https://upload.wikimedia.org/wikipedia/commons/e/ee/Sample_abc.jpg">
                <img id="7" class = "card" src="https://upload.wikimedia.org/wikipedia/commons/e/ee/Sample_abc.jpg">
                <img id="8" class = "card" src="https://upload.wikimedia.org/wikipedia/commons/e/ee/Sample_abc.jpg">
                <img id="9" class = "card" src="https://upload.wikimedia.org/wikipedia/commons/e/ee/Sample_abc.jpg">
                <img id="10" class = "card" src="https://upload.wikimedia.org/wikipedia/commons/e/ee/Sample_abc.jpg">
                <img id="11" class = "card" src="https://upload.wikimedia.org/wikipedia/commons/e/ee/Sample_abc.jpg">
                <img id="12" class = "card" src="https://upload.wikimedia.org/wikipedia/commons/e/ee/Sample_abc.jpg">
                <img id="13" class = "card" src="https://upload.wikimedia.org/wikipedia/commons/e/ee/Sample_abc.jpg">


                
            </div>
            
        
        
        <div class="BotonesDesRes">
            <form action="/action_page.php">
                <input class="boton" type="submit" value="Descargar">
                <input class="boton" type="submit" value="Reset">
            </form>
        </div>
        
        
    </div>
    <script> // Rectangulos
        const rows = document.querySelectorAll('.rows')

        const onDragover = (event) =>
        {
            event.preventDefault();
        }

        const onDrop = (event) =>
        {
            event.preventDefault();
            console.log('Dropped Element')
            const idcaido = event.dataTransfer.getData('id');
            const tarjeta = document.getElementById(idcaido);
            event.target.appendChild(tarjeta);
        }

        rows.forEach( (row) => 
        {
            row.ondragover = onDragover;
            row.ondrop = onDrop;
        })
    </script> 
    <script> // Cards
        const cards = document.querySelectorAll('.card')
        
        const onDragStart = (event) => 
        {
            console.log('Arrastrando');
            event.dataTransfer.setData('id',event.target.id);
        }
        const onDragEnd = (event) => 
        {
            console.log('Terminado');
        }

        cards.forEach( (card) => 
        {
            card.ondragstart = onDragStart;
            card.ondragend = onDragEnd;

        })
    </script>



@endsection