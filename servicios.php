<?php 
header("Access-Control-Allow-Origin: *");

require 'includes/funciones.php';

$servicios = obtenerServicios();

echo json_encode($servicios, JSON_UNESCAPED_UNICODE);
