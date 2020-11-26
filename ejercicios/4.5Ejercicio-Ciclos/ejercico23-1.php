<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
		$lim=1000;
		$contm=$_GET["contm"];
		 $media=$_GET["media"];
       $num=$_GET["num"];
       $oportunidades = $_GET['oportunidades'];
	
 ?>
 <?php
 	if($media<10000) 	{ 
 		
 			echo "Cantidad de numros introducidos " . "$oportunidades<br>" ;
 		$oportunidades++;

 		$media=$media+$num;
 		if($media>1000){
	 echo "El total es $media <br>";
	$media=$media/$oportunidades; echo "Media  es " . "$media<br>";
   }
 		

 		

  ?>

<form action="ejercico23-1.php" method="GET">
	<?php 
if($media<1000){echo '<input type="text" name="num">' ;}

 ?>

<input type="hidden" name="oportunidades" value="<?= $oportunidades ?>">
<input type="hidden" name="contm" value="<?= $contm ?>">
<input type="hidden" name="media" value="<?= $media ?>">

<?php 
if($media<1000){echo '<input type="submit" value="Continuar">' ;}

 ?>



</form>

<?php
}else{
	echo "Cantidad de numros introducidos " . $oportunidades . "<br>";
	 echo "El total es $media <br>";
	$media=$media/$oportunidades; echo "Media es " . "$media<br>";
   

}


?>
</body>
</html>