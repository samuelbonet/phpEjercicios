<?php

$productos = [
    'lechuga' => [
        'unidades' => 200,
        'precio' => 0.90
    ],
    'tomates' => [
        'unidades' => 2000,
        'precio' => 2.15
    ],
    'cebollas' => [
        'unidades' => 3200,
        'precio' => 0.49
    ],
    'fresas' => [
        'unidades' => 4800,
        'precio' => 4.50
    ],
    'manzanas' => [
        'unidades' => 2500,
        'precio' => 2.10
    ],

];

$errores = [];

if (isset($_POST['submit'])) {
    foreach ($_POST as $producto => $cantidad) {
        if ($producto != 'submit' && $cantidad != '') {
            if ($cantidad > $productos[$producto]['unidades']) {
                $errores[$producto] = 'ERROR: no hay tantas unidades de ' . $producto;
            } else {
                $productos[$producto]['unidades'] = $productos[$producto]['unidades'] - $cantidad;
            }

        }
    }
}

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

<?php if (!isset($_POST['submit'])): ?>
    <form action="index.php" method="post">
        <fieldset><legend>Lista de productos</legend>
        <?php foreach ($productos as $producto => $contenido) { ?>
            <label id="<?=$producto?>"><?=ucfirst($producto)?></label>
            <input type="text" name="<?=$producto?>" placeholder="inserte numero de unidades"/> <br/>
        <?php } ?>
        </fieldset>
        <input type="submit" name="submit" value="Comprar">
    </form>
<?php else: ?>
    <?php foreach ($errores as $error): ?>
        <div style="color: red"><?=$error?></div>
    <?php endforeach; ?>
    <h3>Factura</h3>
    <table border="1">
        <thead>
        <tr>
            <th>Concepto</th>
            <th>Cantidad</th>
            <th>Precio</th>
            <th>Total</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($_POST as $producto => $cantidad): ?>
            <?php if ($producto != 'submit' && $cantidad != '' && !isset($errores[$producto])): ?>
                <tr>
                    <td><?=$producto?></td>
                    <td><?=$cantidad?></td>
                    <td><?=$productos[$producto]['precio']?></td>
                    <td><?=$cantidad * $productos[$producto]['precio']?></td>
                </tr>
            <?php endif; ?>
        <?php endforeach; ?>
        </tbody>
    </table>

    <h3>Inventario</h3>
    <table border="1">
        <thead>
        <tr>
            <th>Producto</th>
            <th>Cantidad</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($productos as $producto => $datos_producto): ?>
            <tr>
                <td><?=$producto?></td>
                <td><?=$datos_producto['unidades']?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>

</body>
</html>
