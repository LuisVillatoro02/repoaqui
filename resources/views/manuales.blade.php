<!doctype html>
<html>
<head>
    <title>Electrónicos S.A.</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <link href="CSS/estilos.css" rel="stylesheet" type="text/css"/>

    <!-- CDN Fontawesome -->
    <script src="https://kit.fontawesome.com/85601d370d.js" crossorigin="anonymous"></script>
    <link rel="icon" href="favicon.ico">
</head>
<body>
<!-- Barra de Navegacion -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3">
    <a class="navbar-brand" href="{{route('home')}}"> <i class="fas fa-microchip"></i></i> ELECTRONICOS S.A.</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="{{route('manuales')}}">Manuales <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('electrosen')}}"> <i class="fas fa-car"></i> ELECTROSEN <span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </div>
</nav>

<div class="my-3 mx-5" id="galeria">
    <h2>Manuales</h2>
    <span class="linea"></span>
</div>

<div id="contenedorManuales">
<div class="manual" id="manuales">
    <ul>
        <li><img src="img/spanish.png" class="ft" title="Manual en Español"> </li>
        <li><img src="img/ingles.png" class="ft" title="Manual en Inglés"></li>
        <li><img src="img/ruso.png" class="ft" title="Manual en Ruso"></li>
        <li><img src="img/japones.png" class="ft" title="Manual en Japonés"></li>
    </ul>
</div>
</div>

<div id="contenedorManuales2">
    <div class="manual2" id="manuales2">
        <ul>
            <li><img src="img/spanish.png"> </li>
            <li><img src="img/ingles.png"></li>
            <li><img src="img/ruso.png"></li>
            <li><img src="img/japones.png"></li>
        </ul>
    </div>
</div>


<div id="copyRight">
    <center>© Copyright ELECTRÓNICOS S.A.</center>
</div>
</body>
</html>
