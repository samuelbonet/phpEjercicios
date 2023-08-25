<?php

 class Gato extends Animal
{
    public function __construct($patas){
    parent::__construct($patas);
    }
    public function hablar(){
        return "miuau";
    }
}