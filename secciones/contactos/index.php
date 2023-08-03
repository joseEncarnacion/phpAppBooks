<?php

include("../../connectionPDO.php");

if ($_POST) {
    print_r($_POST);

    // recopilar los dato de nuestra columna
    $nombre = (isset($_POST["nombre"]) ? $_POST["nombre"] : "");
    $correo = (isset($_POST["correo"]) ? $_POST["correo"] : "");
    $asunto = (isset($_POST["asunto"]) ? $_POST["asunto"] : "");
    $comentario = (isset($_POST["comentario"]) ? $_POST["comentario"] : "");


    // preparando insercion 
    $query = $pdo->prepare("INSERT INTO contacto (nombre, correo, asunto, comentario)values(:nombre, :correo, :asunto, :comentario )");


    // Bind parameters using named placeholders
    $query->bindParam(":nombre", $nombre);
    $query->bindParam(":correo", $correo);
    $query->bindParam(":asunto", $asunto);
    $query->bindParam(":comentario", $comentario);

    $query->execute();

    header("location:index.php");
}


?>


<?php include("../../templates/header.php") ?>

<br />

<h3> Contactanos </h3>
<div class="card">
    <div class="card-header">
        <a name="" id="" class="btn btn-primary" href="crear.php" role="button">Ver contactos</a>
    </div>
    <div class="card-body">

        <form action="" id="contactForm" method="post" enctype="multipart/form">

            <div class="mb-3">
                <label for="" class="form-label">nombre </label>
                <input type="text" class="form-control" name="nombre" id="" aria-describedby="helpId" placeholder="Su nombre">
                <!-- <small id="helpId" class="form-text text-muted">nombre </small> -->
            </div>

            <div class="mb-3">
                <label for="" class="form-label">correo</label>
                <input type="email" class="form-control" name="correo" id="" aria-describedby="helpId" placeholder="Su correo ">
                <!-- <small id="helpId" class="form-text text-muted">correo</small> -->
            </div>


            <div class="mb-3">
                <label for="" class="form-label">asunto</label>
                <input type="text" class="form-control" name="asunto" id="" aria-describedby="helpId" placeholder="asunto">
                <!-- <small id="helpId" class="form-text text-muted">asunto</small> -->
            </div>

            <div class="mb-3">
                <label for="" class="form-label">comentario </label>
                <textarea class="form-control" name="comentario" id="" rows="3"></textarea>
            </div>







            <input name="" id="" class="btn btn-success" type="submit" value="enviar">
            <a name="" id="" class="btn btn-primary" href="index.php" role="button">cancelar envio</a>
        </form>


    </div>
    <div class="card-footer text-muted">

    </div>
</div>

<?php include("../../templates/footer.php") ?>