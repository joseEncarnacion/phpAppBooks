<?php

include("../../connectionPDO.php");

$query = $pdo->prepare("SELECT * FROM `autores`");
$query->execute();

$list_tbl_autores = $query->fetchAll(PDO::FETCH_ASSOC);

//print_r($list_tbl_autores);


?>

<?php include("../../templates/header.php") ?>

<br />

<div class="card">
    <h3 class="p-4"> Listados de autores </h3>
    <div class="card-header">
        <!-- <a name="" id="" class="btn btn-primary" href="crear.php" role="button">Agruegar Autor</a> -->
    </div>
    <div class="card-body">

        <div class="table-responsive">
            <table class="table ">
                <thead>
                    <tr>
                        <th scope="col">Code</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Pais</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($list_tbl_autores as $registro) { ?>
                        <tr class="">
                            <td scope="row"><?php echo $registro['id_autor'];  ?></td>
                            <td><?php echo $registro['nombre'];  ?></td>
                            <td><?php echo $registro['apellido'];  ?></td>
                            <td><?php echo $registro['telefono'];  ?></td>
                            <td><?php echo $registro['pais'];  ?></td>
                            <td><button class="btn btn-warning">editar</button></td>

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