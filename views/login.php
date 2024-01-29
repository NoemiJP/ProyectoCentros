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
    include "./elementosComunes/barraSuperior.php";
    include "../php/bd/usuariosRepository.php";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["usu"]) && isset($_POST["pass"])) {
            $usu = $_POST["usu"];
            $pass = $_POST["pass"];
            $usuarioRepository = new UsuariosRepository("mysql:dbname=practicacentros;host=127.0.0.1;port=3307", "root", "");
            $usuarios = $usuarioRepository->recuperarUsuario($usu, $pass);
            if (count($usuarios) > 0) {
                // Usuario Existe
                $_SESSION["usuario"] = $usuarios[0]->getUsuario();
                header("Location: portada.php");

            } else {
                // Usuario no existe, devolver error al formulario
                echo "<p>Error: Usuario o contraseña incorrectos</p>";
            }
        }
    }
 

    ?>
     <form method="POST" style="margin-top:20%;margin-left:40%;" action="login.php">
        <label for="usu">Usuario</label><br>
        <input type="text" name="usu" id="usu" /><br><br>
        <label for="pass">Contraseña</label><br>
        <input type="password" name="pass" id="pass" /><br><br>
        <input type="submit" value="Login">
    </form>

</body>

</html>