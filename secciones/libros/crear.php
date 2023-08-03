<?php include("../../templates/header.php") ?>

<h3> crear libros </h3>


<div class="card">
    <div class="card-header">
        Datos de los libros
    </div>
    <div class="card-body">

        <form action="" method="post" enctype="multipart/form">

            <div class="mb-3">
                <label for="" class="form-label">Titulo</label>
                <input type="text" class="form-control" name="titulo" id="" aria-describedby="helpId" placeholder="Titulo del libro">
                <small id="helpId" class="form-text text-muted">Titulo</small>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Genero</label>
                <input type="text" class="form-control" name="Genero" id="" aria-describedby="helpId" placeholder="Genero">
                <small id="helpId" class="form-text text-muted">Genero</small>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Lenguaje</label>
                <input type="text" class="form-control" name="Lenguaje" id="" aria-describedby="helpId" placeholder="Lenguaje">
                <small id="helpId" class="form-text text-muted">Lenguaje</small>
            </div>


            <div class="mb-3">
                <label for="idAutor" class="form-label">Autor</label>
                <select class="form-select form-select-lg" name="idAutor" id="idAutor">
                    <option selected>Select one</option>
                    <option value="">New Delhi</option>
                    <option value="">Istanbul</option>
                    <option value="">Jakarta</option>
                </select>
            </div>





            <input name="" id="" class="btn btn-success" type="submit" value="Button">
            <a name="" id="" class="btn btn-primary" href="index.php" role="button">Button</a>
        </form>


    </div>
    <div class="card-footer text-muted">

    </div>
</div>

<?php include("../../templates/footer.php") ?>