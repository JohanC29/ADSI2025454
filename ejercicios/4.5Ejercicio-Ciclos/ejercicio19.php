<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

Realiza un programa que pinte una pirámide por pantalla. La altura se debe pedir por teclado
mediante un formulario. La pirámide estará hecha de bolitas, ladrillos o cualquier otra imagen
de las 5 que se deben dar a elegir mediante un formulario.


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
 	 		
 	 		for($i=1; $i<=$spa;$i++){ echo '&nbsp;&nbsp;';}
 	 		for($i=1; $i<=$lineaL;$i++){ echo "$material";}
 	 		echo  "<br>";
 	 		$base++;
 	 		$spa--;
 	 		$lineaL=$lineaL+2;
 	 	}

        }	
 ?>

</body>
</html>


