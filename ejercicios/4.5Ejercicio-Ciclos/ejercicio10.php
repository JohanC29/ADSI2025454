<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio10</title>
</head>
<body>
    <h1>Ejercicio10</h1>
    <p>Escribe un programa que calcule la media de un conjunto de números positivos introducidos por
    teclado. A priori, el programa no sabe cuántos números se introducirán.<br> El usuario indicará que ha
    terminado de introducir los datos cuando meta un número negativo</p>



<?php

if(isset($_GET['suma']) && isset($_GET['num'])&& isset($_GET['contador'])){
    $num=$_GET['num'];
    $suma=$_GET['suma'];
    $contador=$_GET['contador'];

    if($num>0){
        $suma=$suma+$num;
        $contador++;

        echo '
        <form action="#" method="GET">
            <input name="suma" value="'.$suma.'" type="number" hidden>
            <input name="contador" value="'.$contador.'" type="number" hidden>
            <input name="num" placeholder="Numero" type="number" required>
            <input value="Calcular" type="submit">
        </form>
        ';

    }elseif ($num<0){
        $media=$suma/$contador;
        echo '
        
        La media de los numero ingresados es:<br>
        '.$media.'
        <br>
        <form action="#" method="GET">
            <input name="suma" value="0" type="number" hidden>
            <input name="contador" value="0" type="number" hidden>
            <input value="Reiniciar" type="submit">
        </form>
        ';
    }
}else{
    echo '
    <form action="#" method="GET">
        <input name="suma" value="0" type="number" hidden>
        <input name="contador" value="0" type="number" hidden>
        <input name="num" placeholder="Numero" type="number" required>
        <input value="Calcular" type="submit">
    </form>
    ';
}

?>


</body>
</html>