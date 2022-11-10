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

<?php

$idioma=$_POST['idioma'] ?? "es";
echo "<h1>$idioma</h1>";
$checked_ing="";
$checked_es="";
$checked_fr="";
switch ($idioma) {
    case "es":
        $selecciona_idioma="Selecciona idioma";
        $formulario="Formulario";
        $acceder="Acceder";
        $datos_acceso="Datos de acceso";
        $frances="frances";
        $ingles="ingles";
        $castellano="español";
        $seleccionar="seleccionar";
        $nombre="Nombre";
        $checked_es="checked";

        break;
    case "ing":
        $selecciona_idioma="Select language";
        $formulario="Form";
        $frances="Francois";
        $ingles="English";
        $castellano="Spanish";
        $nombre="Name";
        $checked_ing="checked";
        break;
    case "fr":
        $selecciona_idioma="Sélectionner la langue";
        $formulario="Formulaire";
        $nombre="Numéro";
        $checked_fr="checked";
        $frances="Francois";
        $ingles="anglais";
        $castellano="espagnol";
        $checked_fr="checked";
        break;



}

--------------------------FORMULARIO IDIOMA-----------------------------

?>
<!doctype html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="indexIdioma.php" method="post" >


    <fieldset>
        <legend> <?="$selecciona_idioma"?></legend>

        <input type ="radio" name="idioma" <?="$checked_es"?> value ="es" > <?="$castellano"?><br>
        <input type ="radio" name="idioma" <?="$checked_ing"?> value ="ing"> <?="$ingles"?><br>
        <input type ="radio" name="idioma" <?="$checked_fr"?> value ="fr"> <?="$frances"?><br>
        <input type="submit" name="seleccionar">
    </fieldset>


    <fieldset>
        <legend> <?="$formulario"?></legend>

        <?="$nombre"?><input type ="text"   id=""><br>


        <input type="submit">
    </fieldset>
</form>


</body>
</html>

