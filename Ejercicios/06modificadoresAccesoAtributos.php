<!DOCTYPE html>

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

            public function cargar($en, $tit) {
                $this->enlace[] = $en;
                $this->titulo[] = $tit;
            }

            private function mostrarHorizontal() {
                for ($h = 0; $h < count($this->enlace); $h++) {
                    echo "<a href='" . $this->enlace[$h]. "'>" . $this->titulo[$h].'</a>';
                    echo ' ';
                }
            }

            private function mostrarVertical() {
                for ($v = 0; $v < count($this->enlace); $v++) {
                    echo "<a href='" . $this->enlace[$v]. "'>" . $this->titulo[$v].'</a>';
                    echo '<br>';
                }
            }

            public function mostrar($orientacion) {
                if (strtolower($orientacion) == "horizontal") {
                    $this->mostrarHorizontal();
                } else {
                    $this->mostrarVertical();
                }
            }

        }

        $menu1 = new Menu();
        $menu1->cargar('http://www.lanacion.com.ar', 'La Nación');
        $menu1->cargar('http://www.clarin.com.ar', 'El Clarín');
        $menu1->cargar('http://www.lavoz.com.ar', 'La Voz del Interior');
        $menu1->mostrar("HORIZONTAL");
        echo '<br>';
        $menu2 = new Menu();
        $menu2->cargar('http://www.google.com', 'Google');
        $menu2->cargar('http://www.yahoo.com', 'Yhahoo');
        $menu2->cargar('http://www.msn.com', 'MSN');
        $menu2->mostrar("VERTICAL");
        ?>
    </body>
</html>
