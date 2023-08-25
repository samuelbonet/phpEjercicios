<?php

function carga($clase)
{
    require "$clase.php";
}

spl_autoload_register('carga');

$piloto1 = new Piloto("Alonso", "España","Barcelona");
$piloto2 = new Piloto("Ocon", "Francia","Monaco" );
$mecanico = new Mecanico("Luis", "España", "ruedas");
$director = new Director("Szafnauer", "Rumania", "ejecutivo");

echo "El primer piloto es: $piloto1 <br>" ;
echo "El segundo piloto es : $piloto2 <br>";
echo "El mecanico es $mecanico <br>";
echo "El director es $director <br>";

echo $piloto1->escuderia();
echo "<br>";
$mecanico->reparar();
echo "<br>";
$director->reunion();

