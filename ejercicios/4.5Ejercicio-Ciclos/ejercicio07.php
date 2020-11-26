

<?php 
	echo "Realiza el control de acceso a una caja fuerte.La combinación será un número de 4 cifras. El
programa nos pedirá la combinación para abrirla. <br> Si no acertamos, se nos mostrará el mensaje
“Lo siento, esa no es la combinación” y si acertamos se nos dirá “La caja fuerte se ha abierto
satisfactoriamente”. <br> Tendremos cuatro oportunidades para abrir la caja fuerte. <br> <br> <br>";


	echo 'Activar caja fuerte
<form action="ejercicio07-1.php" method="GET">
<input type="hidden" name="password" value="222">
<input type="hidden" name="oportunidades" value="4">
<input type="submit" value="Continuar">
</form>
</body>';
 
 ?>

