<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        class CabeceraPagina{
            private $titulo;
            private $ubicacion;
            
            public function __construct($tit,$ubi) {
                $this->titulo=$tit;
                $this->ubicacion=$ubi;
            }
            
            public function graficar() {
                echo '<div style="font-size:40px; text-align:'.$this->ubicacion.'">'
                        .$this->titulo.'</div>';
            }
        
        }
        
        $cabecera= new CabeceraPagina('Mio es ese trabajao en el Nombre de Jesús','center');
        $cabecera->graficar();
        ?>
    </body>
</html>
