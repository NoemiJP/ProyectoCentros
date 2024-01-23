<?php 
function crearBase(){
    $dsn = "mysql:host=127.0.0.1;port=3307";
    $usuario = "proyecto";
    $clave = "admin";
    
    try{
        $bd = new PDO($dsn,$usuario,$clave);
        $consulta = "CREATE DATABASE ProyectoCentros CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci";

        if($bd -> query($consulta)){
            echo "<p>Base de datos creada</p>";
        }else{
            echo "<p>Error, la base de datos no se ha creado </p>";
        }
        $bd = null;

    }catch(PDOException $e){
        echo "Falló la conexión: " .$e->getMessage();
    }
}

function crearUsuarios(){
    $dsn = "mysql:dbname=ProyectoCentros;host=127.0.0.1;port=3307";
    $usuario = "proyecto";
    $clave = "admin";
    
    try{
        $bd = new PDO($dsn,$usuario,$clave);
        $consulta = "CREATE TABLE `usuarios` (
            `id` int(11) NOT NULL,
            `usuario` varchar(25) NOT NULL,
            `contrasena` varchar(16) NOT NULL,
            `rol` varchar(20) NOT NULL,
            `centro` varchar(50) NOT NULL
          ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;";

if($bd -> query($consulta)){
    echo "<p>Tabla Usuarios creada</p>";
}else{
    echo "<p>Error, la tabla Usuarios no se ha creado </p>";
}
$bd = null;

}catch(PDOException $e){
    echo "Falló la conexión: " .$e->getMessage();
}
}

function insertarUsuarios(){
    $dsn = "mysql:dbname=ProyectoCentros;host=127.0.0.1;port=3307";
    $usuario = "proyecto";
    $clave = "admin";
    
    try{
        $bd = new PDO($dsn,$usuario,$clave);
        $consulta = "INSERT INTO `usuarios` (`id`, `usuario`, `contrasena`, `rol`, `centro`) VALUES
        (1, 'admin', 'admin', 'admin', ''),
        (2, 'adminIBQ', 'adminIBQ', 'adminIBQ', 'IES Bernaldo de Quirós'),
        (3, 'adminSIS', 'adminSIS', 'adminSIS', 'INS Manresa SIS');";

if($bd -> query($consulta)){
    echo "<p>Tabla Usuarios creada</p>";
}else{
    echo "<p>Error, la tabla Usuarios no se ha creado </p>";
}
$bd = null;

}catch(PDOException $e){
    echo "Falló la conexión: " .$e->getMessage();
}
}

crearBase();
crearUsuarios();
insertarUsuarios();
?>