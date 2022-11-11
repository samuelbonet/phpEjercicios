<?php
//identifico las variables
$intentos;//el numero de intentos para el juego
$jugada;//la jugada actual
$numero_generado;//el valor que el programa me dice a ver si lo he acertado
$min;
$max;
$opcion;//si el numero es mayor menor o he acertado

$accion=$_POST['submit'] ?? null;
switch ($accion){
    case 'reiniciar' :
    case 'Empezar':
    $intentos =$_POST['intentos'];
    $min=0;
    $max=pow(2,$intentos);
    $jugada=1;
    $numero_generado=($min + $max)/2;
    break;
    case 'jugar':
        $max =$_POST['max'];
        $min =$_POST['min'];
        $numero_generado =$_POST['numero_generado'];
        $intentos =$_POST['intentos'];
        $jugada =$_POST['jugada'];
        $opcion =$_POST['opcion'];

        switch ($opcion){
            case ">":
                $min =$numero_generado;
                break;
            case "<":
                $max =$numero_generado;
                break;
            case "=":
                $acertado=true;
                header("Location:fin.php?acertado=$acertado");
               exit();

        }

        $jugada++;
        $numero_generado=($min + $max)/2;
        break;

default:
    header("Location:index.php");
    exit();
}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>El numero pensado es <?=$numero_generado?></h1>
<h1>Estas en la jugada <?=$jugada?></h1>
<form action="jugar1.php" method="post">


    <fieldset>
        <legend>Empieza el juego</legend>
        <h1>EL numero es 512?</h1>
        <p>Jugada1</p>
        <fieldset>
            <legend>Indica como es el numero que has pensado</legend>


        <input type="radio" name="opcion" value=">"> mayor<br>
        <input type="radio" name="opcion" value="< "> menor<br>
        <input type="radio" name="opcion" value="=">igual<br>
        </fieldset>

        <input type="submit" name="submit" value="jugar">
        <input type="submit" name="submit" value="reiniciar">
        <input type="submit" name="submit" value="volver">


        <input hidden="submit" name="max" value="<?=$max?>">
        <input hidden="submit" name="min" value="<?=$min?>">
        <input hidden="submit" name="numero_generado" value="<?=$numero_generado?>">
        <input hidden="submit" name="seleccionar" value="<?=$intentos?>">
        <input hidden="submit" name="jugada" value="<?=$jugada?>">
    </fieldset>



</form>


</body>
</html>








