<?php
$nombre= htmlspecialchars($_POST['nombre']);

if(isset($_POST['idioma'])){


    $idioma= htmlspecialchars($_POST['idioma']);

    if($idioma === 'castellano'){
        echo "Bienvenido $nombre";
    }elseif($idioma === 'ingles'){
        echo "Welcome $nombre";
    }elseif($idioma === 'frances'){
        echo "Bienvenue $nombre";
    }
}else{

    echo "<a href='indexIdioma.php'>Volver...</a>";
}
    



?>