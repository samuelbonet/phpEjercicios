<?php

class Operacion
{
const REAL = 1;
const RACIONAL = 2;
const ERROR = 0;

    public static function tipo_operacion(mixed $operacion)
    {
        $numEntero = "(0|[1-9][0-9]*)";
        $numReal = "(0(\.[0-9]+)?|[1-9][0-9]*(\.[0-9]+)?)";
        $numRacional= "$numEntero\/$numEntero";
        $opReal="[\+\-\*\/]";
        $opRacional= "[\+\-\*:]";

        $operacionReal = "#^$numReal\s$opReal\s$numReal$#";
        $operacionRacional1="#^$numEntero\s$opRacional\s$numRacional$#";
        $operacionRacional2="#^$numRacional\s$opRacional\s$numEntero$#";
        $operacionRacional3="#^$numRacional\s$opRacional\s$numRacional$#";

        

        if (preg_match($operacionReal, $operacion)) {
            return self::REAL;
        } elseif (
            preg_match($operacionRacional2, $operacion)
            || preg_match($operacionRacional3, $operacion)
            || preg_match($operacionRacional1, $operacion)
        ) {
            return self::RACIONAL;
        } else {
            return self::ERROR;
        }
    }
}