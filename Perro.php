<?php
class Perro{
    // Propiedades
    private int $peso = 0 ;
    private string $raza = 'sin raza';
    private string $color = 'sin color';
    private string $nombre = 'sin nombre';

    // métodos 
    public function getpropiedades():string{
        return "$this->raza,$this->peso,$this->color,$this->nombre";
    }
    //Establecer las condiciones para que el valor ingresado solo contenga letras y que su longitud
    //no supere los 20 caracteres y que devuelva un booleano si la operación fue exitosa o no.
    public function setNombre(string $valor):bool{
        $mensaje_error = TRUE;
        (ctype_alpha($valor)&& strlen($valor)<=20) ? $this->nombre=$valor : $mensaje_error = FALSE;
        return  $mensaje_error;
    } 
    //metodo para controlar el peso del perro par aque acepte solo numeros y el peso este entre 0 a 60
    public function setPeso(int $dato):bool{
        $mensaje_error = TRUE;
        ctype_digit($dato) or ($dato > 0 && $dato<=60) ?$this->peso=$dato :$mensaje_error = FALSE;
        return $mensaje_error;
        }
    }