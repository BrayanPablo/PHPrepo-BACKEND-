<?php
declare(strict_types=1);
include('Perro.php');
$perro1 = new Perro;
$propiedades_perro = $perro1->getpropiedades();
list($raza, $peso, $color, $nombre) = explode(',',$propiedades_perro);



//Imprimiendo datos 
echo "La raza del perro es $raza, su peso es $peso, su color es $color y finalmente su nombre es $nombre";
    