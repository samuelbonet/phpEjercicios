<?php
$nombre= htmlspecialchars($_POST['nombre']);
$pwd= htmlspecialchars($_POST['pwd']);


if($nombre === $pwd && (($nombre != '') || ($pwd != ''))){
    header("Location:sitio.php?nombre=$nombre");
    exit();


} else{
    header("Location:index3.php?error=true");
    exit();
}





?>