<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio14</title>
</head>
<body>
    <h1>Ejercicio14</h1>
    <p>Escribe un programa que pida una base y un exponente (entero positivo) y que calcule la potencia.</p>

    <form action="#" method="GET">
        <table>
            <tr>
                <td>Base:</td>
                <td><input name="num" type="number" required></td>
            </tr>
            <tr>
                <td>Exponente:</td>
                <td><input name="exp" type="number" required><br></td>
            </tr>
        </table>
        <br>
        
        <input type="submit" value="Calcular">
    </form>

</body>
</html>
<?php
    if(isset($_GET['num'])&&isset($_GET['exp'])){
        $num=$_GET['num'];
        $exp=$_GET['exp'];

        if($exp>0){
            echo $num."^".$exp." = ".(pow($num,$exp));
        }else{
            echo 'ERROR Datos ingresados invalidos.';
        }
    }
?>