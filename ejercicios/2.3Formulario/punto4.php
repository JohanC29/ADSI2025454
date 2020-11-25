

<?php

if(isset($_GET["punto4-num1"])&&isset($_GET["punto4-num2"])){
    $num1 = $_GET["punto4-num1"];
    $num2 = $_GET["punto4-num2"];
    $suma = $num1+$num2;
    $resta = $num1-$num2;
    $multiplicacion = $num1*$num2;
    $division = $num1/$num2;

    echo '
    <form action="#" method="GET">
        Por Favor ingrese los siguientes campos:
        <br><br>
        Numero 1: <input type="number" name="punto4-num1" value='.$num1.' placeholder="Numero 1" required>
        <br>
        Numero 2: <input type="number" name="punto4-num2" value='.$num2.' placeholder="Numero 2" required>
        <br><br>
        <input type="submit" value="Calcular">
    </form>
    ';

    echo "<br>La suma de los numero es: ".$suma."<br>";
    echo "La resta de los numero es: ".$resta."<br>";
    echo "La suma de los numero es: ".$multiplicacion."<br>";
    echo "La suma de los numero es: ".$division."<br>";
}else{
    echo '
    <form action="#" method="GET">
        Por Favor ingrese los siguientes campos:
        <br><br>
        Numero 1: <input type="number" name="punto4-num1" placeholder="Numero 1" required>
        <br>
        Numero 2: <input type="number" name="punto4-num2" placeholder="Numero 2" required>
        <br><br>
        <input type="submit" value="Calcular">
    </form>
    ';
}

?>


