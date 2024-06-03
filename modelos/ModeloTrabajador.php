<?php

require_once '../database/Conexion.php';

class Trabajador{

    private $cnx;
    private $nombres;
    private $correo;
    private $contraseña;
    private $cargo;

    public function __construct(){
        $this->cnx = new ConexionBD();
    }

    public function setNombres($nom){
        $this->nombres = $nom;
    }

    public function setCorreo($email){
        $this->correo = $email;
    }

    public function setContraseña($contra){
        $this->contraseña = $contra;
    }
    
    public function setCargo($cargo){
        $this->cargo = $cargo;
    }

    public function VerificarTrabajador(){
        return $this->cnx->VerificarTrab($this->correo,$this->contraseña);
    }




}