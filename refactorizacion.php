
<?php


$tabla_del_9 = [];

for ($i= 1; $i<=10; $i++) {

$result = 9*$i;
$texto = "9 X $i = $result";

array_push($tabla_del_9, $texto); //  ARRAY_PUSH(en que array se guardara,  que información se desea guardar)


}  

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<ul>
<?php foreach($tabla_del_9 as $result): ?> 


<li><?= $result ?></li>

<?php endforeach;?>


</ul>
</body>
</html>