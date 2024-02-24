<?php

class Calendario{

    // atributos de la clase
    private $id;
    private $nombre;
    private $imagen;
    private $inicioSiembra;
    private $finSiembra;
    private $inicioSemillero;
    private $finSemillero;
    private $inicioTransplante;
    private $finTransplante;
    private $inicioCosecha;
    private $finCosecha;

    // constructor de la clase
    public function __construct($id, $nombre, $imagen, $inicioSiembra, $finSiembra, $inicioSemillero, $finSemillero, $inicioTransplante, $finTransplante, $inicioCosecha, $finCosecha){
        $this->id = $id;
        $this->nombre = $nombre;
        $this->imagen = $imagen;
        $this->inicioSiembra = $inicioSiembra;
        $this->finSiembra = $finSiembra;
        $this->inicioSemillero = $inicioSemillero;
        $this->finSemillero = $finSemillero;
        $this->inicioTransplante = $inicioTransplante;
        $this->finTransplante = $finTransplante;
        $this->inicioCosecha = $inicioCosecha;
        $this->finCosecha = $finCosecha;
    }

    // getters y setters
    public function getId(){
        return $this->id;
    }
    public function setId($id): self{
      $this->id = $id;
      return $this;
    }

    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($nombre): self{
        $this->nombre = $nombre;
        return $this;
    }
    public function getImagen(){
        return $this->imagen;
    }
    public function setImagen($imagen): self{
      $this->imagen = $imagen;
      return $this;
    }
    public function getInicioSiembra(){
        return $this->inicioSiembra;
    }
    public function setInicioSiembra($inicioSiembra): self{
      $this->inicioSiembra = $inicioSiembra;
      return $this;
    }
    public function getFinSiembra(){
        return $this->finSiembra;
    }
    public function setFinSiembra($finSiembra): self{
        $this->finSiembra = $finSiembra;
        return $this;
    }
    public function getInicioSemillero(){
        return $this->inicioSemillero;
    }
    public function setInicioSemillero($inicioSemillero): self{
      $this->inicioSemillero = $inicioSemillero;
      return $this;
    }
    public function getFinSemillero(){
        return $this->finSemillero;
    }
    public function setFinSemillero($finSemillero): self{
        $this->finSemillero = $finSemillero;
        return $this;
    }
    public function getInicioTransplante(){
        return $this->inicioTransplante;
    }
    public function setInicioTransplante($inicioTransplante): self{
      $this->inicioTransplante = $inicioTransplante;
      return $this;
    }
    public function getFinTransplante(){
        return $this->finTransplante;
    }
    public function setFinTransplante($finTransplante): self{
        $this->finTransplante = $finTransplante;
        return $this;
    }
    public function getInicioCosecha(){
        return $this->inicioCosecha;
    }
    public function setInicioCosecha($inicioCosecha): self{
      $this->inicioCosecha = $inicioCosecha;
      return $this;
    }
    public function getFinCosecha(){
        return $this->finCosecha;
    }
    public function setFinCosecha($finCosecha): self{
        $this->finCosecha = $finCosecha;
        return $this;
    }
}

?>