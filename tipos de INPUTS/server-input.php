<?php


//imprme el array en pantalla de la información igresada del formulario de html 

echo "<pre>";
//INPUT SIMPLE
var_dump($_POST);

//INPUT ARRAY
//var_dump($_POST["nombre"]);

//var_dump($_POST["personas"]);
//var_dump($_POST["persona"]);

//INPUT CHECKBOX -------------- SI NO SE ELIGE UNA OPCION EN EL FORM DE HTML  EL PHP MUESTRA UN ERROR- ES IMPORTANTE REALZAS UNA VALIDACON PARA QUE NO APAREZCA EL ERROR

//var_dump($_POST["list1"]);
//var_dump($_POST["list2"]);
//var_dump($_POST["list3"]);


// INPUT RADIO
 
// se vincula con el name del input 
//var_dump($_POST["pais"]);



// INPUT MULTIPLE ARCHIVO

var_dump($_FILES["archivo"]);

echo "<pre>";

?>  