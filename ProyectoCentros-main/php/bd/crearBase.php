<?php 
function crearBase(){
    $dsn = "mysql:host=127.0.0.1;port=3306";
    $usuario = "";
    $clave = "";
    
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
    $dsn = "mysql:dbname=proyectocentros;host=127.0.0.1;port=3306";
    $usuario = "";
    $clave = "";
    
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
    $dsn = "mysql:dbname=ProyectoCentros;host=127.0.0.1;port=3306";
    $usuario = "";
    $clave = "";
    
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

function crearCalendario(){
    $dsn = "mysql:dbname=proyectocentros;host=127.0.0.1;port=3306";
    $usuario = "";
    $clave = "";
    
    try{
        $bd = new PDO($dsn,$usuario,$clave);
        $consulta = "CREATE TABLE `calendario` (
            `id` int(11) NOT NULL,
            `nombre` text NOT NULL,
            `imagen` text NOT NULL,
            `inicioSiembra` text,
            `finSiembra` text,
            `inicioSemillero` text,
            `finSemillero` text,
            `inicioTransplante` text,
            `finTransplante` text,
            `inicioCosecha` text,
            `finCosecha` text
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

function insertarCalendario(){
    $dsn = "mysql:dbname=ProyectoCentros;host=127.0.0.1;port=3306";
    $usuario = "";
    $clave = "";
    
    try{
        $bd = new PDO($dsn,$usuario,$clave);
        $consulta = "INSERT INTO `calendario` (`id`, `nombre`, `imagen`, `inicioSiembra`, `finSiembra`, `inicioSemillero`, `finSemillero`, `inicioTransplante`, `finTransplante`, `inicioCosecha`, `finCosecha`) VALUES
        (1, 'Zanahoria', '', '03-01', '05-31', '01-01', '03-31', '03-01', '05-31', '06-01', '09-30'),
        (2, 'Calabacín', '', '03-01', '05-31', '', '', '03-01', '05-31', '08-01', '10-31'),
        (3, 'Ajo', '', '11-01', '01-31', '12-01', '01-31', '11-01', '01-31', '06-01', '07-31'),
        (4, 'Guisantes', '', '11-01', '01-31', '', '', '11-01', '01-31', '06-01', '09-30'),
        (5, 'Vainas', '', '03-01', '05-31', '', '', '03-01', '05-31', '06-01', '09-30'),
        (6, 'Calabaza', '', '03-01', '05-31', '', '', '03-01', '05-31', '08-01', '10-31'),
        (7, 'Lechuga', '', '03-01', '05-31', '01-01', '03-31', '03-01', '05-31', '06-01', '09-30'),
        (8, 'Patata', '', '05-01', '04-30', '03-01', '04-30', '', '', '08-01', '10-31'),
        (9, 'Puerro', '', '05-01', '08-31', '02-01', '04-30', '05-01', '08-31', '08-01', '02-28'),
        (10, 'Pimiento', '', '', '', '01-01', '02-28', '03-01', '05-31', '07-01', '09-30'),
        (11, 'Tomate', '', '03-01', '05-31', '01-01', '03-31', '04-01', '05-31', '07-01', '09-30');";

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
crearCalendario();
insertarCalendario();
?>