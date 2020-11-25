<?php
    if(isset($_GET["punto8-horas"])){
        $horas=$_GET["punto8-horas"];
        $total = $horas*12;


        echo '
        <form action="#" method="GET">
            Por Favor digite total horas trabajadas:<br>
            <input type="number" name="punto8-horas" value='.$horas.' placeholder="Total horas" required>
            <input type="submit" value="Calcular">
        </form>
        ';


        echo "<br>Total a pagar: ".$total;
    }else{
        
        echo '
        <form action="#" method="GET">
            Por Favor digite total horas trabajadas:<br> 
            <input type="number" name="punto8-horas" placeholder="Total horas" required>
            <input type="submit" value="Calcular">
        </form>
        ';
    }

?>
