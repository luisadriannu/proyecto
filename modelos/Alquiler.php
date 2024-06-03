<?php

require_once '../Database/Conexion.php';

class Alquiler{

    private $cnx;
    private $año;
    private $mes;

    public function __construct(){
        $this->cnx = new ConexionBD();
    }
    
    public function setAño($anio){
        $this->año = $anio;
    }
    public function setMes($mes){
        $this->mes = $mes;
    }

    public function RegistrarAlquiler($id,$tiempo,$ape){
        return $this->cnx->RegistrarAlq($this->mes,$this->año,$id,$tiempo,$ape);
    }
    
}