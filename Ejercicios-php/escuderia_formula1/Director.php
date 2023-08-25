<?php

class Director extends Persona
{
    private $cargo;

    public function __construct($nombre, $pais, $cargo)
    {
        parent::__construct($nombre, $pais);
        $this->cargo = $cargo;

    }

    public function __toString()
    {
        return "Director " . parent::__toString() . "Cargo: $this->cargo";
        // TODO: Implement __toString() method.



    }
    public function reunion()
    {
        $hora=date("H:i:s");
    $msj="El director se reunira con los pilotos a las $hora " ;
    echo $msj;
    }
    

}