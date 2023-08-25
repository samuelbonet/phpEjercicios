<?php

class Racional
{
    private $numerador;
    private $denominador;


    public function __construct ($numero_racional){
        $numero_racional = explode("/", $numero_racional);
        $this->numerador = $numero_racional[0];
        if (isset($numero_racional[1])) {
            $this->denominador = $numero_racional[1];
        } else {
            $this->denominador = 1;
        }
        
    }


    public function sumar ($numero){
       $this->numerador= $this->numerador * $numero->denominador +  
        $numero->numerador * $this->denominador;
        $this->denominador= $this->denominador * $numero->denominador;

    }
    public function restar ($numero){
        $this->numerador= $this->numerador * $numero->denominador -
         $numero->numerador * $this->denominador;
         $this->denominador= $this->denominador * $numero->denominador;
 
     }

     public function multiplicar ($numero){
        $this->numerador = $this->numerador * $numero->numerador;   
         $this->denominador= $this->denominador * $numero->denominador;
 
     }
     public function dividir ($numero){
        $this->numerador= $this->numerador * $numero->denominador;
         $this->denominador= $this->denominador * $numero->numerador;
 
     }



    public function __toString(){
        return $this->numerador . "/" . $this->denominador;
    }
}