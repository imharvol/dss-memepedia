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
            | 
            <scap contenteditable="true">"Nombre de la Tier List"</scap>
             |
        </div>
    <div id="board">
        <div class="rows">
            <div class="label-holder rojo" ><span contenteditable="true" class="label">S</span></div>
        </div>
        <div class="rows">
        <div class="label-holder naranja" ><span contenteditable="true" class="label">A</span></div>
        </div>
        <div class="rows">
        <div class="label-holder amarillo" ><span contenteditable="true" class="label">B</span></div>
        </div>
        <div class="rows">
        <div class="label-holder verde" ><span contenteditable="true" class="label">C</span></div>
        </div>
        <div class="rows">
        <div class="label-holder azul" ><span contenteditable="true" class="label">D</span></div>
        </div>
        <div class="rows">
        <div class="label-holder lila" c><span contenteditable="true" class="label">E</span></div>
        </div>
    </div>
        
            <div class="mydiv" id="mydivheader">
                <img id="1" class = "card" src="{{URL('images/pepe.png')}}">
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
                <button class="boton" onclick="Print()">Descargar</button>
                <button class="boton" onclick="location.reload();">Reset</button>
        </div>
        
        
    </div>
    <script src="{{URL('/js/html2canvas.min.js')}}"></script>
    <script>
        function Print()
        {
            
            console.log("jajaja")
            var div = document.getElementById('board')
            console.log(div)
            PrintDiv(div);
        }
        function PrintDiv(div)
        {
            
            html2canvas(div,{allowTaint : true }).then(function(canvas) 
            {
                var myImage = canvas.toDataURL();
                console.log(myImage)
                downloadURI(myImage,"TierList")
            });
        }
        function downloadURI(uri, name) {
            var link = document.createElement("a");

            link.download = name;
            link.href = uri;
            document.body.appendChild(link);
            link.click();   
            //after creating link you should delete dynamic link
            //clearDynamicLink(link); 
        }
    </script>
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