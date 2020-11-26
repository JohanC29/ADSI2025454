
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

<form  method="post" name="datos_usuario" id="datos_usuario">
  <table width="30%" >
    <tr>
      <td>Digite la hora en formato de 24h:</td>
      <td><label for="hora"></label>
      <input type="number" name="hora_s" ></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="enviando" id="enviando" value="Enviar"></td>
    </tr>
  </table>
</form>


<?php 

if(isset($_POST["enviando"])){

       $hora=$_POST["hora_s"];

       		if($hora>24){
					echo "hora no validad";
				}
				else if ($hora<=5 Or $hora>=21){
					echo "buenas noches";
				}
				else if ($hora>=13 and $hora<=20){
					echo "buenas tardes";
				}
				else if ($hora>=6 and $hora<=12){
					echo "buenos días";
				}
         }
 
 ?>
</body>
</html>
