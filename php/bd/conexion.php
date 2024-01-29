<?php
//Clase para hacer que se conecte a la base de datos.
class Conexion
{
   private $bd;
   private $dsn;
   private $usuario;
   private $clave;

   //Constructor con los parámetros que le pasaremos para la conexión.
   public function __construct($dsn, $usuario, $clave)
   {
      $this->dsn = $dsn;
      $this->usuario = $usuario;
      $this->clave = $clave;
   }



   //Función que conecta a la bbdd y si no fuese posible captura el error.
   function conectaBD()
   {
      try {
         $this->bd = new PDO($this->dsn, $this->usuario, $this->clave);
         echo "Conexión establecida.";
      } catch (Exception $e) {
         echo "Falló en la conexión: " . $e->getMessage();

      }
   }

   //Función que desconecta la bbdd.
   public function cerrarConexion()
   {
      $this->bd = null;
   }

   //Getters y Setters
   public function getBd()
   {
      return $this->bd;
   }

   public function setBd($bd): self
   {
      $this->bd = $bd;

      return $this;
   }

   public function getDsn()
   {
      return $this->dsn;
   }

   public function setDsn($dsn): self
   {
      $this->dsn = $dsn;

      return $this;
   }

   public function getUsuario()
   {
      return $this->usuario;
   }

   public function setUsuario($usuario): self
   {
      $this->usuario = $usuario;

      return $this;
   }

   public function getClave()
   {
      return $this->clave;
   }

   public function setClave($clave): self
   {
      $this->clave = $clave;

      return $this;
   }
}
?>