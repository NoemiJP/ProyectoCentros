<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include "../php/bd/conexion.php";
    $conectar = new Conexion("mysql:dbmname=....;host=localhost", "usuario...", "clave=....");
    $conectar->conectaBD();
    //$conectar->cerrarConexion();


    //Aqui irá nuestro código html para la portada de la web.


    ?>
</body>

</html>