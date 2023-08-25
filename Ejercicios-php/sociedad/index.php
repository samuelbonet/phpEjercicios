<?php


function carga($clase){ //funcion para cargar las clases
    require "$clase.php"; //carga la clase
}

spl_autoload_register('carga'); //registra la funcion de carga

$medico1=new Medico ("Maria","Casa de maría","Cirujana"); //crea un objeto de la clase medico
$conserje=new Conserje("Luis","Casa de Luis","1222223232");
$enfermero=new Enfermero("Paco","Casa de Pepe","1980");
echo "El medico es $medico1"; //muestra el objeto
echo"El enfermero es $enfermero";
echo"El conserje es $conserje";

echo $enfermero->fichar(); //llama al metodo fichar
echo $conserje->fichar();
echo $medico1->fichar();

$medico1->pasar_consulta("Paciente quiere paracetamol"); //llama al metodo pasar consulta
$medico1->pasar_consulta("Paciente quiere paracetamol");
$medico1->pasar_consulta("Paciente quiere paracetamol");


$conserje->dar_aviso($medico1,"urgente atender a una visita"); //llama al metodo dar aviso

$medico1->visualizar_consultas(); //llama al metodo visualizar consultas

?>