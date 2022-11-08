# multisubmits

<?php

$opcion=$_POST['submit'];

switch ($opcion) {
    case "Guardar":
        $msj = "Has realizado click en guardar";
        break;
    case "Cancelar":
        $msj = "Has realizado click en cancelar";
        break;
    case "Editar":
        $msj = "Has realizado click en editar";
        break;
    case "Borrar":
        $msj = "Has realizado click en borrar";
        break;
    default:
        $msj="No has realizado ningun click";
        break;
}

?>
<!doctype html>
<html lng="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>



<form action='indexMultisubmit.php' method='post' >

    <fieldset>
        <legend>Opciones</legend>

        <input type='submit' value='Guardar' name="submit">
        <input type='submit' value='Cancelar'name="submit">
        <input type='submit' value='Editar' name="submit">
        <input type='submit' value='Borrar' name="submit">

        <h1><?=$msj ?></h1>
    </fieldset>
</form>




</body>
</html>
-----------------------------------------------------------------------------------------------------------------------------

# Clicks

<?php
$clicks=0;
if (isset ($_POST['submit'])){
    $clicks=$_POST['clicks'];
    $clicks++;

    $msj ="Has realizado $clicks click";
}
else
    $msj="Primer acceso reiniciamos clicks a 0";



?>
<!doctype html>
<html lng="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>



     <form action='indexClicks.php' method='post' >

    <fieldset>
        <legend>Contar clicks</legend>



         <input type='submit' value='click' name="submit">
        <input type='hidden' value='<?=$clicks ?>' name="clicks">

        <h1><?=$msj ?></h1>
    </fieldset>
</form>




</body>
</html>
------------------------------------------------------------------------------------------------------------------------
# Tabla de multiplicar


<?php
$numero= htmlspecialchars($_POST['numero']);//variable numero que se le pasa por post  (name)
?>
<!doctype html>
<html lng="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
if( is_numeric($numero)== true) { //si tiene un numero definido antes mostrara la tabla
    echo "<h1>Tablas de multiplicar $numero</h1>";
    for ($i=1;$i<=10;$i++){ //con el bucle for muestra los multiplos que queramos
        echo "$numero * $i = (". $numero*$i . ")<br />"; //resultado de la multiplicacion
    }
    echo "<a href='indexMultiplicar.php'>Volver...</a>"; //usaremos volver para retornar al formulario

}

if (is_numeric($numero) == false){ //si no es verdadero pregunta el numero otra vez

    echo "<form action='indexMultiplicar.php' method='post' >"; //metodo del formulario

    echo "<fieldset>";
        echo "<legend>Formulario</legend>";

    echo "Numero<input type ='number' name='numero' ><br>"; //tipo numerico


        echo "<input type='submit'>";
    echo "</fieldset>";
echo "</form>";
}
?>


</body>
</html>



