
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

<form  method="post" name="datos_usuario" id="datos_usuario">
  <table width="30%" >
    <tr>
      <td>Ingrese mes de nacimiento:</td>
      <td><label for="alt_s"></label>
      <input type="number" name="mes_s" id="nombre_usuario"></td>
    </tr>
    <tr>
       <tr>
      <td>Ingrese dia de nacimiento</td>
      <td><label for="alt_s"></label>
      <input type="number" name="dia_s" id="nombre_usuario"></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="enviando" id="enviando" value="Enviar"></td>
    </tr>
  </table>
</form>


<?php 

if(isset($_POST["enviando"])){

       $mes=$_POST["mes_s"];
       $dia=$_POST["dia_s"];
   
      
    }

     switch ($mes) {
           case '1':
          if ($dia<=20) {echo "Capricornio"; }
           break;
           case '2':
               if ($dia<=19) {echo "acuario"; }
             break;
             case '3':
               if ($dia<=20) {echo "Piscis"; }
             break;
              case '4':
               if ($dia<=20) {echo "Aries"; }
             break;
             case '5':
               if ($dia<=21) {echo "Tauro"; }
             break;
             case '6':
               if ($dia<=21) {echo "Géminis"; }
             break;
              case '7':
               if ($dia<=23) {echo "Cáncer"; }
             break;   
              case '8':
               if ($dia<=23) {echo "Leo"; }
             break;  
             case '9':
               if ($dia<=23) {echo "Virgo"; }
             break; 
             case '10':
               if ($dia<=23) {echo "Libra"; }
             break; 
             case '11':
               if ($dia<=22) {echo "Escorpio"; }
             break;  
              case '12':
               if ($dia<=21) {echo "Sagitario"; }
             break;        
    }
           switch ($mes) {
             case '1':
               if ($dia<=31 and $dia>=21) {echo "acuario"; }
             break;
              case '2':
               if ($dia<=29 and $dia>=20) {echo "Piscis"; }
             break;
             case '3':
               if ($dia<=31 and $dia>=21) {echo "Aries"; }
             break;
             case '4':
               if ($dia<=30 and $dia>=21) {echo "Tauro"; }
             break;
             case '5':
               if ($dia<=31 and $dia>=22) {echo "Géminis"; }
             break;
             case '6':
               if ($dia<=30 and $dia>=22) {echo "Cáncer"; }
             break;
             case '7':
               if ($dia<=31 and $dia>=24) {echo "Leo"; }
             break;
             case '8':
               if ($dia<=31 and $dia>=24) {echo "Virgo"; }
             break; 
             case '9':
               if ($dia<=30 and $dia>=24) {echo "Libra"; }
             break;
             case '10':
               if ($dia<=30 and $dia>=24) {echo "Escorpio"; }
             break; 
              case '11':
               if ($dia<=31 and $dia>=24) {echo "Sagitario"; }
             break;  
              case '12':
          if ($dia<=31 and $dia>=22) {echo "Capricornio"; }
           break;
    }

         
    
    
 ?>
</body>
</html>
