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
<form action="jugar1.php" method="post">


    <fieldset>
        <legend>Establece un intervalo</legend>

        <input type="radio" name="numero" value="10"> 1-1.024(2¹⁰) 10 intentos<br>
        <input type="radio" name="numero" value="16"> 1-65.536(2¹⁶) 16 intentos<br>
        <input type="radio" name="numero" value="20">1-1.048.576(2²⁰) 20 intentos<br>
        <input type="submit" value="Empezar" name="submit" >
    </fieldset>



</form>


</body>
</html>