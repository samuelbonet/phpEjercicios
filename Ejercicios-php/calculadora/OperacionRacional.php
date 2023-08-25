<?php

class OperacionRacional extends Operacion
{

    private $operacion;

    public function __construct($operacion)
    {
        $this->operacion = $operacion;
    }
    
    public function operar()
    {
        // "1/2 - 2/4"
        $operacion = explode(" ", $this->operacion);
        $operador1 = new Racional($operacion[0]);
        $operador2 = new Racional($operacion[2]);

        if ($operacion [1]=="+" ){
            $operador1->sumar($operador2);
            return $operador1;
        }elseif($operacion [1]=="-") {
            $operador1->restar($operador2);
            return $operador1;
        }elseif ($operacion [1]=="*"){
            $operador1->multiplicar($operador2);
            return $operador1;
        } elseif ($operacion[1] == ":") {
            $operador1->dividir($operador2);
            return $operador1;
        }
    }

}