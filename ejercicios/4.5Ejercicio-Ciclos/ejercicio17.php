<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
Realiza un programa que sume los 100 números siguientes a un número entero y positivo
introducido por teclado. Se debe comprobar que el dato introducido es correcto (que es un número
positivo).<br><br><br>

<form  method="GET">
<input type="text" name="base">
<input type="submit" name="Continuar" value="Continuar">
</form>

<?php 

  if(isset($_GET["Continuar"])){

  		$base=$_GET["base"];
  
 	   if($base>=1){echo "aprueba";

 	   		$sum=0;
 	   		for ($i=$base; $i<$base +100; $i++) { 
 	   			$sum=$sum+$i;		
 	   		}
 	   			echo "<br> La suma de los 100 números siguientes a " . $base . " es " . $sum;
 			}else{echo "numero no valido, debe introducir un numero positivo";}

        }	
 ?>

</body>
</html>
