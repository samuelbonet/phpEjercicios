<?php

class Enfermero extends Persona //clase enfermero que hereda de persona
{

    private $year_titulo; //atributo de la clase enfermero


    public function __construct($nombre, $direccion,$year_titulo) //constructor de la clase enfermero
    {
        parent::__construct($nombre, $direccion); //llama al constructor de la clase padre
        $this->$year_titulo=$year_titulo; //    asigna el valor del atributo de la clase enfermero
    }

    public function __toString()//metodo magico to string
    {
        return "Enfermero ".parent::__toString(). "year_titulo this->year_titulo"; //   muestra el nombre y la direccion del enfermero
        // TODO: Implement __toString() method.
    }


}





?>