<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
		$parm=$_GET["parm"];
		$contm=$_GET["contm"];
		 $media=$_GET["media"];
       $num=$_GET["num"];
       $oportunidades = $_GET['oportunidades'];
	
 ?>
 <?php
 	if($num>=0) 	{ 
 		echo "DIGITE UN NUEMERO NEGATIVO PARA DETENER LA OPERACION<br>" ;
 		echo "Cantidad de numros introducidos " . "$oportunidades<br>" ;
 		$oportunidades++;

 		if($num%2==0){ echo " el numero $num es par"; 

 			if($num>$parm){$parm=$num;}

 	}

 		else{
 			if($num%2!=0 and $num!=223){$contm++;
 				echo "el numero $num no es par <br>"; 
 		 $media=$media+$num;}
 			}

  ?>

<form action="ejercicio21-1.php" method="GET">
	
<input type="text" name="num">
<input type="hidden" name="oportunidades" value="<?= $oportunidades ?>">
<input type="hidden" name="contm" value="<?= $contm ?>">
<input type="hidden" name="media" value="<?= $media ?>">
<input type="hidden" name="parm" value="<?= $parm ?>">

<input type="submit" value="Continuar">

</form>

<?php
}else{
	echo "Cantidad de numros introducidos " . $oportunidades . "<br>";
	$media=$media/$contm; echo "Media de numeros impares es " . "$media<br>";
    echo "El numero par mayor es $parm";

}


?>
</body>
</html>


