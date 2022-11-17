<?php
$num1=[5,6,7,8,89];
$num2=[5,6,7,8,89];
$total=$num1+$num2;
var_dump($total);

$notas =array_fill(0,15,0);
var_dump($notas);

function valor(){
    return rand(5,10);
}

$notas=array_map('valor',$notas);

foreach ($notas as  $nota) {
    echo "La nota es $nota <br>";
}

$min=($notas);
$max=($notas);
$avg=array_sum($notas)/count($notas);

echo "La media es $avg,la maxima es $max y la minima es $min";

$notas2=array_fill(0,15,rand(1,10));
function valor2(){
    return rand(0,5);
}

$notas2=array_map('valor' ,$notas2);
var_dump($notas2);
var_dump($notas);

$notas_total=array_merge($notas,$notas2);
$pos=array_search(10,$notas_total);
echo "En el array hay un 10 en la posicion $pos";

if (in_array(7,$notas_total)&& in_array(4,$notas_total))
echo "Hay un 7 y un 4";
else
    echo "No hay un 7 y 4";

sort($notas_total);
var_dump($notas_total);
rsort($notas_total);
var_dump($notas_total);

$notas_sin_suplicados=array_unique($notas_total);
var_dump($notas_sin_suplicados);
sort($notas_sin_suplicados);
var_dump($notas_sin_suplicados);

?>









