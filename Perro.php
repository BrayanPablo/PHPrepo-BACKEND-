<?php
class Perro{
    // Propiedades
    private int $peso = 0;
    private string $raza = 'sin raza';
    private string $color = 'sin color';
    private string $nombre = 'sin nombre';

    // metodos 
    public function getpropiedades():string{
        return "$this->raza,$this->peso,$this->color,$this->nombre";
    }
}