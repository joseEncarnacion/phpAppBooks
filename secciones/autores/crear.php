<?php include("../../templates/header.php") ?>

<h3>crear Autores</h3>


<div class="card">
    <div class="card-header">
        Datos de los libros
    </div>
    <div class="card-body">

        <form action="" method="post" enctype="multipart/form">

            <div class="mb-3">
                <label for="" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="titulo" id="" aria-describedby="helpId" placeholder="Nombre del autor">
                <small id="helpId" class="form-text text-muted">Titulo</small>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Fecha de nacimiento</label>
                <input type="text" class="form-control" name="Genero" id="" aria-describedby="helpId" placeholder="Fecha nacimiento">
                <small id="helpId" class="form-text text-muted">Genero</small>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Pais de Origen</label>
                <input type="text" class="form-control" name="Lenguaje" id="" aria-describedby="helpId" placeholder="Pais de origen">
                <small id="helpId" class="form-text text-muted">Lenguaje</small>
            </div>




            <input name="" id="" class="btn btn-success" type="submit" value="Registrar">
            <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar registro</a>
        </form>


    </div>
    <div class="card-footer text-muted">

    </div>
</div>


<?php include("../../templates/footer.php") ?>