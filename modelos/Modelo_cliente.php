<?php
class Modelo_cliente {
    private $conexion;

     function __construct() {
        require_once('../database/Conexion.php');
        $this->conexion = new ConexionBD();
    }

    function TraerClientes() {
        $sql = "SELECT * FROM cliente";
        $statement = $this->conexion->conexion->prepare($sql);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}