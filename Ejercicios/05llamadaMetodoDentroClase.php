<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        class Tabla {

            private $mat = array();
            private $colorFuente;
            private $colorFondo;
            private $filas;
            private $columnas;

            public function __construct($fil, $col) {
                $this->filas = $fil;
                $this->columnas = $col;
            }

            public function cargar($fila, $columna, $valor, $cfue, $cfon) {
                $this->mat[$fila][$columna] = $valor;
                $this->colorFuente= $cfue;
                $this->colorFondo= $cfon;
            }

            public function inicioTabla() {
                echo '<table border="1">';
            }

            public function inicioFila() {
                echo '<tr>';
            }

            public function mostrar($fi, $co) {
                echo '<td style="color:' . $this->colorFuente. '; background-color:' . $this->colorFondo. '">' . $this->mat[$fi][$co] . '</td>';
            }

            public function finFila() {
                echo '</tr>';
            }

            public function finTabla() {
                echo '</table>';
            }

            public function graficar() {
                $this->inicioTabla();
                for ($f = 1; $f <= $this->filas; $f++) {
                    $this->inicioFila();
                    for ($c = 1; $c <= $this->columnas; $c++) {
                        $this->mostrar($f, $c);
                    }
                    $this->finFila();
                }
                $this->finTabla();
            }

        }
        
        $tabla2 = new Tabla(2,3);
        $tabla2->cargar(1 , 1, "1", "white", "black");
        $tabla2->cargar(1 , 2, "2", "white", "black");
        $tabla2->cargar(1 , 3, "3", "white", "black");
        $tabla2->cargar(2 , 1, "4", "white", "black");
        $tabla2->cargar(2 , 2, "5", "white", "black");
        $tabla2->cargar(2 , 3, "6", "white", "black");
        $tabla2->graficar();
        ?>
    </body>
</html>
