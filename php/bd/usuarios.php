<?php
include "conexion.php";
class Usuarios extends Conexion
{
    private $con;

    public function __construct($dsn, $usuario, $clave, $con)
    {
        parent::__construct($dsn, $usuario, $clave);
    }

    public function recuperarUsuario()
    {
    }

    //Getters y Setters
    public function getCon()
    {
        return $this->con;
    }

    public function setCon($con): self
    {
        $this->con = $con;

        return $this;
    }
}





?>