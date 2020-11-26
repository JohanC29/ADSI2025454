<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
Escribe un programa que dados dos números, uno real (base) y un entero positivo (exponente), saque
por pantalla todas las potencias con base el numero dado y exponentes entre uno y el exponente
introducido. No se deben utilizar funciones de exponenciación. Por ejemplo, si introducimos el 2 y
el 5, se deberán mostrar 2¹, 2², 2³, 2⁴, 2⁵.<br><br><br>

<form  method="GET">
<input type="text" name="base">
<input type="text" name="exponenteF">
<input type="submit" name="Continuar" value="Continuar">
</form>

<?php 

  if(isset($_GET["Continuar"])){

  		$base=$_GET["base"];
  		$exponenteF=$_GET["exponenteF"];
 	   
  			for ($i=1; $i<=$exponenteF ; $i++) { 
  				
  					$potencia=1;
  					$exponente=$i;

  					for ($j=0; $j <$exponente ; $j++) {	 
  						$potencia=$potencia*$base;
  					}

  					echo $base . "^" . $i . "=" . $potencia . "<br>";

  			}
		
        }

 ?>

</body>
</html>



