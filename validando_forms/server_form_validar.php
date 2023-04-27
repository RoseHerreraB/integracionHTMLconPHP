
<?php

//ISSET () Es una funcion para mirar si esta seteado : es decir si exite o esta definido el parametro que se indica en este caso el name="nombre" del form html
//ISSET = comprueba si se ha seteado un dato o valor, peor no valida si esta vacío o no.
// EMPTY () funcion para : validar si esta vacio  el form !EMPTY( )=  validar si no esta vacio

if (isset($_POST["nombre"]) && !empty($_POST["nombre"])) {
    echo "¡Hola " . $_POST['nombre'] . " !";
} else {
    echo "¡No mandaste nada!";
}



//validar si todo el fomulario se envio en el input tipo button de html=  se delclara el artibuto:  name="fomr" en html y se llama en la funcion isset de php
// ISSET = comprueba si se ha seteado un dato o valor, peor no valida si esta vacío o no -   SALE FALSE SI SE ABRE DESDE EL ARCHIVO server_form_validar.php
//BUSCAR OTRAS MANERAS DE VALIDACION

if (isset($_POST["form"])) {
    echo "todo el formulario fue mandado";
} else {
    echo "no se mando ningun formulario";
}

?>

