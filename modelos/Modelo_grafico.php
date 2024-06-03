<?php
class Modelo_grafico {
    private $conexion;

    function __construct() {
        require_once('../database/Conexion.php'); 
        $this->conexion = new ConexionBD();
    }

    function TraerDatosGraficoBar($ano) {
        return $this->conexion->TraerDatosGraficoBar($ano);
    }
      
}
?>