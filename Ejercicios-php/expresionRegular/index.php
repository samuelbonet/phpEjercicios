<?php
if (isset($_POST['submit'])){
    $patron=$_POST['patron']?? null;
    $cadena=$_POST['cadena'] ?? null;


    if (preg_match("/$patron/",$cadena))
    echo "cumple";
    else
        echo "no cumple";
}

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
<fieldset
<legend>Expresiones regulares</legend>
    <form action="index.php" method="POST">
          Patron <input type="text" value="<?=$patron?>" name="patron">
    Cadena <input type="text" value="<?=$cadena?>" name="cadena">
    <input type="submit" name="submit" value="Validar">
</form>
</fieldset>
</body>
</html>

