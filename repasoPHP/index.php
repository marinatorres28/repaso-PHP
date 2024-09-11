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
<h1>¡Comenzamos!</h1>
<hr>

<form action="lectura1.php" method="post" id="formulario1">
<!--DNI-->
    <p>
        <label for="dni">DNI</label>
        <input type="text" id="dni" name="dni">
    </p>
<!--Telefono-->
    <p>
        <label for="telefono">Telefono</label>
        <input type="text" id="telefono" name="telefono">
    </p>
<!--Correo Electronico-->
    <p>
        <label for="email">Email</label>
        <input type="text" id="email" name="email">
    </p>
<!--Confirmacion correo-->
    <p>
        <label for="email2">Confirmar Email</label>
        <input type="text" id="email2" name="email2"

    </p>
    <!-- Botones -->
    <p>
        <input type="submit" value="Enviar" id="enviar" disabled class="boton">
    </p>
    <!-- Política de privacidad -->
    <p>
        <input type="checkbox" id="check">Acepta las <a href="http://agpd.es" target="_blank">Políticas de Privacidad</a>
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
