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
            private $titulos = array();

            public function cargarOpcion($en, $tit) {
                $this->enlace[] = $en;
                $this->titulos[] = $tit;
            }

            public function mostrar() {
                for ($f=0; $f<count($this->enlace);$f++) {
                    echo '<a href="'.$this->enlace[$f].'">'.$this->titulos[$f].'</a>';
                    echo '-';
                }
            }

        }

        $menu1 = new Menu();
        $menu1->cargarOpcion('http://www.google.com', 'Google');
        $menu1->cargarOpcion('http://www.yahoo.com', 'Yhahoo');
        $menu1->cargarOpcion('http://www.msn.com', 'MSN');
        $menu1->mostrar();
        ?>
    </body>
</html>
