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

        class Menu {

            private $enlace = array();
            private $titulo = array();

            public function cargarDatos($en, $tit) {
                $this->enlace[] = $en;
                $this->titulo[] = $tit;
            }

            public function mostrarHorizontal() {
                for ($f = 0; $f < count($this->enlace); $f++) {
                echo '<a href="' . $this->enlace[$f]. '">' . $this->titulo[$f];
                    echo '-';
                }
            }

            public function mostrarVertical() {
                for ($f = 0; $f < count($this->enlace); $f++) {
                    echo '<a href="' . $this->enlace[$f] . '">' . $this->titulo[$f]. '<br>';
                }
            }

        }
        
        $menu1=new Menu();
        $menu1->cargarDatos('http://www.google.com','Google');
        $menu1->cargarDatos('http://www.yahoo.com','Yahoo');
        $menu1->cargarDatos('http://www.msn.com','MSN');
        $menu1->mostrarVertical();
        $menu1->mostrarHorizontal();
        
        ?>
    </body>
</html>
