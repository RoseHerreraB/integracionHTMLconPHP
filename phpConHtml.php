<?php
$nombre = "impresion de variable"

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>integración de php con html</title>
</head>

<body>

    /* agergar etiqueta php y dentro etiquetas html */

    <?php
    echo "<p>esto es php con thml </p>  <br><br><br><br><br><br> hoolaa <br> ";

    ?>

    /* agergar etiqueta abreviada de php < ?=?> y dentro etiquetas html */

        <?= "<i> otra manera de imprimir php con html </i>" ?>

        /* agergar etiqueta html y adentro etiqueta abreviada de php < ?=?> */

            <h1> hola esto es <?= $nombre ?></h1>





</body>

</html>