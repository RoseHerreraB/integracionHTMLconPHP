<?php 

//imprme el array en pantalla de la información igresada del formulario de html 
echo "<pre>";
var_dump($_FILES);
echo "</pre>";

// obtener el nombre de la imagen
// $_FILES["nombre del id del input del formulario html"]   [atributo del  ARRAY para obtener sus valores]
$basename = $_FILES["imagen"]["name"];   

//crear variable para guaradr la url temporal de la imagen
// $_FILES["nombre del id del input del formulario html"]   [atributo del  ARRAY para obtener sus valores   (url o ruta temporal donde esta guaradada la imagen)]
$imagen =$_FILES["imagen"]["tmp_name"];

// crear la ruta donde deseo guardar la imagen permanentemente
// images/basename  =   carpeta donde deseo guardar la imagen  - la imagen que deseo guardar
$ruta_a_subir= "images/$basename";

//funcion para guaradar la imagen en una carpeta   (en que carpeta / que imagen con su url se guarda)
move_uploaded_file($imagen, $ruta_a_subir);


echo $basename;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>guardando imagenes en un lugar permanente</title>
</head>
<body>

<img src="<?= $ruta_a_subir?>" alt="<?= $basename?>">
    
</body>
</html>