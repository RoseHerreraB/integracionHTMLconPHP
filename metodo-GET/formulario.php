<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>metodo GET</title>
</head>
<body>

<form action="./server.php" method="get"> <!--llamar documento php con metodo get-->

<label for="nombre">Name</label>
<input type="text" name="nombre" id="nombre">

<label for="edad">Edad</label>
<input type="number" name="edad" id="edad">

<button type="submit">Enviar form</button>


</form>
    
</body>
</html>