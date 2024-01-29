<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/web.css" />
</head>
<header class="encabezado">
  <section>
    <h1>BROTES VERDES</h1>
    <h2>I.E.S BERNALDO DE QUIRÓS</h2>
  </section>
</header>


<body>
  <nav class="menu">
    <a class="active" href="portada.html">Inicio</a>
    <a class="inactive" href="agenda.html">Agenda</a>
    <a class="inactive" href="actividades.html">Actividades</a>
    <a class="inactive" href="galeria.html">Galería</a>
    <a class="inactive" href="experiencias/experiencias.php">Experiencias</a>
    <?php
    session_start();
    if (isset($_SESSION["usuario"])) {
        $usuarioLogueado = $_SESSION["usuario"];
    } else {
    
        $usuarioLogueado = "Invitado";
    }
    if($usuarioLogueado == "Invitado"){
     echo "<a class=\"inactive\" href=\"login.php\">Iniciar Sesión</a>";
    }
    else{
        echo "<a class=\"inactive\">Hola ".$usuarioLogueado."</a>"; 
    }
    ?>
  </nav>
</body>
</html>