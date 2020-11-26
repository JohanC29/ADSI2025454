<!DOCTYPE html>	
<html>
<head>
	<title></title>
</head>
<body>
	Realiza un programa que nos diga cuántos dígitos tiene un número introducido por teclado.<br><br>

<form  method="GET">
<input type="text" name="n1">
<input type="submit" name="Continuar" value="Continuar">
</form>

<?php 

  if(isset($_GET["Continuar"])){

  		$n1=$_GET["n1"];
 	    $cant=0;
    
		while ($n1>0) {


			$n1= floor ($n1/10);
		
			$cant++;
		}	
			echo "Tiene " . $cant;
		if($cant>1){
			echo " digitos";	
		}else{
			echo " digito";	
		}

		
        }
    

 ?>


</body>
</html>
