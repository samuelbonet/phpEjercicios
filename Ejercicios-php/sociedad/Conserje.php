<?php

class Conserje extends Persona
{

    private $telefono;


    public function __construct($nombre, $direccion,$telefono)
    {
        parent::__construct($nombre, $direccion);
        $this->$telefono=$telefono;
    }

    public function __toString()
    {

        return ("Conserje ".parent::__toString() . "Telefono this->telefono");
        // TODO: Implement __toString() method.
    }

    public function dar_aviso(Medico $medico1,$string)
    {
        $medico1 ->pasar_consulta($string);
    }


}





?>