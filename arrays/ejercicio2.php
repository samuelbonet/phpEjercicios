<?php
$cosas = [1,"nombre",2,"apellido",[1,2,3]];

var_dump($cosas);


$cosas[14] = "messi";
$cosas[29] = "ronaldo";
var_dump($cosas);
foreach ($cosas as $item){
    $copia[]=$item;
}

$cosas=$copia;
var_dump($cosas);




?>
