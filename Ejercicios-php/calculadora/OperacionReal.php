<?php

class OperacionReal extends Operacion
{
    private $operacion;

    public function __construct($operacion)
    {
        $this->operacion = $operacion;
    }
    
    
    
    public function operar()
    {
        // "1.2 - 2"
        $operacion = explode(" ", $this->operacion);

        if ($operacion [1]=="+" ){
            return $operacion[0] + $operacion[2];
        }elseif($operacion [1]=="-") {
            return  $operacion[0] - $operacion[2]; 
        }elseif ($operacion [1]=="*"){
            return $operacion[0] * $operacion[2] ;
        } elseif ($operacion[1] == "/") {
            return $operacion[0] / $operacion[2];
        }
    }

}