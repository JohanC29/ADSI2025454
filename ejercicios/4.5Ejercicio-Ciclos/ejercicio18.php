<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio18</title>
</head>
<body>
    <h1>Ejercicio18</h1>
    <p>Escribe un programa que obtenga los números enteros comprendidos entre dos números 
        introducidos por teclado y validados como distintos, el programa debe empezar por 
        el menor de los enteros introducidos e ir incrementando de 7 en 7.</p>

    <form action="#" method="GET">
        <table>
            <tr>
                <td>Numero 1:</td>
                <td><input name="num1" type="number" required></td>
            </tr>
            <tr>
                <td>Numero 2:</td>
                <td><input name="num2" type="number" required><br></td>
            </tr>
        </table>
        <br>
        
        <input type="submit" value="Calcular">
    </form>

</body>
</html>
<?php
    if(isset($_GET['num1'])&&isset($_GET['num2'])){
        $num1=$_GET['num1'];
        $num2=$_GET['num2'];

        if($num1!=$num2){
            if($num1>$num2){
                $mayor=$num1;
                $menor=$num2;
            }else{
                $mayor=$num2;
                $menor=$num1;
            }
            for ($i=$menor; $i <$mayor ; $i=$i+7) { 
                echo $i."<br>";
            }

        }else{
            echo 'ERROR Datos ingresados invalidos.';
        }
    }
?>