<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
	   $pos=$_GET["pos"];
	   $neg=$_GET["neg"];
       $num=$_GET["num"];
       $oportunidades = $_GET['oportunidades'];
	
 ?>
 <?php
 	if($oportunidades!=-1) 	{ 
 		
 		if($num<0){  $neg++; }
 		if($num!=222){   if($num>0){$pos++;}}
 		echo "Numeros positivos $pos <br>";
 		echo "Numeros negativos $neg <br>";
  ?>

 <?php 
 		
 		if($oportunidades>0){echo "Numero " . $oportunidades . " de 10.<br>";}

  		$oportunidades--;

   ?>

<form action="ejercicio13-1.php" method="GET">
	<?php 
		if($oportunidades>-1){echo '<input type="text" name="num">';}
	 ?>

<input type="hidden" name="oportunidades" value="<?= $oportunidades ?>">
<input type="hidden" name="neg" value="<?= $neg ?>">
<input type="hidden" name="pos" value="<?= $pos ?>">
<?php 
		if($oportunidades>-1){echo '<input type="submit" value="Continuar">';}
	 ?>

</form>

<?php
}

?>
</body>
</html>
