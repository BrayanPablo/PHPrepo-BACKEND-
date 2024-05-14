<?php
declare(strict_types=1);
include('Perro.php');
$perro1 = new Perro;


//Imprimiendo datos 
//echo "La raza del perro es $raza, su peso es $peso, su color es $color y finalmente su nombre es $nombre";
$errorPeso = $perro1->setPeso(-10);
$errorNombre = $perro1->setNombre('firulais');
echo $errorNombre ? "Nombre del perro atualizado " :'Error al actualizar el nombre';
echo $errorPeso ? "peso del perro atualizado " :'Error al actualizar el peso';
$propiedades_perro = $perro1->getpropiedades();
list($raza, $peso, $color, $nombre) = explode(',',$propiedades_perro);
echo "<br> Nombre: <b>". $nombre."</b>";
echo "<br> Peso: <b>". $peso."</b>";
echo "<br> Color: <b>". $color."</b>";
echo "<br> Raza: <b>". $raza."</b>";



