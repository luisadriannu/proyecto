<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require '../modelos/Modelo_cliente.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$MG = new Modelo_cliente();
$consulta = $MG->TraerClientes();
echo json_encode($consulta);
}