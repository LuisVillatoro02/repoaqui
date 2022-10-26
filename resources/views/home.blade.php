<!doctype html>
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
    <link href="css/estilos.css" rel="stylesheet" type="text/css"/>
    <script src="https://kit.fontawesome.com/85601d370d.js" crossorigin="anonymous"></script>
    <link rel="icon" href="favicon.ico">
</head>
<body>
<!-- Barra de Navegacion -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3">
    <a class="navbar-brand" href="{{route('home')}}"> <i class="fas fa-microchip"></i> ELECTRONICOS S.A.</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#contactanos">Contáctanos <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Productos
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{route('electrosen')}}"> <i class="fas fa-car"></i> ELECTROSEN   </a>
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
            <li data-target="#carouselImage" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" id="imageCarusel">
            <div class="carousel-item active">
                <img src="img/carrusel1.jpg" class="d-block w-100" alt="..."/>
            </div>
            <div class="carousel-item">
                <img src="img/carrusel2.jpg" class="d-block w-100" alt="..."/>
            </div>
            <div class="carousel-item">
                <img src="img/carrusel3.jpg" class="d-block w-100" alt="..."/>
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
            <li data-target="#carouselImage2" data-slide-to="0" class="active"></li>
            <li data-target="#carouselImage2" data-slide-to="1"></li>
            <li data-target="#carouselImage2" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" id="imageCarusel">
            <div class="carousel-item active">
                <img src="img/carrusel1.jpg" class="d-block w-100" alt="..."/>
            </div>
            <div class="carousel-item">
                <img src="img/carrusel2.jpg" class="d-block w-100" alt="..."/>
            </div>
            <div class="carousel-item">
                <img src="img/carrusel3.jpg" class="d-block w-100" alt="..."/>
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

<!-- Contenedor Nosotros -->
<div class="container my-5" id="nosotros">
    <h4>Nosotros &nbsp;<i class="far fa-id-badge"></i></h4>
    <hr color="gray">
    <img src="img/grupo1.jpg" width="200" height="200"/>
    <p>
        La historia de la compañía <i>"Electrónicos S.A."</i> inicia un día martes 19 de julio del año 2022,
        cuando un grupo de estudiantes de la Universidad Mariano Gálvez de la facultad de Ingeniería en
        Sistemas de la sede de Puerto Barrios, Izabal, deciden llevar a cabo un proyecto estudiantil,
        el cual se basaba en la realización de un producto.<br><br>
        Los integrantes de este grupo concordaron en crear una empresa que se dedicara a
        la venta de dispositivos, componentes y accesorios electrónicos. <br>
        Gracias a Dios y a la perseverancia de estos jóvenes se logró llevar a cabo el proyecto,
        el cual más tarde se convirtió en una realidad.
        <br>
    </p>
</div>

<!-- Contenedor Contactanos -->
<div class="container my-5 " id="contactanos">
    <h4> Contáctanos &nbsp;<i class="far fa-address-card"></i></h4>
    <hr color="gray">

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3841.0331073785937!2d-88.58913308566764!3d15.696394053491806!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f66d97040f0cad7%3A0x1df0d9ca830b1666!2sCentro%20Comercial%20Pradera%20Puerto%20Barrios!5e0!3m2!1ses!2sgt!4v1666540366295!5m2!1ses!2sgt" width="300" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    <p>
        <i class="fas fa-phone-alt "> Tel: (502) 5514-3089</i> <br><br>
        <i class="far fa-envelope">   electronicos15@gmail.com</i> <br><br>
        <i class="fa fa-clock-o">    10:00 AM - 6:00 PM</i> <br><br>
        <i class="fas fa-home"> Centro Comercial Pradera Puerto Barrios, local #5 </i>
    </p>
    <ul class="list-unstyled list-inline list-social-icons">
        <li>
            <a href="https://www.facebook.com/Electr%C3%B3nicos-SA-107789894742777/" title="Facebook"><i class="fa fa-facebook-square fa-2x"></i></a>
            &nbsp;&nbsp;&nbsp;<a href="https://wa.me/50240932468/?text=ESTOY INTERESADO EN EL ELECTROSEN" title="Whatsapp"><i class="fab fa-whatsapp fa-2x"></i></a>
            &nbsp;&nbsp;&nbsp;<a href="https://www.instagram.com/elecgt/" title="Instagram"><i class="fab fa-instagram fa-2x"></i></a>
            &nbsp;&nbsp;&nbsp;<a href="https://www.youtube.com/" title="YouTube"><i class="fab fa-youtube fa-2x"></i></a>
        </li>
    </ul>
</div>

<!-- Contenedor Comentarios -->
<div class="container my-5 " id="contactanos">
    <h4> ¡Dinos tu opinión! &nbsp;</h4>
    <hr color="gray">
    <p style="text-align: justify;">
        Si has utilizado alguno de nuestros productos y deseas darnos tu opinión, recomendación o si necesitas soporte, o bien, si deseas
        obtener más información sobre nuestros productos, a continuación encontrarás un formulario disponible
        para que puedas proporcionarnos tu número de teléfono o correo electrónico y nosotros nos pondremos en contacto contigo lo antes posible.
    </p>
    <form action="{{route('comentarioCreate')}}" method="POST">
        @csrf
        @method('POST')
            <div class="row">
                <div class="col">
                    <b><label for="">Nombre*</label></b>
                    <input type="text" class="form-control" placeholder="" name="nombre_cliente" autocomplete="off" required>
                </div>

                <div class="col">
                    <b><label for="">Teléfono</label></b>
                    <input type="number" class="form-control" placeholder="(Opcional)" name="telefono" autocomplete="off">
                </div>
            </div>
        <div class="row mt-2">
            <div class="col">
                <b><label for="">Correo</label></b>
                <input type="email" class="form-control" placeholder="(Opcional)" name="correo" autocomplete="off">
            </div>
        </div>

            <div class="form-group mt-2">
                <b><label for="exampleFormControlTextarea1">Comentario*</label></b>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="" name="comentario" autocomplete="off" required></textarea>
            </div>
        <center><button type="submit"  class="btn-lg my-3" id="btnEnviar" name="btnEnviar">Enviar</button></center>
    </form>
</div>

<div id="copyRight">
    <center>© Copyright ELECTRÓNICOS S.A.</center>
</div>

@include('sweetalert::alert')
</body>
</html>
