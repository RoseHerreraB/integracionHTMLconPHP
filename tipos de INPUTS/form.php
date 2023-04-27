<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipo de inputs</title>
</head>
<body>

<form action="./server-input.php" method="post">
<!----------------------INPUT SIMPLE------------------>


<label for ="nombre">Nombre: </label>
<input type="text" name="nombre" id="nombre">



<!----------------------INPUT ARREGLO------------------>

<label>personas: </label>
<input type="text" name="personas[]">
<input type="text" name="personas[]">
<input type="text" name="personas[]">

<button type="submit">SEND FORM 1</button>


<!----------------------INPUT ARREGLOS ASOCIATIVOS (varios tipos de datos)------------------>


<label>persona: </label>
<input type="text" name="persona[nombre]">
<label>Email: </label>
<input type="email" name="persona[email]">
<label>Edad: </label>
<input type="number" name="persona[edad]">

<button type="submit">SEND FORM 2</button>



<!----------------------INPUT CHECKBOX------------------>

<input type="checkbox" name="list1">
<input type="checkbox" name="list2" value="envio de opcion2 ">
<input type="checkbox" name="list3" value="envio de opcion3">

<button type="submit">ENVIAR CHECKBOX</button>


<!----------------------INPUT RADIO BUTTON------------------>


<!--cuando todos tiene el mismo nombre ex: name="pais" se condiciona a que el ususario solo puede elegir una opción-->

<label for="mexico">México</label>
<input type="radio" name="pais" value="méxico" id="mexico">

<label for="colombia">Colombia</label>
<input type="radio" name="pais" value="Colombia" id="colombia">

<label for="argentina">Argentina</label>
<input type="radio" name="pais" value="Argentina" id="argentina">

<button type="submit">ENVIAR RADIO BUTTON </button>


</form>  



<form action="./server-input.php" method="$_FILES" enctype="multipart/form-data">
<!----------------------INPUT MULTIPLES ARCHIVOS------------------>

//FALTA ENLAZRZO CON $_FILE CON HTML Y PHP PARA QUE MUESTRE EL ARRAY CON LA INFORMCION DE LOS ARCHIVOS

<label for="archivo">Archivo</label>
<input type="file" multiple name="archivo[]" id="archivo">

<button type="submit">ENVIAR archivo </button>

</form>

</body>
</html>