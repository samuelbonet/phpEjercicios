<?php










?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="fin.php" method="post">


    <fieldset>
        <legend>Empieza el juego</legend>
        <h1>EL numero es 512?</h1>
        <p>Jugada1</p>
        <fieldset>
            <legend>Indica como es el numero que has pensado</legend>


            <input type="radio" name="valor" value="mayor"> mayor<br>
            <input type="radio" name="valor" value="menor"> menor<br>
            <input type="radio" name="valor" value="igual">igual<br>
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

