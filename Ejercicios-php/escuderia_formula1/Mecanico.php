<?php

class Mecanico extends Persona
{

    private $especialidad;


    public function __construct($nombre, $pais, $especialidad)
    {
        parent::__construct($nombre, $pais);
        $this->especialidad = $especialidad;
    }

public function __toString()
{
return "Mecanico ".parent::__toString(). " su especialidad: $this->especialidad";
// TODO: Implement __toString() method.
}

public function reparar (){
    $hora=date("14:12:s");
    $msj="Reparar los neumaticos que los pilotos tuvieron a las $hora " ;
    echo $msj;
}
}