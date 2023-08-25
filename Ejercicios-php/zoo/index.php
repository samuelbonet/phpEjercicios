<?php

function carga($clase){
    require "$clase.php";
}

spl_autoload_register('carga');

$p1=new Perro (4,"Bueno");
$g1=new Gato (3);
echo "El perro dice " .$p1->hablar();
echo "El gato dice " .$g1->hablar();