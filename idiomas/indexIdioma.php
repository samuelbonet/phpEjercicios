<?php


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
<form action="sitio.php" method="post" >


    <fieldset>
        <legend>Idiomas</legend>

        <input type ="radio" name="idioma" value ="castellano" >Castellano<br>
        <input type ="radio" name="idioma" value ="ingles">Ingles<br>
        <input type ="radio" name="idioma" value ="frances">Frances<br>
    </fieldset>


    <fieldset>
        <legend>Formulario</legend>

        Nombre<input type ="text" name="nombre" id=""><br>
        

        <input type="submit">
    </fieldset>
</form>


</body>
</html>