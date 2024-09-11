<?php session_start();
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Banca Online</title>
    <link rel="stylesheet" href="CSS/Style.css">
</head>
<body>
    <h1>¡Terminamos!</h1>
    <p>Hola <?php echo $_SESSION["nombre"]?> , gracias por registrarte en nuestra banca online, en breve nos pondremos en contacto con usted para finalizar el registro.</p>
    <h2>¡Gracias por dejarnos ser tu banco!</h2>

</body>
</html>