<?php

if(isset($_GET['punto11-kb'])){

    $kb = $_GET["punto11-kb"];
    $mb = $kb/1024;



    echo '
    <form action="#" method="GET">
        Por Favor digite cantidad en Kb a convertir:<br>
        <input type="number" name="punto11-kb"  value='.$kb.' required>
        <input type="submit" value="Calcular">
    </form>
    <br>
    ';
    echo "El valor en Mb es: ".$mb;

}else{
    echo '
    <form action="#" method="GET">
        Por Favor digite cantidad en Kb a convertir:<br>
        <input type="number" name="punto11-kb" required>
        <input type="submit" value="Calcular">
    </form>
    <br>
    ';
}
?>