<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

<form  method="post" name="datos_usuario" id="datos_usuario">
  <table width="30%" >
    <tr>
      <td>Ingrese la hora</td>
      <td><label for="h_s"></label>
      <input type="number" name="h_s" id="nombre_usuario"></td>
    </tr>
     <tr>
      <td>Ingrese los min</td>
      <td><label for="m_s"></label>
      <input type="number" name="m_s" id="nombre_usuario"></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="enviando" id="enviando" value="Enviar"></td>
    </tr>
  </table>
</form>


<?php 

if(isset($_POST["enviando"])){

       $h=$_POST["h_s"];
       $m=$_POST["m_s"];


       	 $c1=$m*60;
       	 if ($m==0) {  $ch=24-$h;}else {  $ch=24-$h-1;}
        

      
        $c=$ch*3600;

       $resf=$c+$c1;
        echo "Para la media noche faltan " . $resf . " Seg.";
      
    }
    
 		
 ?>
</body>
</html>
