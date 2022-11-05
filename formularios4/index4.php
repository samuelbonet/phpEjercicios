<?php
if (isset($_GET['error']) && $_GET['error'] === 'true'){
    $error = true;
    echo "Usuario o contraseña incorrecto";
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
<form action="sitioweb.php" method="post" >

    <fieldset>
        <legend>Formulario</legend>

        Nombre<input type ="text" name="nombre" id=""><br>
        Password<input type ="password" name="pwd" id=""><br>

        <input type="submit">
    </fieldset>
</form>


</body>
</html>