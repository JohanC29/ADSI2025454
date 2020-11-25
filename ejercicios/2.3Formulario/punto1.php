<?php

if(isset($_GET["punto1-a"])&&isset($_GET["punto2-b"])){
    $a = $_GET["punto1-a"];
    $b = $_GET["punto2-b"];
    $resultado = $a*$b;







    echo '
    <form action="index.php" method="GET">
        Primer numero: <input type="number" name="punto1-a" value="'.$a.'" required><br>
        Segundo numero: <input type="number" name="punto2-b" value = "'.$b.'" required><br>
    <input type="submit" value="Sumar">
    </form>
    ';
    echo"Resultado es ".$resultado;

}else{

    echo '
    <form action="index.php" method="GET">
        Primer numero: <input type="number" name="punto1-a" required><br>
        Segundo numero: <input type="number" name="punto2-b" required><br>
    <input type="submit" value="Sumar">
    </form>
    ';
}

?>


<?php





