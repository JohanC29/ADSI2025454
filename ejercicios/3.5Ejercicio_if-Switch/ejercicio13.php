
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

<form  method="post" name="datos_usuario" id="datos_usuario">
  <table width="30%" >
    <tr>
      <td>Ingrese un numero</td>
      <td><label for="alt_s"></label>
      <input type="number" name="n3_s" id="nombre_usuario"></td>
    </tr>
    <tr>
      <td>Ingrese un numero</td>
      <td><label for="alt_s"></label>
      <input type="number" name="n2_s" id="nombre_usuario"></td>
    </tr>
    <tr>
      <td>Ingrese un numero</td>
      <td><label for="alt_s"></label>
      <input type="number" name="n1_s" id="nombre_usuario"></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="enviando" id="enviando" value="Enviar"></td>
    </tr>
  </table>
</form>


<?php 

if(isset($_POST["enviando"])){

       $n1=$_POST["n1_s"];
       $n2=$_POST["n2_s"];
       $n3=$_POST["n3_s"];

   
    }
   

   if ($n1<$n2 and $n1<$n3) {echo $n1 ;

 if ($n2<$n3) {echo $n2 ;}
      if ($n3>$n1 and $n3>$n2) {echo $n3 ;}

   }


   if ($n2<$n1 and $n2<$n3) {echo $n2 ;

 if ($n1<$n3) {echo $n1 ;}
      if ($n3>$n1 and $n3>$n2) {echo $n3 ;}

   }


   if ($n3<$n2 and $n3<$n1) {echo $n3 ;

if ($n1<$n2) {echo $n1 ;}
      if ($n2>$n1 and $n2>$n3) {echo $n2 ;}
 if ($n2<$n1) {echo $n2 ;}
      if ($n1>$n2 and $n1>$n3) {echo $n1 ;}

   }
   
 		
 ?>
</body>
</html>
