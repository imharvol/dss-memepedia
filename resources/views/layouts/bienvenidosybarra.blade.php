<div style="margin-left: 1vw; width:95%">
    <div class="layout2">
        <div class="textoBienvenida sidebar">
            <scap>Bienvenidos a </scap>
            <div class="MEMEpedia" style="display:inline">
                <scap>MEMEpedia</scap>
            </div>
            <div style="espacio"></div>
            <scap>la enciclopedia de memes oficial</scap>

        </div>
        <div class="search-container body" align=right>
            <form action="/search" method="GET" id="form">
                <input class="barraBusqueda" type="search" name="q" id="q" placeholder=" Buscar">
            </form>
        </div>
    </div>
</div>
<style>
    .layout2 {
        width: 100%;
        height: 100%;

        display: grid;
        grid:
            "sidebar body"1fr / 50% 1fr;
        gap: 2vw;

    }

    .sidebar {
        grid-area: sidebar;
    }

    .body {
        grid-area: body;
    }

    .textoBienvenida {
        color: #2b2e4a;
        font-family: "Source Sans Pro";
        font-size: 1.8vmin;
    }

    .MEMEpedia {
        color: #903749;
        font-family: "Lato";
        font-weight: bold;
        font-size: 4.5vmin;
    }

    .espacio {
        margin-top: 1vh;
        height: auto;
        display: block;
    }

    .barraBusqueda {
        width: 25%;
        height: 6vmin;
        background: #903749;
        color: #ffffff;
        border-color: #903749;
        border-width: 1px;
        border-style: solid;
        border-radius: 32px 32px 32px 32px;
        font-family: "Helvetica";
        font-weight: bold;
        font-size: 2vmin;
        margin-right: 1vw;
        margin-top: 1vh;
    }
</style>