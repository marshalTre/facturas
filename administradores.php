<?php
if (!isset($_SESSION)) {
    session_start();
}
error_reporting(0);
require_once './control/datos_conexion.php';
$user = "SELECT * from usuarios WHERE login='" . $_SESSION["session_user"] . "'";
$queryUs = mysqli_query(conector::conexion(), $user);
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
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/nav.css">
        <link rel="stylesheet" href="css/datepicker/css/datepicker.css">
        <script type="text/javascript" src="js/eje.js"></script>
        <script type="text/javascript" src="js/subeje.js"></script>
        <script type="text/javascript" src="js/mayusculas.js"></script>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="css/bootstrap-3.3.6-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/datepicker.css">
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
                <image id="image1" src="images/sedeso.png"/> 
                <image id="image2" src="images/dgids.png"/> 
                <p class="text">Registro de Facturas</p>
                <h3 id="reg" >Enlace Administrativo</h3>
                <hr>
            </center>

        </header>
        <nav >
            <center>
                <ul>
                    <div class="col-md-1 col-md-offset-3">
                        <button type="submit"class="imp"  onclick = "location = 'busqueda.php'"/>Buscar</button><br><br>
                    </div>
                </ul>
                <ul>
                    <?php
                    setlocale(LC_TIME, "es_MX.UTF-8");
                    echo strftime("%A, %d de %B de %Y");
                    ?>
                </ul>
            </center>
        </nav>

        <div class="container-fluid"></br></br></br>          
            <form action="control/insertar.php" method="post">

                <div class="row">
                    <div class="col-md-6">
                        <label>Numero de Factura</label></br>
                        <input type="text" name="fact" class="organizacion" placeholder="Factura" size="70" onChange="conMayusculas(this)" required >
                    </div>
                    <div class="col-md-3 col-md-offset-1">
                        <label>Numero de Contrato</label></br>
                        <input type="text" name="cont" class="organizacion" placeholder="Contrato" size="70" onChange="conMayusculas(this)" required ></br></br>
                    </div>    
                </div>
                <div class="row">
                    <div class="col-md-4">            
                        <label>Importe</label></br>
                        <input type=number name="impo" class="repre" placeholder="Importe" size="60" onChange="conMayusculas(this)" required >
                    </div>
                    <div class="col-md-4">
                        <label>Provedor</label></br>
                        <select name="prov">
                            <option value=""></option>
                            <option value="1">Marshal y asociados</option>
                            <option value="2">Locos del ritmo</option>

                        </select></br><br>
                    </div></br></br>
                    <div class="col-md-4">
                        <label>Contrato</label></br>
                        <select name="prov">
                            <option value=""></option>
                            <option value="1">Esta chido</option>
                            <option value="2">No esta chido</option>

                        </select></br><br>
                    </div></br></br>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Fecha de factura</label>
                            <input type="text" name="date" class="datepicker" placeholder="Elige una fecha" >
                        </div>                    
                    </div>               
                </div>

                <div class="row">
                    <?php while ($reg = mysqli_fetch_array($queryUs)) { ?>
                        <div class="col-md-3">            
                            <label>ID de capturista</label></br>
                            <input type="text" name="captur" class="repre" value="<?php echo $reg['id_usuario'] ?>" size="1" OnFocus="this.blur()">
                        </div>
                    <?php } ?>

                    <div class="row"><br><br><br><br><br><br>
                        <div class="col-md-1 col-md-offset-4">
                            <button type="submit"class="btn btn-danger btn-md" >Ingresar</button><br><br>
                        </div>
                        <div class="col-md-1 col-md-offset-2">
                            <a href='control/cerrarSesion.php' class="btn btn-primary btn-md" target="_top">Salir</a><br><br>

                        </div>
                    </div>     

                </div>
            </form>
        </div>

        <aside>

        </aside>

        <footer>

        </footer>

        <script src="css/bootstrap-3.3.6-dist/js/bootstrap.js"></script>
        <script src="css/bootstrap-3.3.6-dist/js/jquery-1.11.3.min.js"></script> 
        <script src="js/bootstrap-datepicker.js"></script> 
        <!--        archivos necesarios para generar los jquery y javascript de bootstrap sin internet-->

    </body>
</html>
