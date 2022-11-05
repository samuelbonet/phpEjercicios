<?php
$nombre= htmlspecialchars($_POST['nombre']);
$pwd= htmlspecialchars($_POST['pwd']);


if($nombre === $pwd && (($nombre != '') || ($pwd != ''))){
    echo "Bienvenido $nombre";
  
}else{
  
        header("Location:index4.php?error=true");
        exit();
    
}
?>

