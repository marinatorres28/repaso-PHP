<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Banca Online</title>
    <script src="JS/Script.js"></script>
    <link rel="stylesheet" href="CSS/Style.css">
</head>
<body>

<h1>¡Continuamos!</h1>

<form action="lectura2.php" method="post">
<!--Nombre-->
    <p>
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre">
    </p>
<!--Apellidos-->
    <p>
        <label for="apellidos">Apellidos</label>
        <input type="text" id="apellidos" name="apellidos">
    </p>
<!--Edad-->
    <p>
        <label for="edad">Edad</label>
        <input type="number" id="edad" name="edad">
    </p>
<!--Botones-->
    <p>
        <input type="submit" value="Enviar" id="enviar2">
    </p>

    <?php
    // si existe un error, el index lee y muestra un mensaje en pantalla de error
    if (isset($_REQUEST["cadena"])){
        $errores=$_REQUEST["cadena"];
        echo $errores;
    }
    ?>

</form>

</body>
</html>