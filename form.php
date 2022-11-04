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
<form action="procesar.php" method="post" >
    <fieldset>
        <legend>Formulario</legend>
    <label for="etiquetaNombre">Nombre</label> <br>
    <input type ="text" name="nombre" /><br>
    <label for="etiquetaApellido">Apellido</label> <br>
    <input type = "text" name="apellido" /><br>
    <label for="etiquetaContraseña">Contraseña</label> <br>
    <input type ="password" name="pw" /><br>
    <label for="etiquetaAficiones">Aficiones</label> <br>
    <input type="checkbox" name="musica"> Musica <br>
    <input type="checkbox" name="futbol"> Futbol <br>
    <input type="checkbox" name="baloncesto"> Baloncesto <br>
    <label for="etiquetaIdiomas">Idiomas</label> <br>
    <input type="radio" name="italiano"> Italiano <br>
    <input type="radio" name="espanol"> Español <br>
    <input type="radio" name="ingles"> Ingles <br>
    <select>
    <option name="frutas" >Frutas</option>
    <option name="verduras">Verduras</option>
    <option name="basura">Comida basura</option>
    <option name="agua">Agua</option>
</select><br>

<select>
    <optgroup label="Frutas">
    <option>Manzana</option>
    <option>Pera</option>
    <option>Platano</option>
</optgroup>
<optgroup label="Verduras">
    <option>Borraja</option>
    <option>Judia Verde</option>
    <option>Acelga</option>
</optgroup>
</select><br>

    <input type ="submit" value="enviar" />


</fieldset>





</form>

	</body>
</html>