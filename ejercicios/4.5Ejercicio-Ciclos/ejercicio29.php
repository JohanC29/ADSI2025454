<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
Escribe un programa que muestre por pantalla todos los números enteros positivos menores a uno
leído por teclado que no sean divisibles entre otro también leído de igual forma.


<form  method="GET">
<input type="text" name="num">
<input type="text" name="num2">

<input type="submit" name="Continuar" value="Continuar">
</form>

<?php 
if(isset($_GET["Continuar"])){
  		
  		$num=$_GET["num"];
  		$num2=$_GET["num2"];
  		$sum=0;
  		$cue=0;


 	 for ($i=1; $i <$num ; $i++) { 
 	 		if(($i%$num2)!=0){
 	 				echo $i . "-";
 	 				

 	 		}



 	 }
 	 

        }	
 ?>
</body>
</html>