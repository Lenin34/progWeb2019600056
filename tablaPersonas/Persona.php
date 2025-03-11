<?php

class Persona {
    private $nombre;
    private $fecNac;
    private $tel;

    public function __construct($nombre, $fecNac, $tel)
    {
        $this->nombre = $nombre;
        $this->fecNac = $fecNac;
        $this->tel = $tel;
    }
    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($value){
         $this->nombre = $value;
    }

    public function getFecNac(){
        return $this->fecNac;
    }

    public function setFecNac($value){
         $this->fecNac = $value;
    }

    public function getTel(){
        return $this->tel;
    }

    public function setTel($value){
         $this->tel = $value;
    }
}

/*El cierre de php no se incluye porque el script
debe ser incluido en otro
*/