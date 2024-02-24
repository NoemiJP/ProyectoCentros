<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>principal</title>
</head>
<body>
    <?php 
    include "conexion.php";
    include "usuarios.php";
    $user = "";
    $password = "";
        if($_REQUEST["user"] != "" && $_REQUEST["password"] != ""){
            $user = $_REQUEST["user"];
            $password = $_REQUEST["password"];

            //$usuarios = new Usuarios("mysql:dbname=ProyectoCentros;host=127.0.0.1;port=3307", "proyecto", "admin", self::conectaBD());
        }else{
            header("Location: login.php?aviso=usuario y contraseña obligatorios");
        }
    ?>
</body>
</html>