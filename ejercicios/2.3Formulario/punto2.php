
<?php

if(isset($_GET['punto2-euro'])){

    $euro = $_GET["punto2-euro"];
    $peseta = $euro*166.386;



    echo '
    <form action="#" method="GET">
        Por Favor digite cantidad en euros a convertir:<br>
        <input type="number" name="punto2-euro"  value='.$euro.' required>
        <input type="submit" value="Calcular">
    </form>
    <br>
    ';
    echo "El valor en pesetas es: ".$peseta;

}else{
    echo '
    <form action="#" method="GET">
        Por Favor digite cantidad en euros a convertir:<br>
        <input type="number" name="punto2-euro" required>
        <input type="submit" value="Calcular">
    </form>
    <br>
    ';
}


?>