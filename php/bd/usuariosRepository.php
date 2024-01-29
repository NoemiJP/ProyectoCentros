<?php
include "conexion.php";
require "usuario.php";
class UsuariosRepository extends Conexion
{


    public function __construct($dsn, $usuario, $clave)
    {
        parent::__construct($dsn, $usuario, $clave);
        $this->conectaBD();
    }

    public function recuperarUsuario($username, $password)
    {
        $personasObtenidas = array();
        $db = $this->getBd();
        $personas = $db->prepare('SELECT * FROM usuarios WHERE usuario = ? AND contrasena=?');
        $personas->execute([$username, $password]);
        foreach($personas as $persona){
            $usuario = new Usuario();
            $usuario->setUsuario($persona["usuario"]);
            $usuario->setContrasena($persona["contrasena"]);
            $usuario->setCentro($persona["centro"]);
            $usuario->setRol($persona["rol"]);
            array_push($personasObtenidas,$usuario);
        }
        return $personasObtenidas;
    }

}

?>