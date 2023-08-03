<?php 
    $urlBase = "http://localhost:8080/bookshop/"
?>

<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
    <nav class="navbar navbar-expand navbar-light bg-light">
      <ul class="nav navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="<?php echo $urlBase ?> " aria-current="page">App Books <span class="visually-hidden">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $urlBase ?>secciones/libros/">Libros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $urlBase ?>secciones/autores/">Autores</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $urlBase ?>secciones/contactos/">Contactanos</a>
        </li>
      </ul>
    </nav>

  </header>
  <main class="container">