<?php

class Persona
{
    protected $nombre;
    protected $pais;

    public function __construct($nombre, $pais)
    {

        $this->nombre = $nombre;
        $this->pais = $pais;


    }
    public function escuderia()
    {
        return "Escuderia alpine formula 1 team";
    }

    public function __toString()
    {
        return " $this->nombre,pais: $this->pais ,";
    }

}