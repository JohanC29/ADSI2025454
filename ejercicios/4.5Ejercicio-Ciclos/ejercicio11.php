<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
Escribe un programa que muestre en tres columnas, el cuadrado y el cubo de los 5 primeros números
enteros a partir de uno que se introduce por teclado.

<form  method="GET">
<input type="text" name="n1">
<input type="submit" name="Continuar" value="Continuar">
</form>

<?php 

  if(isset($_GET["Continuar"])){

  		$n1=$_GET["n1"];
 	    $cant=0;



 	    for($i=$n1;$i<$n1+5;$i++){
			
			$numero_al_cuadrado = pow($i, 2);
			$numero_al_cubo = pow($i, 3);

			echo "$i - " . " - $numero_al_cuadrado " . " -  $numero_al_cubo <br>" ;
	}
    
		
			

		
        }
    

 ?>

</body>
</html>