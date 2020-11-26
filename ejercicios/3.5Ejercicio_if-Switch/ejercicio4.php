
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

<form  method="post" name="datos_usuario" id="datos_usuario">
  <table width="30%" >
    <tr>
      <td>Ingrese el dia de la semana:</td>
      <td><label for="ht_s"></label>
      <input type="number" name="ht_s" id="nombre_usuario"></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="enviando" id="enviando" value="Enviar"></td>
    </tr>
  </table>
</form>


<?php 

if(isset($_POST["enviando"])){

       $ht=$_POST["ht_s"];

      
    }
          if($ht>40){
					$sue1=($ht-40)*16;
				}else{
					$sue1=0;
				}
			
			if($ht<=40){
					$sue=$ht*12;
				}else{
					$sue=40*12;
				}

       echo $sue+$sue1;
 		
 ?>
</body>
</html>

