<?php

if(isset($_GET['punto10-mb'])){

    $mb = $_GET["punto10-mb"];
    $kb = $mb*1024;



    echo '
    <form action="#" method="GET">
        Por Favor digite cantidad en MB a convertir:<br>
        <input type="number" name="punto10-mb"  value='.$mb.' required>
        <input type="submit" value="Calcular">
    </form>
    <br>
    ';
    echo "El valor en KB es: ".$kb;

}else{
    echo '
    <form action="#" method="GET">
        Por Favor digite cantidad en MB a convertir:<br>
        <input type="number" name="punto10-mb"  required>
        <input type="submit" value="Calcular">
    </form>
    <br>
    ';
}
?>