<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Experiencias</title>
    <link rel="stylesheet" href="../../css/web.css" />
    <script src="../../js/web.js"></script>
</head>

<body>
    <?php

    //Iniciar y recuperar usuario
    session_start();
    $usuario = $_SESSION["usuario"];

    //Se comprueba si esta registrado y según esto se manda a la vista admin o inviatdo
    if ($usuario != null) {
        header("Location: experienciasAdmin.php");
    } else {
        header("Location: experienciasUsuario.php");
    }
    ?>
</body>

</html>