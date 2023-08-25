<?php

class Persona
{
protected $nombre;
protected $direccion;

public function __construct($nombre,$direccion){

    $this->nombre=$nombre;
    $this->direccion=$direccion;


}
public function fichar(){
return "Hora de entrada ".date("h:i:s");
}

public function __toString(){
    return "Nombre $this->nombre,dir $this->>direccion";
}

}






?>