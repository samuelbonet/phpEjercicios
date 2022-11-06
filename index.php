<?php

//VALORES
$numero1 = 50;
echo("El primer numero  es $numero1\n <br/>"); //entero

$numero2 = 50.4;
echo("El segundo numero  es $numero2\n <br/>"); //real

$numero3 = 0b1011;
echo("El tercer numero  es $numero3\n <br/>"); //binario

$numero4 = 0xFAfF4;
echo("El cuarto numero  es $numero4\n <br/>"); //hexadecimal

$numero5 = 0733353;
echo("El quinto numero  es $numero5\n <br/>"); //octal

$numero6 = 54e34;
echo("El sexto numero  es $numero6\n <br/>"); //notacion cientifica

$numero7 = 43e-10;
echo("El septimo numero  es $numero7\n <br/>"); //operaciones


//CONVERSIONES
$convertido = decbin($numero1);//convertido a binario
echo "<h1>El valor <span style='color:blue'>$numero1</span> en binario es $convertido </h1>";

$convertido = decoct($numero1);// convertido a octal
echo "<h1>El valor $numero1 en binario es $convertido </h1>";

$convertido = dechex($numero1); //convertido a hexadecimal
echo "<h1>El valor $numero1 en binario es $convertido </h1>";

printf ("<p>Valor de %d en binario es %b y caracter ascii %c</p>",$numero1,$numero1,$numero1);


//USO DE ECHO
$edad = 10;
echo("Valor de edad $edad\n <br/>");
$edad = 20;
echo("Valor de edad $edad\n <br/>");
$edad = "Maria";
echo("Valor de edad $edad\n <br/>");


//ARRAY
$v=[11,2,3,4,5,56];
echo "<hr>";
echo "57El valor del array v es ".print_r($v);
echo "<hr />"


//OBTENER EL TIPO DE VARIABLE
$variable=5;
echo "<h1>El valor de la variable \$variable es $variable 
y es de tipo <span style='color:green'> ".gettype($variable). "</span></h1>";//entero

$variable =true;
echo "<h1>El valor de la variable \$variable es $variable 
y es de tipo <span style='color:green'> ".gettype($variable). "</span></h1>";//booleano

$variable ="samuel";
echo "<h1>El valor de la variable \$variable es $variable 
y es de tipo <span style='color:green'> ".gettype($variable). "</span></h1>";//string

$variable =null;
echo "<h1>El valor de la variable \$variable es $variable 
y es de tipo <span style='color:green'> ".gettype($variable). "</span></h1>";//vacío


//CONCATENAR DOS VARIABLES
$nombre="samuel";
$apellido="bonet";
echo "<h1>Me llamo {$nombre} {$apellido}</h1>";


//DECLARACION Y USO DE CONSTANTES
const  a =1;
define ("NOMBRE2","Maria");
echo "valor  A ".a ."<br />";
echo "valor  B ".NOMBRE2."<br />";
echo "tipo  A ". gettype(a)."<br />";
echo "tipo  B ". gettype(NOMBRE2)."<br />";


//PARA SABER EN QUE RUTA ESTAS
echo "<h1>Estoy en la linea ".__LINE__." del fichero ".__FILE__." en directorio ".__DIR__."</h1>";


//GENERA UN NUMERO RANDOM Y DICE SI ES PAR O IMPAR
$numero=rand (4,8);

if ($numero %2 ==0)
    echo "Es par";
else
    echo "Es impar";
?>





















