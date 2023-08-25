<?php

abstract class Animal
{


    public function __construct($patas){
        $this->patas=$patas;
    }
    abstract public function hablar();


}