<?php
session_start();
// Verificamos que no estén vacíos los campos
if(!empty($_POST["dni"]) && !empty($_POST["telefono"]) && !empty($_POST["email"]) && !empty($_POST["email2"])){

    $dni = $_POST["dni"];
    $telefono = $_POST["telefono"];
    $email = $_POST["email"];
    $email2 = $_POST["email2"];
    // creamos un array de errores, que recogerá los errores del formulario
    $errores = array();

    // validamos el dni
    if (!preg_match("/^[0-9]{8}[A-Z]{1}$/", $dni)) {
        $errores[]="<p style = 'color: darkred'><strong>ERROR: </strong>El formato del DNI no es valido</p>";
    }
    // validamos el telefono
    if(!preg_match("/^(?:(?:\+|00)?34)?[679]\d{8}$/", $telefono)){
        $errores[] = "<p style = 'color: darkred'><strong>ERROR: </strong>Los telefonos deben tener formato 000000000</p>";
    }
    // validamos el email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errores[]="<p style = 'color: darkred'><strong>ERROR: </strong>El formato de email no es correcto</p>";
    }
    // validamos que el email y el email2 sean iguales
    if ($email != $email2) {
        $errores[]="<p style = 'color: darkred'><strong>ERROR: </strong>Los emails no coinciden</p>";
    }


}else{
    // En caso de campos vacíos mostramos un mensaje de error redirigiendo al index que lo recibe
    $errores[] = "<p style = 'color: darkred'><strong>ERROR: </strong>Todos los datos son requeridos</p>";
}

// Si tiene algun dato el array errores es porque algo ha fallado
if(count($errores) > 0){
    for($x = 0; $x < count($errores); $x++){
        $cadena .= $errores[$x];  //Vamos acumulando los errores del array
    }
    // redirige al index
    header("Location: index.php?cadena=".$cadena);
// si no hay errores, acumulamos los datos en variables de sesion para que esten disponibles en otras paginas
}else{
    $_SESSION["dni"] = $dni;
    $_SESSION["telefono"] = $telefono;
    $_SESSION["email"] = $email;

    // si la validacion fue exitosa, redirigimos al index 2
    header("Location: index2.php");
}