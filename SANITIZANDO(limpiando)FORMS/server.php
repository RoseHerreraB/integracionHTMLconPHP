<?php


// declarar variables

$name= $_POST["nombre"];
$username= $_POST["username"];
$email= $_POST["email"];
$age= $_POST["age"];


//  limpiar nombre  y codigo html para que no se ejecute si no lo imprima tal cual
$htmlentities = htmlentities($name);

//  limpiar usuario - agrega un / para separar numeros de letras cuando exitas una comilla o apostrofe ej:  hola'123 pasa a hola\'123
$addslashes = addslashes($username);
// limpiar los numeros - solo letras
// EXPRESION REGULAR :  "/\d/"
$onlywords = preg_replace("/\d/", "", $username);
// limpiar las letras - solo numeros
// EXPRESION REGULAR :  "/\D/"
$onlynumbers = preg_replace("/\D/", "", $username);

// filtar que el correo este correcto y elimina caracteres extraños
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

// filtra numeros enteros y no decvimales- quita los puntos
$sanitize_int = filter_var($age, FILTER_SANITIZE_NUMBER_INT);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMPRESION DE FORMULARIOS DESPUES DE SANITIZARLO- LIMPIARLO</title>

</head>
<body>

<p>Name</p>
<?= $htmlentities ?>

<p>username</p>
<?= $addslashes ?>

<p>username si numeros</p>
<?= $onlywords ?>

<p>username sin letras</p>
<?= $onlynumbers ?>


<p>email</p>
<?= $email?>

<p>username</p>
<?= $sanitize_int ?>



    
</body>
</html>