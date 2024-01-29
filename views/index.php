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
    session_start();
    include "../php/bd/usuariosRepository.php";
    $usuarioRepository = new UsuariosRepository("mysql:dbname=practicacentros;host=127.0.0.1;port=3307","root","");
    $usuarios = $usuarioRepository->recuperarUsuario("admin","admin");
    if(count($usuarios) > 0){
        // Usuario Existe
        $_SESSION["usuario"]=$usuarios[0];
    } else{
        // Usuario no existe, devolver error al formulario
        
    }
    //$conectar->cerrarConexion();


    //Aqui irá nuestro código html para la portada de la web


    ?>
</body>

</html>