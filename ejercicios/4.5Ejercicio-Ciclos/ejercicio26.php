<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio26</title>
</head>
<body>
    <h1>Ejercicio26</h1>
    <p>Realiza un programa que pida primero un número y a continuación un dígito. El programa nos debe
    dar la posición (o posiciones) contando de izquierda a derecha que ocupa ese dígito en el número
    introducido.</p>

    <form action="#" method="GET">
        <table>
            <tr>
                <td>Numero 1:</td>
                <td><input name="num1" type="number" required></td>
            </tr>
            <tr>
                <td>Numero a Buscar:</td>
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
        if($_GET['num1']>0 && $_GET['num2']>=0){
            $numero=$_GET['num1'];
            $buscar=$_GET['num2'];

            $cont=1;
            $aux=$numero;
            while($aux>9){
                $aux=$aux/10;    
                $cont++;
            }
            $aux=$numero;

            $i=1;
            $texto="";
            $cont2=0;
            while($aux>0){
                if($aux%10==$buscar){
                    $texto =($cont-$i+1).", ".$texto;
                    $cont2++;
                }
                $aux=intval($aux/10);
                $i++;
            }
            echo "<br>Numero Ingresado: ".$numero."<br>";
            echo "Numero Buscado: ".$buscar."<br>";
            if($cont2==0){
                echo "<br>No se encontro el numero buscado.";
            }else{
                echo "Posiciones de izquierda a derecha: ".substr($texto, 0, -2).".";
            }
        }else{
            echo "<br>Debe ingresar numeros mayores a texto.";
        }
        

    }
?>