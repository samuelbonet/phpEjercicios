<?php
session_start();
require "inicializa.php";


$usuario = $_SESSION['usuario'] ?? null;

if (is_null($usuario)) {
    header("Location:index.php");
    exit();
}
$opcion = $_POST['submit'] ?? null;
switch ($opcion) {
    case "Ver familias":
        $db = new DB();
        $familias = $db->obtener_familias();
        break;
    case "Ver productos":
        $db = new DB();
        $producto = $db->obtener_producto();
        break;
}




?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sitio Logueado</title>
   

</head>

<body>
    Bienvenido "<font color="red"><?php echo $_GET['usuario'] ?></font>" <a href="index.php">Cerrar Sesión</a> <?php session_destroy();

?>
    <form action="sitio.php" method="post">
        <fieldset>
        <legend>Tablas</legend>

        <input type="submit" value="Ver familias" name="submit">
        <input type="submit" value="Ver productos" name="submit">
        <input type="submit" value="Ver tiendas" name="submit">
        </fieldset>
        
       </form>  
    <?= interfaz::genera_tabla($familias, "Familias") ?>
</body>

</html>