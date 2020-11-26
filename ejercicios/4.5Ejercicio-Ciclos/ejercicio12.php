<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio12</title>
</head>
<body>
    <h1>Ejercicio12</h1>
    <p>Escribe un programa que muestre los n primeros términos de la serie de Fibonacci. El primer término
    de la serie de Fibonacci es 0, el segundo es 1 y el resto se calcula sumando los dos anteriores, por lo
    que tendríamos que los términos son 0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144… El número n se debe
    introducir por teclado.</p>

    <form action="#" method="GET">
        <input name="num" type="number" required><br>
        <input type="submit" value="Calcular">
    </form>

</body>
</html>
<?php
    if(isset($_GET['num'])){
        $num=$_GET['num'];

        if($num==1){
            echo '0';
        }else if ($num==2){
            echo '0<br>1';
        }else if($num>2){
            $n1=0;
            $n2=1;

            echo '0<br>1<br>';

            for ($i=0; $i <($num-2) ; $i++) { 
                $n3 = $n2+$n1;
                echo $n3.'<br>';
                $n1=$n2;
                $n2=$n3;
            }


        }else{
            echo 'ERROR por favor ingrese un valor positivo.';
        }


    }



?>