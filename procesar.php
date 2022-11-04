<html>
<body>
Tu nombre es: <?php echo $_POST["nombre"]; ?><br>
Tu apellido es: <?php echo $_POST["apellido"]; ?> <br>
Tu contraseña es: <?php echo $_POST["pw"]; ?> <br>



<?php
if(isset($_POST['musica'])){
    echo "Aficion:musica"."<br>";
}
if(isset($_POST['futbol'])){
    echo "Aficion:futbol"."<br>";
}
if(isset($_POST['baloncesto'])){
    echo "Aficion:baloncesto"."<br>";
}


if(isset($_POST['italiano'])){
    echo "Idioma:italiano"."<br>";
}
if(isset($_POST['espanol'])){
    echo "Idioma:español"."<br>";
}
if(isset($_POST['ingles'])){
    echo "Idioma:ingles"."<br>";
}

if(isset($_POST['frutas'])){
    echo "Idioma:italiano"."<br>";
}
if(isset($_POST['verduras'])){
    echo "Idioma:español"."<br>";
}
if(isset($_POST['basura'])){
    echo "Idioma:ingles"."<br>";
}
if(isset($_POST['agua'])){
    echo "Idioma:ingles"."<br>";
}

?>
</body>
</html>