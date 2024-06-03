<?php
define("server", "localhost");
define("usuario", "root");
define("password", "");
define("database", "alquiler_almacen");
define("puerto", "3306");

class ConexionBD {

    private $cadena;
    private $conexion;
    
    public function __construct() {
        try {
            $this->cadena="mysql:host=".server.";port=".puerto.";dbname=".database.";charset=utf8";
            $this->conexion = new PDO($this->cadena,usuario,password);
            
        }catch(Exception $ex){
            echo $ex->getMessage();
        }
    }

    public function VerificarUser($correo, $contra){

        $consulta = "SELECT * FROM usuario_cliente WHERE correo = '".$correo."' AND contraseña = '".$contra."'";
        $resultado = $this->conexion->prepare($consulta);
        $resultado->execute();
        $verificacion = "NO EXISTE";
        if($resultado->rowCount()>0){
            $verificacion = "SI EXISTE";      
        }

        return $verificacion;
    }

    public function VerificarTrab($correo, $contra){

        $consulta = "SELECT * FROM usuario_trabajador WHERE correo = '".$correo."' AND contraseña = '".$contra."'";
        $resultado = $this->conexion->prepare($consulta);
        $resultado->execute();
        $verificacion = "NO EXISTE";
        if($resultado->rowCount()>0){
            $verificacion = "SI EXISTE";      
        }

        return $verificacion;
    }

    public function RegistrarUser($correo, $contra){
        $respuesta = "";
        try {

            $consulta1 = "INSERT INTO usuario_cliente (correo,contraseña) values(?,?)";
            $rst1 = $this->conexion->prepare($consulta1);
            $rst1->bindParam(1,$correo);
            $rst1->bindParam(2,$contra);
            $rst1->execute();

            $respuesta = "SE REGISTRO CORRECTAMENTE";
            return $respuesta;
        } catch (Exception $ex) {
            $respuesta = "NO SE PUEDO REGISTRAR, ERROR: ".$ex->getMessage()."";
            return $respuesta;
        }
        
    }

    public function RegistrarClnt($ape, $nom, $telefono,$tipo,$ruc, $correo, $contra,$dni){
        $respuesta = "";
        try {
            
            $consulta1 = "INSERT INTO usuario_cliente (correo,contraseña) values(?,?)";
            $rst1 = $this->conexion->prepare($consulta1);
            $rst1->bindParam(1,$correo);
            $rst1->bindParam(2,$contra);
            $rst1->execute();

            $consulta2 = "INSERT INTO cliente (ape_cliente, nom_cliente, telefono, tipo, ruc, id_usuario, dni)
            values (?,?,?,?,?,(SELECT id_usuario FROM usuario_cliente WHERE correo = '".$correo."'),?)";
            $rst2 = $this->conexion->prepare($consulta2);
            $rst2->bindParam(1,$ape);
            $rst2->bindParam(2,$nom);
            $rst2->bindParam(3,$telefono);
            $rst2->bindParam(4,$tipo);
            $rst2->bindParam(5,$ruc);
            $rst2->bindParam(6,$dni);
            $rst2->execute();

            $respuesta = "EL CLIENTE SE REGISTRO CORRECTAMENTE";
            return $respuesta;
        } catch (Exception $ex) {
            $respuesta = "EL CLIENTE NO SE PUEDO REGISTRAR, ERROR: ".$ex->getMessage()."";
            return $respuesta;
        }
    }

    public function RegistrarTrab($ape, $nom, $telefono, $correo, $contra){
        $respuesta = "";
        try {

            $consulta1 = "INSERT INTO usuario_trabajador (correo,contraseña) values(?,?)";
            $rst1 = $this->conexion->prepare($consulta1);
            $rst1->bindParam(1,$correo);
            $rst1->bindParam(2,$contra);
            $rst1->execute();

            $consulta2 = "INSERT INTO cliente (nom_trab, telefono, id_)
            values (?,?,?,(SELECT id_usuario FROM usuario_cliente WHERE correo = '".$correo."'))";
            $rst2 = $this->conexion->prepare($consulta2);
            $rst2->bindParam(1,$ape);
            $rst2->bindParam(2,$nom);
            $rst2->bindParam(3,$telefono);
            $rst2->execute();

            $respuesta = "SE REGISTRO CORRECTAMENTE";
            return $respuesta;
        } catch (Exception $ex) {
            $respuesta = "NO SE PUEDO REGISTRAR, ERROR: ".$ex->getMessage()."";
            return $respuesta;
        }
        

    }

    public function RegistrarAlq($mes, $año, $idalmc, $tiempo, $ape){
        $respuesta = "";
        try {
            $consulta = "INSERT INTO alquiler (id_cliente, id_almacen, tiempo_alquiler, mes, año) 
            values ((SELECT id_cliente from cliente where ape_cliente = '".$ape."'),?,?,?,?) ";
            $rst = $this->conexion->prepare($consulta);
            $rst->bindParam(1,$idalmc);
            $rst->bindParam(2,$tiempo);
            $rst->bindParam(3,$mes);
            $rst->bindParam(4,$año);
            $rst->execute();

            $respuesta = "SE REGISTRO CORRECTAMENTE";
            return $respuesta;
        } catch (Exception $ex) {
            $respuesta = "NO SE PUEDO REGISTRAR, ERROR: ".$ex->getMessage()."";
            return $respuesta;
        }


    }
};