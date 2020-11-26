<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
	   $passwordc=1234;
       $password=$_GET["password"];
       $oportunidades = $_GET['oportunidades'];
	  
	if($password==$passwordc){	 
					echo "La caja fuerte se ha abierto satisfactoriamente <br>";
				}
				else{ 
					if($password!=222 and $oportunidades!=0) {echo "Lo siento, esa no es la combinación <br>";}
					
				if ($oportunidades == 0) {
					echo "Caja Fuerte bloqueada <br>";
				echo "Lo siento, has agotado todos los intentos. <br>";}
 ?>
 <?php
 	if($oportunidades!=0) {
 		echo "Introduce la clave <br>";
  ?>
 Intento <?= $oportunidades-- ?> de 4.<br>

<form action="ejercicio07-1.php" method="GET">
<input type="password" name="password">
<input type="hidden" name="oportunidades" value="<?= $oportunidades ?>">
<input type="submit" value="Continuar">
</form>
<?php
}
}
?>
</body>
</html>