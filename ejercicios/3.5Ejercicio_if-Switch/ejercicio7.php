

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

<form  method="post" name="datos_usuario" id="datos_usuario">
  <table width="30%" >
    <tr>
      <td>Nota 1</td>
      <td><label for="nota_s"></label>
      <input type="double" name="n1" id="nombre_usuario"></td>
    </tr>
    <tr>
      <td>Nota 2</td>
      <td><label for="nota_s"></label>
      <input type="double" name="n2" id="nombre_usuario"></td>
    </tr>
    <tr>
      <td>Nota 3</td>
      <td><label for="nota_s"></label>
      <input type="double" name="n3" id="nombre_usuario"></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="enviando" id="enviando" value="Enviar"></td>
    </tr>
  </table>
</form>


<?php 

if(isset($_POST["enviando"])){

       $n1=$_POST["n1"];
        $n2=$_POST["n2"];
         $n3=$_POST["n3"];

         $resultado=($n1+$n2+$n3)/3;

         echo "Su nota es " . $resultado . "<br>";
   
    }	

    	if($resultado>=4.8){
					echo "Sobresaliente";
				}
				else if ($resultado<=4.7 and $resultado>=4.5){
					echo "Notable";
				}
				else if ($resultado<=4.4 and $resultado>=4.0){
					echo "Bien";
				}
				else if ($resultado<=3.9 and $resultado>=3.5){
					echo "Suficiente";
				}
				else if ($resultado<3.5){
					echo "Insuficiente";
				}
 ?>
</body>
</html>

