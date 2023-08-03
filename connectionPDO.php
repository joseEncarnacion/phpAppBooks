<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connection to DB using PDO  </title>
</head>
<body>
    <?php
        // try {
        //     // $DB = new PDO('mysql:host=tipo conecxion; dbname=base de dato en msql', 'usuario', 'password');
        //     $DB = new PDO('mysql:host=localhost; dbname=test', 'root', 'admin');
        //    // $DB = new PDO('mysql:host=localhost; dbname=test', 'root', '');

        //     echo 'Conected success';
            
        // } catch (Exception $e) {
            
        //     die ('Error:'. $e ->GetMessage());

        // } finally{
        //     $DB = null;

        // }


        ///otra opcion 

                try {
            $dsn = "mysql:host=localhost;port=3399;dbname=applibros;charset=utf8";
            $username = "root";
            $password = "";

            $pdo = new PDO($dsn, $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Conexión exitosa a la base de datos.";

        } catch (PDOException $e) {
            echo "Error de conexión: " . $e->getMessage();
        }
    
    ?>

</body>
</html>