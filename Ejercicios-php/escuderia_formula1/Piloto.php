<?php

class Piloto extends Persona
{

    private $circuito;


    public function __construct($nombre, $pais, $circuito)
    {
        parent::__construct($nombre, $pais);
        $this->circuito = $circuito;
    }

    public function __toString()
    {
    return (parent::__toString() . "Circuito favorito: $this->circuito");
    // TODO: Implement __toString() method.
    }



}