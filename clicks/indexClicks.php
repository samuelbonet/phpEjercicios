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