<?php

require_once '../database/Conexion.php';


class Cliente {

    private $cnx;
    private $apellidos;
    private $nombres;
    private $correo;
    private $telefono;
    private $contraseña;
    private $ruc;
    private $dni;
    private $tipo;


    public function __construct(){
        
        $this->cnx = new ConexionBD();

    }
    public function setApellidos($ape){
        $this->apellidos = $ape;
    }
    public function setNombres($nom){
        $this->nombres = $nom;
    }
    public function setTelefono($tel){
        $this->telefono = $tel;
    }
    public function setCorreo($email){
        $this->correo = $email;
    }
    public function setContraseña($contra){
        $this->contraseña = $contra;
    }
    public function setDNI($dni){
        $this->dni = $dni;
    }
    public function setRUC($ruc){
        $this->ruc = $ruc;
    }
    public function setTipo($tipo){
        $this->tipo = $tipo;
    }
    
    public function VerificarUsuario(){
        return $this->cnx->VerificarUser($this->correo, $this->contraseña);
    }
    
    public function RegistrarUsuario(){
        return $this->cnx->RegistrarUser($this->correo, $this->contraseña);
    }

    public function RegistrarCliente(){
        return $this->cnx->RegistrarClnt($this->apellidos,$this->nombres,$this->telefono,$this->tipo,
        $this->ruc,$this->correo,$this->contraseña,$this->dni);
    }

    
    



}