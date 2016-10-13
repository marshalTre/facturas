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
        
        class cabeceraPagina{
            
            private $titulo;
            private $ubicacion;
            
            public function inicializar($tit, $ubi) {
                $this->titulo=$tit;
                $this->ubicacion=$ubi;
            }
            public function graficar() {
                echo '<div style="font-size:40px;text-align:'.$this->ubicacion.'">';
                echo $this->titulo.'</div>';
                
            }
            
        }
        
        $cabecera=new cabeceraPagina();
        $cabecera->inicializar('El blog del programador', 'center');
        $cabecera->graficar();
        
        ?>
    </body>
</html>
