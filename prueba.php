<!--<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/bootstrap-3.3.6-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/datepicker.css">
        <title></title>
    </head>
    <body>
        <input type="text" name="date" class="datepicker" >

        <script src="css/bootstrap-3.3.6-dist/js/bootstrap.js"></script>
        <script src="css/bootstrap-3.3.6-dist/js/jquery-1.11.3.min.js"></script> 
        <script src="css/bootstrap-3.3.6-dist/js/bootstrap.js"></script> 
        <script src="js/bootstrap-datepicker.js"></script> 

        <script>
            $(function (){
                    $('.datepicker').datepicker();
                });
        </script>
    </body>
</html>-->
<?php


require_once './control/datos_conexion.php';

//$factura= filter_input(INPUT_POST, 'fact');
//$contrato = filter_input(INPUT_POST, 'cont');
//$importe = filter_input(INPUT_POST, 'impo');
//$provedor = filter_input(INPUT_POST, 'prov');
////$remision = filter_input(INPUT_POST, 'remi');
//$fechaFac = filter_input(INPUT_POST, 'date');
//$capturista = filter_input(INPUT_POST, 'captur');


//$inserta = "INSERT INTO facturas(no_factura, importe, fecha_factura, usuarios_id_usuario, cat_contrato_id_contrato, cat_proveedor_id_proveedor)
//    VALUES ('$factura','$importe','$fechaFac','$capturista','$contrato','$provedor')";
//
//$query = mysqli_query(conector::conexion(), $inserta);

$select="SELECT no_factura FROM facturas WHERE id_factura=1";
$query = mysqli_query(conector::conexion(),$select);

echo $query;



//if($consulta > 0){
//    
//    
//    echo 'Se genero bien el query';
//    
//}else{
//    
//    echo 'No se genera el query'. mysqli_error(conector::conexion(), $consulta);
//}
//header('Location: ./controlador.php?captu= '. $capturista.'');
