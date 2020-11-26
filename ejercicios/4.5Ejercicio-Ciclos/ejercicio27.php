<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
Escribe un programa que muestre, cuente y sume los múltiplos de 3 que hay entre 1 y un número
leído por teclado.


<form  method="GET">
<input type="text" name="num">

<input type="submit" name="Continuar" value="Continuar">
</form>

<?php 
if(isset($_GET["Continuar"])){
  		
  		$num=$_GET["num"];
  		$sum=0;
  		$cue=0;


 	 for ($i=1; $i <$num ; $i++) { 
 	 		if(($i%3)==0){
 	 				echo $i . "-";
 	 				$cue++;
 	 				$sum=$sum+$i;

 	 		}



 	 }
 	 	echo "<br>De 1 hasta $num hay $cue multiplos de 3<br>";
 	 	echo "Los multiplos de 3 suman $sum";

        }	
 ?>
</body>
</html>
