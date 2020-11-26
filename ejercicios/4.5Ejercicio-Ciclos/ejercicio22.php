<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio22</title>
</head>
<body>
    <h1>Ejercicio22</h1>
    <p>Muestra por pantalla todos los números primos entre 2 y 100, ambos incluidos.</p>

</body>
</html>
<?php

for ($j=2; $j <=100 ; $j++) { 
    $num=$j;
    $cont = 0;
        for ($i=1; $i <= $num; $i++) { 
            if($num!=1 && $num%$i ==0){
                $cont++;
            }
            if($cont>2){
            break;
            }
        }

        if($cont==2){
            echo $num."<br>";
        }

}
?>