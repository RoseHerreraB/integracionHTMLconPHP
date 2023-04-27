<?php

//-------------------------- ejemplo 1 con arrar-objetos

$usuario = array(

    array(
        "id" => 0,
        "username" => "rose"
    ),


    array(
        "id" => 1,
        "username" => "rose1"
    ),


    array(
        "id" => 2,
        "username" => "rose2"
    ),


);


// ---------------------------ejemplo 2 con variable sencilla

$edad_de_rose = 28

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pasar-variablePHP-a-Javascript </title>
</head>

<body>


    // --------------------------EJEMPLO 1 : se pasa el array a un string php y el string de php se pasa a un json en javaScript
    <script>
        let user = JSON.parse('<?= json_encode($usuario) ?>');
        console.log(user)



        // -------------------------EJEMPLO 2 Variable sencilla

        let edad = <?= $edad_de_rose ?>;
        console.log(edad)
    </script>

    //-------------------------- EJEMPLO 3: Enlazar archivo js

    <script src="./index.js"></script>


</body>

</html>