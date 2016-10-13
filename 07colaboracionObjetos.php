<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        class cabecera {

            private $titulo;

            public function __construct($tit) {
                $this->titulo = $tit;
            }

            public function graficar() {
                echo '<h1 style="text-aling:center">' . $this->titulo . '</h1>';
            }

        }

        class cuerpo {

            private $lineas = array();

            public function insertarParrafo($li) {
                $this->lineas[] = $li;
            }

            public function graficar() {
                for ($f = 0; $f < count($this->lineas); $f++) {
                    echo '<p>' . $this->lineas[$f] . '</p>';
                }
            }

        }

        class pie {

            private $titulo;

            public function __construct($tit) {
                $this->titulo = $tit;
            }

            public function graficar() {
                echo '<h4 style="text-align:left>' . $this->titulo . '</h4>';
            }

        }

        class pagina {

            private $cabecera;
            private $cuerpo;
            private $pie;

            public function __construct($texto1, $texto2) {
                $this->cabecera = new cabecera($texto1);
                $this->cuerpo = new cuerpo();
                $this->pie = new pie($texto2);
            }

            public function insertarCuerpo($texto) {
                $this->cuerpo->insertarParrafo($texto);
            }

            public function graficar() {
                $this->cabecera->graficar();
                $this->cuerpo->graficar();
                $this->pie->graficar();
            }

        }

        $pagina1 = new Pagina('Título de la Página', 'Pie de la página');
        $pagina1->insertarCuerpo('Esto es una prueba que debe aparecer dentro del cuerpo de la página 1');
        $pagina1->insertarCuerpo('Esto es una prueba que debe aparecer dentro del cuerpo de la página 2');
        $pagina1->insertarCuerpo('Esto es una prueba que debe aparecer dentro del cuerpo de la página 3');
        $pagina1->insertarCuerpo('Esto es una prueba que debe aparecer dentro del cuerpo de la página 4');
        $pagina1->insertarCuerpo('Esto es una prueba que debe aparecer dentro del cuerpo de la página 5');
        $pagina1->insertarCuerpo('Esto es una prueba que debe aparecer dentro del cuerpo de la página 6');
        $pagina1->insertarCuerpo('Esto es una prueba que debe aparecer dentro del cuerpo de la página 7');
        $pagina1->insertarCuerpo('Esto es una prueba que debe aparecer dentro del cuerpo de la página 8');
        $pagina1->insertarCuerpo('Esto es una prueba que debe aparecer dentro del cuerpo de la página 9');
        $pagina1->graficar();
        ?>
    </body>
</html>
