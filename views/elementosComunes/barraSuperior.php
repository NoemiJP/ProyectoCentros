<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/web.css" />
    <script src="../../js/web.js"></script>
</head>
<header class="encabezado">
    <section>
        <h1>AGUA, VIDA Y BIENESTAR</h1>
        <h2>AGRUPACIÓN DE CENTROS ESCOLARES 2023</h2>
    </section>
</header>


<body>
    <nav class="menu">
        <a class="active" href="../portada.php">Inicio</a>
        <a class="inactive" href="/views/centros/EcoHuerto/html/portada.html">EcoHuerto</a>
        <a class="inactive" href="/views/centros/ibcf.php">IBCF</a>
        <a class="inactive" href="/views/centros/ipcc.php">IPCC</a>
        <a class="inactive" href="/views/centros/ipjb.php">IPJB</a>
        <a class="inactive" href="/views/centros/imsis.php">IMSIS</a>
        <a class="inactive" href="/views/experiencias/experiencias.php">Experiencias</a>
        <?php
        session_start(); //Inicio sesión

        //Se verifica si existe "usuario" en sesión
        if (isset($_SESSION["usuario"])) {
            $usuarioLogueado = $_SESSION["usuario"]; //Si existe, crea el usuario logueado
        } else {
            $usuarioLogueado = "Invitado"; //Sino se da valor de usuario invitado
        }

        //Si el usuario es invitado muestra un enlace para cerrar sesión sino mensaje de saludo
        if ($usuarioLogueado == "Invitado") {
            echo "<a class=\"inactive\" href=\"/views/login.php\">Iniciar Sesión</a>";
        } else {
            echo "<a class=\"inactive\">Hola " . $usuarioLogueado . "</a>";
        }

        //Usuario no invitado, muestra enlace de cerrar sesión
        if ($usuarioLogueado != "Invitado") {
            echo "<a class=\"inactive\" href=\"/views/logout.php\">Cerrar Sesión</a>";
        }
        ?>
    </nav>
</body>

</html>