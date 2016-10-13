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

        class CabeceraPagina {

            private $titulo;
            private $ubicacion;
            private $colorFon;
            private $colorFuen;

            public function __construct($tit, $ubi, $colFo, $colFu) {
                $this->titulo = $tit;
                $this->ubicacion = $ubi;
                $this->colorFon = $colFo;
                $this->colorFuen = $colFu;
            }

            public function graficar() {
                echo '<div style="font-size:40px; text-align:' . $this->ubicacion . ';'
                . 'color:' . $this->colorFuen . '; background-color:' . $this->colorFon . '">'
                . $this->titulo . '</div>';
            }

        }
        
        $cabecera=new CabeceraPagina('ese trabajo es mio', 'center', 'black', 'white');
        $cabecera->graficar();
        ?>
    </body>
</html>
