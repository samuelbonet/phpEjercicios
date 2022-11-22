<?php
if (isset($_POST['submit'])) {

    $nombre = $_POST['name'];
    $suplanto = $_POST['suplanto'];
    $suplanto[$nombre]++;
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

    <fieldset>
        <legend>Click de usuarios</legend>
        <form action="" method="POST">

            Nombre<input type="text" name="name"<br />
            <input type="submit" value="Click" name="submit">
            <?php
            foreach ($suplanto as $nombre => $clicks) {
                echo "<input type=hidden name='suplanto[$nombre]' value ='$clicks'>";
                echo "<h3>$nombre ha hecho $clicks clicks</h3>";
            }
            ?>

        </form>

    </fieldset>





</body>
</html>



