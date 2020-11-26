<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio16</title>
</head>
<body>
    <h1>Ejercicio16</h1>
    <p>Escribe un programa que diga si un número introducido por teclado es o no primo. Un número
primo es aquel que sólo es divisible entre él mismo y la unidad.</p>

    <form action="#" method="GET">
        <table>
            <tr>
                <td>Ingrese el numero:</td>
                <td><input name="num" type="number" required></td>
            </tr>
        </table>
        <br>
        <input type="submit" value="Calcular">
    </form>

</body>
</html>
<?php
    if(isset($_GET['num'])){
        $num=$_GET['num'];
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
            echo 'El numero es primo';
        }else{
            echo 'El numero no es primo';
        }

    }
?>