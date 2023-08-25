<?php

class Medico extends Persona{
    private $especialidad;
    private $consultas;

 public function __construct($nombre, $direccion,$especialidad)
{
    parent::__construct($nombre, $direccion);
    $this->especialidad=$especialidad;
}

public function __toString()
{
    return "Medico ".parent::__toString()."Especialidad $this->especialidad";
    // TODO: Implement __toString() method.



}
    public function pasar_consulta($descripcion){
     $pos=sizeof($this->consultas);
    $this->consultas[$pos]['fecha']=time();

    $this->consultas[$pos]['accion']=$descripcion;
    }
public function visualizar_consultas(){
     $msj="Consultas del medico $this->nombre de $this->especialidad";
     foreach ($this->consultas as $index=>$consulta);
     $hora =date("H:i:s",$consulta['fecha']);
     $msj.="Consulta $index.Hora $hora, descripcion {$consulta['accion']}";
 }

}




?>