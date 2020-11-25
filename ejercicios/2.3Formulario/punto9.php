

<?php

if(isset($_GET["punto9-altura"])&&isset($_GET["punto9-radio"])){
    $altura=$_GET["punto9-altura"];
    $radio=$_GET["punto9-radio"];
    $volumen = (1/3)*pi()*($radio*$radio)*$altura;
    
    echo '
    <form action="#" method="GET">
        Por favor ingrese los valores:<br>
        Altura: <input type="number" name="punto9-altura" value='.$altura.' required><br>
        Radio: <input type="number" name="punto9-radio" value='.$radio.' required><br>
        <input type="submit" value="Calcular">
    </form>
    ';
    echo "El volumen es: ".$volumen;

}else{
    echo '
    <form action="#" method="GET">
        Por favor ingrese los valores:<br>
        Altura: <input type="number" name="punto9-altura" required><br>
        Radio: <input type="number" name="punto9-radio" required><br>
        <input type="submit" value="Calcular">
    </form>
    ';
}

?>