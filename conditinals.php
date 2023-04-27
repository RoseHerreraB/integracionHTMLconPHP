<?php

$saludo = true;

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>conditionals</title>
</head>

<body>

    <?php if ($saludo) : ?>
        <b>hola</b>
    <?php else : ?>
        <b>adios</b>

    <?php endif; ?>


</body>

</html>