<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
Realiza un programa que pida un número por teclado y que luego muestre ese número al revés

<form  method="GET">
<input type="text" name="num">

<input type="submit" name="Continuar" value="Continuar">
</form>

<?php 
if(isset($_GET["Continuar"])){
  		
  		$num=$_GET["num"];
  		$rever=0;


 	 	while ( $num>0) {
 	 		$rever= ($rever*10)+($num%10);
 	 			
 	 		$num= floor ($num/10);
 	 
 	 	}

 	 	echo "$rever";

        }	
 ?>
</body>
</html>