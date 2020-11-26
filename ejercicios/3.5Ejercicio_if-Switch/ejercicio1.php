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
      <input type="text" name="dia_s" id="nombre_usuario"></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="enviando" id="enviando" value="Enviar"></td>
    </tr>
  </table>
</form>


<?php 

if(isset($_POST["enviando"])){

       $dia=$_POST["dia_s"];

            echo" la asignatura de la primer hora del dia es: ";
     
           switch ($dia) {
           case 'Lunes':
           echo "Matematicas" ;
           break;
           case 'Martes':
           echo "Sociales" ;
           break;
           case 'Miercoles':
           echo "Geometria";
           break;
            case 'Jueves':
           echo "Fisica";
           break;
           case 'Viernes':
           echo "Ingles";
           break;
        
    }
         }
 
 ?>
</body>
</html>



 