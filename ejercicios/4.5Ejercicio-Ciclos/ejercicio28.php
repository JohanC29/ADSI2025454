<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio28</title>
</head>
<body>
    <h1>Ejercicio28</h1>
    <p>Escribe un programa que calcule el factorial de un número entero leído por teclado.</p>

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
        $factorial = 1;
        for ($i=1; $i <=$num ; $i++) { 
            $factorial = $factorial*$i;
        }
        echo "El factorial de ".$num." es: ".$factorial;
    }
?>