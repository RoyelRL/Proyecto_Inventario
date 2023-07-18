<?php
 $url="http://localhost/inventario_libros/";

?>


<!doctype html>
<html lang="es">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <nav class="navbar navbar-expand navbar-dark bg-dark">
        <ul class="nav navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" href="#" aria-current="page">INICIO</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php $url ?>libros/">LIBROS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php $url ?>usuarios/">USUARIO</a>

            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php $url ?>alumnos/">ALUMNOS</a>

            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php $url ?>prestamos/">LIBROS PRESTADOS</a>

            </li>
        </ul>
    </nav>
  </header>
  <div class="alert alert-primary alert-dismissible fade show" role="alert">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  
    <strong>BIENVENIDO!</strong> 
  </div>

  <div id="myCarousel" class="carousel slide container-fluid" data-ride="carousel">
    <!-- Indicadores -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Slides -->
    <div class="carousel-inner ">
      <div class="carousel-item active ">
        <img src="libros-y-letras.jpg" class="d-blok w-100 h-5" alt="Imagen 1">
      </div>  
      <div class="carousel-item">
        <img src="pexels-polina-zimmerman-3747499.jpg" class="d-blok w-100 h-5" alt="Imagen 2">
      </div>
      <div class="carousel-item">
        <img src="ruta-de-la-imagen-3.jpg" alt="Imagen 3">
      </div>
    </div>

    <!-- Controles -->
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Siguiente</span>
    </a>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>