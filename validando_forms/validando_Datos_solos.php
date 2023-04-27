<?php

//declara variables para validar
//filter_var("0.9", FILTER_VALIDATE_FLOAT)  = FUNCION PARA VALIDAR VARIABLES(DATO A VALIDAR, QUE SE DESEA VALIDAR)
// cuando se valida y sale true = se muestra la informcion de la variable
// cuando la validacion es false se muestra el valor booleano False

$is_float = filter_var("0.9", FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_THOUSAND); //true
$is_int = filter_var("0.9", FILTER_VALIDATE_INT); //false
$is_ip = filter_var("192.158.1.38", FILTER_VALIDATE_IP);//true
$is_url = filter_var("0.9", FILTER_VALIDATE_URL);//false
$is_email = filter_var("rosaurha@gmail.com", FILTER_VALIDATE_EMAIL);//true


echo "<pre>";
var_dump($is_float);
var_dump($is_int);
var_dump($is_ip);
var_dump($is_url);
var_dump($is_email);
"/<pre>"

?>

