<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

Escribe un programa que lea un número N e imprima una pirámide de números con N filas como
en la siguiente figura. Recuerda utilizar un tipo de letra de ancho fijo como por ejemplo Courier
para que los espacios tengan la misma anchura que los números. 1


<form  method="GET">
<input type="text" name="altura">
<input type="text" name="material">
<input type="submit" name="Continuar" value="Continuar">
</form>

<?php 

if(isset($_GET["Continuar"])){
	$material=$_GET["material"];
	$altura=$_GET["altura"];
	$spa=$altura-1;
	$base=1;
	$lineaL=1;


	while ( $base<= $altura) {
		
		for($i=1; $i<=$spa;$i++){ 
			echo ' .';
		}
		
		for($i=1; $i<=$lineaL;$i++){
			if($i==1||$i==$lineaL){
				echo "$material";
			}else{
				echo '&nbsp;&nbsp;';
			}
			
		}

		echo  "<br>";
		$base++;
		$spa--;
		$lineaL=$lineaL+2;
	}

        }	
?>

</body>
</html>


