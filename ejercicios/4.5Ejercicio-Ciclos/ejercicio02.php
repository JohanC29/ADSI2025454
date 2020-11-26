<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio02</title>
</head>
<body>
    <h1>Ejercicio02</h1>
    <p>Muestra los números múltiplos de 5 de 0 a 100 utilizando un bucle while.</p>

</body>
</html>
<?php
$i=1;
echo "los numeros son:";
while($i<=100){
    if($i%5==0){
        echo $i."<br>";
    }
    $i++;
}

?>