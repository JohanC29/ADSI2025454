
<?php
    if(isset($_GET["punto7-tbase"])){
        $tbase=$_GET["punto7-tbase"];
        $iva = $tbase*0.19;
        $total = $tbase*1.19;

        echo '
        <form action="#" method="GET">
            Por Favor digite total bases:<br><br> 
            <input type="number" name="punto7-tbase" value='.$tbase.' placeholder="Total Base" required>
            <input type="submit" value="Calcular">
        </form>
        ';

        echo "<br>Iva: ".$iva;
        echo "<br>Total: ".$total;
    }else{
        echo '
        <form action="#" method="GET">
            Por Favor digite total bases:<br><br> 
            <input type="number" name="punto7-tbase" placeholder="Total Base" required>
            <input type="submit" value="Calcular">
        </form>
        ';
    }

?>