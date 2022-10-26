<!Doctype html>
<html>
<head>
    <title>Electrónicos S.A.</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CDNs-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <link href="CSS/estilos.css" rel="stylesheet" type="text/css"/>
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
                <a class="nav-link" href="{{route('electrosen')}}"> <i class="fas fa-car"></i> ELECTROSEN <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Más
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{route('manuales')}}"> Manuales <i class="far fa-images"></i> </a>
                </div>
            </li>
        </ul>
    </div>
</nav>

<div class="content container" id="contenedor">
    <!-- Carrusel -->
    <div id="carouselImage" class="carousel slide my-4 mx-5" data-ride="carousel" >
        <ol class="carousel-indicators">
            <li data-target="#carouselImage" data-slide-to="0" class="active"></li>
            <li data-target="#carouselImage" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner" id="imageCarusel">
            <div class="carousel-item active">
                <img src="img/logotipo.png" class="d-block w-100" alt="..."/>
            </div>
            <div class="carousel-item">
                <img src="img/logotipo.png" class="d-block w-100" alt="..."/>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselImage" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselImage" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<div id="contenedor2">
    <!-- Carrusel -->
    <div id="carouselImage2" class="carousel slide my-4 mx-5" data-ride="carousel2" >
        <ol class="carousel-indicators">
            <li data-target="#carouselImage2" data-slide-to="2" class="active"></li>
            <li data-target="#carouselImage2" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner" id="imageCarusel">
            <div class="carousel-item active">
                <img src="img/logotipo.png" class="d-block w-100" alt="..."/>
            </div>
            <div class="carousel-item">
                <img src="img/logotipo.png" class="d-block w-100" alt="..."/>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselImage2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselImage2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>


<!-- Contenedor Información -->
<div class="container my-5" id="info">
    <h4>ELECTROSEN &nbsp;<i class="fas fa-car"></i></h4>
    <hr color="gray">
    <img src="img/electrosen-terminado.jpg" class="ft2" width="200" height="200"/>
    <p>
        ELECTROSEN es un dispositivo cuyo nombre significa "Sensor Electrónico", debido a que en su estructura
        integra un sensor de proximidad que permite identificar a que distancia se encuentra un objeto.
        Gracias a este pequeño artefacto podemos estacionar nuestro vehículo con más facilidad, ya que su trabajo
        es dar una alerta cuando el vehículo esté a cierta distancia de un objeto.<br>
    </p>

    <br>
</div>

<div class="container fotos_electrosen" id="fotografias">
    <h4>Fotografías</h4>
    <hr color="gray">

    <ul>
        <li><img src="img/electrosen1.jpg" class="ft" title="ELECTROSEN en proceso"> </li>
        <li><img src="img/electrosen2.jpg" class="ft" title="ELECTROSEN en proceso"></li>
        <li><img src="img/electrosen3.jpg" class="ft" title="ELECTROSEN en proceso"></li>
        <li><img src="img/electrosen4.jpg" class="ft" title="ELECTROSEN Finalizado"></li>
        <li><img src="img/electrosen5.jpg" class="ft" title="ELECTROSEN Finalizado"></li>

    </ul>
</div>


<div class="container videos_electrosen" id="videos">
    <h4>Videos</h4>
    <hr color="gray">
{{--    <ul>--}}
{{--        <li>--}}
{{--            <iframe src="https://www.youtube.com/embed/aAkLoiCxUc0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}
{{--        </li>--}}
{{--        <li>--}}
{{--            <iframe width="560" height="315" src="https://www.youtube.com/embed/YRWiBnKP_3A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                </li>--}}
{{--    </ul>--}}

</div>
<div id="copyRight">
    <center>© Copyright ELECTRÓNICOS S.A.</center>
</div>
</body>
</html>
