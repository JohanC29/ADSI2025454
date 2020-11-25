
<?php

if(isset($_GET["punto5-base"])&& isset($_GET["punto5-altura"])){
    $base=$_GET["punto5-base"];
    $altura = $_GET["punto5-altura"];
    $area = $base*$altura;

    echo'
    <form action="#" method="GET">
        Por Favor ingrese la Base:
        <input type="number" name="punto5-base" value='.$base.' placeholder="Metros" required>
        <br>
        Por Favor ingrese la Altura: 
        <input type="number" name="punto5-altura" value='.$altura.' placeholder="Metros" required>
        <br><br>
        <input type="submit" value="Calcular">
    </form>
    ';

    echo "<br>El area es: ".$area;
}else{
    echo'
    <form action="#" method="GET">
        Por Favor ingrese la Base: 
        <input type="number" name="punto5-base" placeholder="Metros" required>
        <br>
        Por Favor ingrese la Altura:
        <input type="number" name="punto5-altura" placeholder="Metros" required>
        <br><br>
        <input type="submit" value="Calcular">
    </form>
    ';
}

?>

