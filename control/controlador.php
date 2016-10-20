<?php
if (!isset($_SESSION)) {
    session_start();
}
error_reporting(0);

require_once './datos_conexion.php';
$capturista = filter_input(INPUT_GET, 'captu');

$revision = "SELECT * FROM facturas WHERE usuarios_id_usuario = '" . $capturista . "' ORDER BY id_factura DESC LIMIT 1";

$query2 = mysqli_query(conector::conexion(), $revision);



if ($query2 < 0) {

    echo "<font color='red'><h2>No se pudo ejecutar la consulta</h2></font>";
    exit;
}
while ($reg = mysqli_fetch_array($query2)) {
    ?>

    <!DOCTYPE html>

    <html lang="es">

        <head>
            <meta charset="utf-8" />
            <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
            <meta http-equiv='cache-control' content='no-cache'> <meta http-equiv='expires' content='0'> <meta http-equiv='pragma' content='no-cache'>
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
            <link rel="stylesheet" href="../css/style.css">
            <link rel="stylesheet" href="../css/nav.css">
            <link rel="stylesheet" href="../css/datepicker/css/datepicker.css">
            <script type="text/javascript" src="../js/eje.js"></script>
            <script type="text/javascript" src="../js/subeje.js"></script>
            <script type="text/javascript" src="../js/mayusculas.js"></script>
            <!-- Bootstrap -->
            <link rel="stylesheet" href="../css/bootstrap-3.3.6-dist/css/bootstrap.min.css">
            <link rel="stylesheet" href="../css/datepicker.css">
            <script>
                $(function () {
                    $('.datepicker').datepicker();
                });
            </script>



            <title>Captura</title>
        </head>

        <body onload="nobackbutton();">
            <header>
                <center>
                    <image id="image1" src="../images/sedeso.png"/> 
                    <image id="image2" src="../images/DGIDS.png"/> 
                    <p class="text">Registro de Facturas</p>
                    <h3 id="reg" >Enlace Administrativo</h3>
                    <hr>
                </center>

            </header>
            <nav id="navigation">
                <center>
                    <!--                    <ul>
                    
                                            <li><a href='./cerrarSesion.php' class="btn2" target="_top">Salir</a></li>
                                        </ul>-->
                    <?php
                    setlocale(LC_TIME, 'es_ES.UTF-8');
                    echo strftime("%A, %d de %B de %Y")
                    ?>
                </center>
            </nav>
            <br><br><br>

            <h2>Dato insertado</h2>
            <h4>Verifique que todos sus datos sean correctos</h4>

            <div class="container"></br></br></br>          
                <form action="./modificar.php" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <label>Numero de Factura</label></br>
                            <input type="text" name="factura" class="organizacion" value="<?php echo $reg['no_factura'] ?>"size="70"  onChange="conMayusculas(this)"   >
                        </div>
                        <div class="col-md-6">
                            <label>Importe</label></br>
                            <input type="number" name="importe" class="organizacion" value="<?php echo $reg['importe'] ?>"size="70"  onChange="conMayusculas(this)"   >
                        </div>
                        <div class="col-md-3 col-md-offset-2">
                            <label>Provedor</label></br>
                            <select name="provedor">
                                <option value=""></option>
                                <option value="1" <?php
                                if ($reg["cat_proveedor_id_proveedor"] == '1') {
                                    echo "selected";
                                }
                                ?>>Marshal Y Asociados</option>
                                <option value="2"<?php
                                if ($reg["cat_proveedor_id_proveedor"] == '2') {
                                    echo "selected";
                                }
                                ?>>Locos del ritmo</option>                                
                            </select></br></br>
                        </div>    
                        <div class="col-md-3 col-md-offset-2">
                            <label>Contrato</label></br>
                            <select name="contratos">
                                <option value=""></option>
                                <option value="1" <?php
                                if ($reg["cat_contrato_id_contrato"] == '1') {
                                    echo "selected";
                                }
                                ?>>Esta chido</option>
                                <option value="2"<?php
                                if ($reg["cat_contrato_id_contrato"] == '2') {
                                    echo "selected";
                                }
                                ?>>No esta chido</option>                                
                            </select></br></br>
                        </div>
                        <div class="row">
                        <div class="col-md-6">
                            <label>Fecha de factura</label>
                            <input type="text" name="date" class="datepicker" value="<?php echo $reg['fecha_factura'] ?>" placeholder="Elige una fecha" >
                        </div>                    
                    </div>    
                    </div>
                </form>
                <div class="col-md-1 col-md-offset-2">
                    <a href='../control/cerrarSesion.php' class="btn btn-primary btn-md" target="_top">Salir</a><br><br>

                        </div>
                <div class="col-md-1 col-md-offset-3">
                    <button type="submit"class="btn btn-primary btn-md" onclick = "location = '../administradores.php'"/>Aceptar</button><br><br>
                </div>
            </div>


            <aside>

            </aside>

            <footer>

            </footer>

            <script src="../css/bootstrap-3.3.6-dist/js/bootstrap.js"></script>
            <script src="../css/bootstrap-3.3.6-dist/js/jquery-1.11.3.min.js"></script> 
            <script src="../js/bootstrap-datepicker.js"></script> 

        </body>
    </html>
    <?php
}
?>
