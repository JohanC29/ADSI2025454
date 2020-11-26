

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

<form  method="post" name="datos_usuario" id="datos_usuario">
  <table width="30%" >
    <tr>
      <td>Ingrese la altura en la que caera el objecto:</td>
      <td><label for="alt_s"></label>
      <input type="number" name="alt_s" id="nombre_usuario"></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="enviando" id="enviando" value="Enviar"></td>
    </tr>
  </table>
</form>


<?php 

if(isset($_POST["enviando"])){

       $alt=$_POST["alt_s"];

    $t=$alt*2/9.81;



    echo $t;  echo " Seg";
      
    }
    
 		
 ?>
</body>
</html>


