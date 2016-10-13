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
        class Empleado{
            
            private $nombre;
            private $sueldo;
            
            public function inicializar($nom, $sue) {
                $this->nombre=$nom;
                $this->sueldo=$sue;
            }
            
            public function imprimir() {
                echo 'El o la Ciudadan@ '.$this->nombre;
                if($this->sueldo <= 3000){
                    echo "usted no paga impuestos porque gana $".$this->sueldo.'<br>';
                }else{
                    echo 'usted paga impuestos porque gana $'.$this->sueldo.'<br>';
                }
                
            } 
            
        }
        $imp = new Empleado;
        $imp->inicializar('Marshal, ', 2500);
        $imp->imprimir();
        
        $imp2 = new Empleado;
        $imp2->inicializar('Liliana, ', 3500);
        $imp2->imprimir();
        ?>
    </body>
</html>
