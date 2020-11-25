
<?php

if(isset($_GET["punto6-base"])&& isset($_GET["punto6-altura"])){
    $base=$_GET["punto6-base"];
    $altura = $_GET["punto6-altura"];
    $area = ($base*$altura)/2;

    echo'
    <form action="#" method="GET">
        Por Favor ingrese la Base:
        <input type="number" name="punto6-base" value='.$base.' placeholder="Metros" required>
        <br>
        Por Favor ingrese la Altura: 
        <input type="number" name="punto6-altura" value='.$altura.' placeholder="Metros" required>
        <br><br>
        <input type="submit" value="Calcular">
    </form>
    ';

    echo "<br>El area es: ".$area;
}else{
    echo'
    <form action="#" method="GET">
        Por Favor ingrese la Base: 
        <input type="number" name="punto6-base" placeholder="Metros" required>
        <br>
        Por Favor ingrese la Altura:
        <input type="number" name="punto6-altura" placeholder="Metros" required>
        <br><br>
        <input type="submit" value="Calcular">
    </form>
    ';
}

?>

