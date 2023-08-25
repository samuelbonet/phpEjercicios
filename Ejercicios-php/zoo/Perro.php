<?php

class Perro extends Animal
{

public function __construct($patas,$raza){

    parent::__construct($patas);
    $this->raza=$raza;
}
public function hablar(){
    return "guau";
}
}