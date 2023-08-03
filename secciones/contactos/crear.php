<?php

include("../../connectionPDO.php");

$query = $pdo->prepare("SELECT * from contacto");
$query->execute();

$list_tbl_libros = $query->fetchAll(PDO::FETCH_ASSOC);

//print_r($list_tbl_libros);

?>


<?php include("../../templates/header.php") ?>

<br />

<div class="card">
    <h3 class="p-4"> Listado de Contactos </h3>
    <div class="card-header">
        <a name="" id="" class="btn btn-primary" href="index.php" role="button">Formulario de contacto</a>
    </div>
    <div class="card-body">

        <div class="table-responsive">
            <table class="table ">
                <thead>
                    <tr>
                        <th scope="col">Fecha</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">correo</th>
                        <th scope="col">Asunto </th>
                        <th scope="col">Comentario </th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($list_tbl_libros as $registros) { ?>
                        <tr class="">
                            <td scope="row"> <?php echo $registros["fecha"] ?> </td>
                            <td><?php echo $registros["nombre"] ?></td>
                            <td><?php echo $registros["correo"] ?></td>
                            <td><?php echo $registros["asunto"] ?></td>
                            <td><?php echo $registros["comentario"] ?></td>
                            


                        </tr>

                    <?php } ?>

                </tbody>
            </table>
        </div>


    </div>
    <div class="card-footer text-muted">
        Footer
    </div>
</div>

<?php include("../../templates/footer.php") ?>