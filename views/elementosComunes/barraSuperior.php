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
        <h1>BROTES VERDES</h1>
        <h2>I.E.S BERNALDO DE QUIRÓS</h2>
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
        <?php
        session_start();
        if (isset($_SESSION["usuario"])) {
            $usuarioLogueado = $_SESSION["usuario"];
        } else {

            $usuarioLogueado = "Invitado";
        }
        if ($usuarioLogueado == "Invitado") {
            echo "<a class=\"inactive\" href=\"login.php\">Iniciar Sesión</a>";
        } else {
            echo "<a class=\"inactive\">Hola " . $usuarioLogueado . "</a>";
        }
        ?>
    </nav>
</body>

</html>