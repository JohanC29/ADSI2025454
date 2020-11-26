
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
      <td><label for="dia_s"></label>
      <input type="number" name="dia_s" id="nombre_usuario"></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="enviando" id="enviando" value="Enviar"></td>
    </tr>
  </table>
</form>


<?php 

if(isset($_POST["enviando"])){

       $dia=$_POST["dia_s"];

       echo"Dia ";

       if($dia>7){
					echo "no valido";
				}

            
     
           switch ($dia) {
           case '1':
           echo "Lunes" ;
           break;
           case '2':
           echo "Martes" ;
           break;
           case '3':
           echo "Miercoles";
           break;
            case '4':
           echo "Jueves";
           break;
           case '5':
           echo "Viernes";
           break;
           case '6':
           echo "Sabado";
           break;
           case '7':
           echo "Domingo";
           break;
        
    }
         }
 
 ?>
</body>
</html>













<?php 
 ?>