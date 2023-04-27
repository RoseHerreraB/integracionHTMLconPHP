<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>enviio de imagenes con la variable global $_FILES</title>
</head>
<body>

<form action="./server_imagenes.php" method="post" enctype="multipart/form-data"> <!--enctype="multipart/form-data" == tipo de incriptacion-->

<label for="nombre">Name</label>
<input type="text" name="nombre" id="nombre">

<label for="edad">picture</label>
<input type="file" name="imagen" id="imagen"> <!-- Type="file" -- para subir archivos-->

<button type="submit">Enviar form</button>


</form>
    
</body>
</html>