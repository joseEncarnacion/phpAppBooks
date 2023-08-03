<?php

include("../../connectionPDO.php");

$query = $pdo->prepare("SELECT * FROM titulos T INNER JOIN titulo_autor TA ON T.id_titulo = TA.id_titulo INNER JOIN autores a ON TA.id_autor = a.id_autor");
$query->execute();

$list_tbl_libros = $query->fetchAll(PDO::FETCH_ASSOC);

//print_r($list_tbl_libros);

?>


<?php include("../../templates/header.php") ?>

<br />

<div class="card">
    <h3 class="p-4"> Listado de libros </h3>
    <div class="card-header">
        <!-- <a name="" id="" class="btn btn-primary" href="crear.php" role="button">Agruegar Libro</a> -->
    </div>
    <div class="card-body">

        <div class="table-responsive">
            <table class="table ">
                <thead>
                    <tr>
                        <th scope="col">Code</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Genero</th>
                        <th scope="col">Author</th>
                        <th scope="col">Precio</th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($list_tbl_libros as $registros) { ?>
                        <tr class="">
                            <td scope="row"> <?php echo $registros["id_titulo"] ?> </td>
                            <td><?php echo $registros["titulo"] ?></td>
                            <td><?php echo $registros["tipo"] ?></td>
                            <td><?php echo $registros["nombre"] ?></td>
                            <td class="precio"><?php echo $registros["precio"] ?></td>
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