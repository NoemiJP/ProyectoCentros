<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../../css/web.css" />
    <script src="../../js/web.js"></script>
</head>

<body>

    <?php
    include "./elementosComunes/barraSuperior.php";
    include "../php/bd/usuariosRepository.php";
    unset($_SESSION["usuario"]);
    session_destroy();
    header("Location:portada.php");
 

    ?>

</body>

</html>