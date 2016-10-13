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
            private $cantFilas;
            private $cantColumnas;

            public function __construct($fi, $co) {
                $this->cantFilas = $fi;
                $this->cantColumnas = $co;
            }

            public function cargar($fila, $columna, $valor) {
                $this->mat[$fila][$columna] = $valor;
            }

            private function iniciarTabla() {
                echo '<table border="1">';
            }

            private function iniciarFila() {
                echo '<tr>';
            }

            private function mostrar($fi, $co) {
                echo '<td>' . $this->mat[$fi][$co] . '</td>';
            }

            private function finFila() {
                echo '</tr>';
            }

            private function finTabla() {
                echo '</table>';
            }

            public function graficar() {
                $this->iniciarTabla();
                for ($f = 1; $f <= $this->cantFilas; $f++) {
                    $this->iniciarFila();
                    for ($c = 1; $c <= $this->cantColumnas; $c++) {
                        $this->mostrar($f, $c);
                    }
                    $this->finFila();
                }
                $this->finTabla();
            }

        }

        $tabla1 = new Tabla(2, 3);
        $tabla1->cargar(1, 1, "1");
        $tabla1->cargar(1, 2, "2");
        $tabla1->cargar(1, 3, "3");
        $tabla1->cargar(2, 1, "4");
        $tabla1->cargar(2, 2, "5");
        $tabla1->cargar(2, 3, "6");
        $tabla1->graficar();
        ?>
    </body>
</html>