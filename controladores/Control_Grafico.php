<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require '../modelos/Modelo_grafico.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $ano = $_POST['anno'];
    $MG = new Modelo_grafico();
    $consulta = $MG->TraerDatosGraficoBar($ano);
    echo json_encode($consulta);
}