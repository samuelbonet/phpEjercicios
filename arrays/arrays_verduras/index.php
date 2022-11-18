<?php
$factura=null;
$inventario=null;
$form=null;
$productos = [
    'lechuga' => ['unidades' => 200,
        'precio' => 0.90],
    'tomates' =>['unidades' => 2000,
        'precio' => 2.15],
    'cebollas' =>['unidades' => 3200,
        'precio' => 0.49],
    'fresas' =>['unidades' => 4800,
        'precio' => 4.50],
    'manzanas' =>['unidades' => 2500,
        'precio' => 2.10],

];
if (isset($_POST['submit'])){
    $factura="Esto es la factura";
    $inventario="Lo que habia y lo que queda";
}else {
    $form="Genero el formulario";
}


var_dump($productos);

$form="<fieldset><legend>Lista de productos</legend>";


foreach ($productos as $producto => $contenido){
$unidades=$contenido['unidades'];
    $precio=$contenido['precio'];
    $form.="<label id'$producto'>".ucfirst($producto)."</label>";
    $form.="<input type = 'text' name='$producto' placeholder='inserte numero de unidades'/> <br/>";
}
$form.="</fieldset>";


?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="factura.php" method="post">
    <?= "$form" ?>
    <?= "$inventario" ?>
    <?= "$factura" ?>
    <input type="submit" value="Comprar">
</form>


</body>
</html>

