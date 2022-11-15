<?php
//Crear un array de una instruccion

function inicializa(){
    return rand(1,10);
}

$notas =array_fill(0,10,0);
$notas=array_map('inicializa',$notas);


$notas=[];

for ($i=0;$i<=10;$i++)
    $notas[$i]=rand(1,10);

$min=$notas[0];
$max=$notas[0];
$total=0;
for ($i=0;$i<=10;$i++){
    if ($max<$notas[$i])
        $max=$notas[$i];
    if ($min>$notas[$i])
        $min=$notas[$i];
        $total += $notas[$i];
}


echo "la nota primera es {$notas[0]} <br>";
echo "la nota segunda es {$notas[1]} <br>";
echo "la nota tercera es {$notas[2]} <br>";
echo "la nota cuarta es {$notas[3]} <br>";
echo "la nota quinta es {$notas[4]} <br>";
echo "la nota sexta es {$notas[5]} <br>";
echo "la nota septima es {$notas[6]} <br>";
echo "la nota octava es {$notas[7]} <br>";
echo "la nota novena es {$notas[8]} <br>";
echo "la nota decima es {$notas[9]} <br>";
?>