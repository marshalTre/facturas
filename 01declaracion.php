<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        class Persona {

            private $nombre;

            public function inicializar($nom) {
                $this->nombre=$nom;
            }
            
            public function imprimir(){
                echo $this->nombre;
                echo '<br>';
            }

        }
        
        $per1 = new Persona();
        $per1->inicializar('Marshal');
        $per1->imprimir();
        
        $per2 = new Persona();
        $per2->inicializar('Lily');
        $per2->imprimir();
        
        ?>
        
    </body>
</html>
