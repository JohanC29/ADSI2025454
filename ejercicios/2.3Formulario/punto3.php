<?php

if(isset($_GET['punto3-peseta'])){

    $peseta = $_GET["punto3-peseta"];
    $euro = $peseta/166.386;



    echo '
    <form action="#" method="GET">
        Por Favor digite cantidad en peseta a convertir:<br>
        <input type="number" name="punto3-peseta"  value='.$peseta.' required>
        <input type="submit" value="Calcular">
    </form>
    <br>
    ';
    echo "El valor en euros es: ".$euro;

}else{
    echo '
    <form action="#" method="GET">
        Por Favor digite cantidad en peseta a convertir:<br>
        <input type="number" name="punto3-peseta" required>
        <input type="submit" value="Calcular">
    </form>
    <br>
    ';
}


?>