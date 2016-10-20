<?php

header('Content-Type: text/html; charset=UTF-8');

if (!isset($_SESSION)) {
    session_start();
}
error_reporting(0);

require_once './datos_conexion.php';

$factura= filter_input(INPUT_POST, 'fact');
//$contrato = filter_input(INPUT_POST, 'cont');
$importe = filter_input(INPUT_POST, 'impo');
$provedor = filter_input(INPUT_POST, 'prov');
$contratos = filter_input(INPUT_POST, 'contra');
//$remision = filter_input(INPUT_POST, 'remi');
$fechaFac = filter_input(INPUT_POST, 'date');
$capturista = filter_input(INPUT_POST, 'captur');


$inserta = "INSERT INTO facturas(no_factura, importe, fecha_factura, usuarios_id_usuario, cat_contrato_id_contrato, cat_proveedor_id_proveedor)
    VALUES ('$factura','$importe','$fechaFac','$capturista','$contratos','$provedor')";

$query = mysqli_query(conector::conexion(), $inserta);


if($query){
    
    header('Location: ./controlador.php?captu= '. $capturista.'');
    
    
}else{
    
    echo 'No se genera el query'. mysqli_error(conector::conexion(), $consulta);
    
}
    


