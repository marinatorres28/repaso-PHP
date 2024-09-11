<?php
session_start();
if (!empty($_POST["nombre"]) && !empty($_POST["apellidos"])) {
    $nombre = ucwords(mb_strtolower($_POST["nombre"]));
    $apellidos = ucwords(mb_strtolower($_POST["apellidos"]));
    $edad= (int)$_POST["edad"];

    $errores2 = [];

    //validamos el nombre
    if (!is_string($nombre) || preg_match("/[0-9]/", $nombre)) {
        $errores2[] = "<p style = 'color: darkred'><strong>ERROR: </strong>El nombre debe ser texto sin numeros</p>";
    }
    // validamos el apellido (igual que el nombre)
    if (!is_string($apellidos) || preg_match("/[0-9]/", $apellidos)) {
        $errores2[] = "<p style = 'color: darkred'><strong>ERROR: </strong>Los apellidos deben ser texto sin numeros</p>";
    }
    // validamos la edad
    if (!is_numeric($edad) && $edad < 18) {
       $errores2[]=  "<p style = 'color: darkred'><strong>ERROR: </strong>Debes ser mayor de 18 para realizar la solicitud</p>";
    }
} else {
    // En caso de campos vacíos mostramos un mensaje de error
    $errores2[] = "<p style = 'color: darkred'><strong>ERROR: </strong>Todos los datos son requeridos</p>";
}

// si el array errores tiene algun dato es porque algo ha fallado
if (count($errores2) > 0) {
    for ($x = 0; $x < count($errores2); $x++) {
        $cadena = $errores2[$x]; // acumulamos los errores del array en la variable $cadena (que es la que se muestra en el index)
    }
    header("Location: index2.php?cadena=".$cadena);
} else {
    $_SESSION["nombre"] = $nombre;
    $_SESSION["apellidos"] = $apellidos;

    header("Location: final.php");
}

