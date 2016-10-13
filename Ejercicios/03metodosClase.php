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
            private $color;
            private $fuente;

            public function inicializar($tit, $ubi, $col, $fue) {
                $this->titulo = $tit;
                $this->ubicacion = $ubi;
                $this->color = $col;
                $this->fuente = $fue;
            }

            public function graficar() {
                echo '<div style="font-size:40px;text-align:' . $this->ubicacion . ';'
                        . 'background-color:'.$this->fuente.'; color:'.$this->color.'">';
                echo $this->titulo . '</div>';
            }

        }
        
        $cabecera=new CabeceraPagina();
        $cabecera->inicializar('mio es ese trabajo', 'center', 'white', 'black');
        $cabecera->graficar();
        ?>
    </body>
</html>
