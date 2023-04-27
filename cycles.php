//arreglo

<?php
$usuario = ["Sergio", "Rosaura", "Dustik"];
?>

<?php $a = 0 ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cycles</title>

</head>

<body>

    <ul>

        //for - imprime numeros sin mensaje
        <?php for ($i = 0; $i < 10; $i++) : ?>
            <li><?= $i ?></li>

        <?php endfor; ?>


        //while imprime mensaje - tambien se puede hacer con for

        <?php while ($a < 10) : ?>
            <?php $a++; ?>
            <li>cualquier cosa</li>

        <?php endwhile; ?>


        // foreach con html y php para recorrer arreglos
        // reccorrel el arreglo $usuario y guardar la iteracion en $username


        <?php foreach ($usuario as $username) : ?>
            <li><?= $username ?></li>
        <?php endforeach; ?>


    </ul>


</body>

</html>