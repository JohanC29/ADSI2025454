<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio08</title>
    <style>
table {
    border-collapse: collapse;
    width: 70%;
    margin: 0 auto;
}

th, td {
text-align: left;
padding: 8px;
}

tr:nth-child(even){
    background-color: #f2f2f2;
}

th{
background-color: teal;
color: white;
}


    </style>
</head>
<body>
    <h1>Ejercicio08</h1>
    <p>Muestra la tabla de multiplicar de un número introducido por teclado. 
        El resultado se debe mostrar en una tabla (<table> en HTML)</p>

    <form action="#" method="GET">
        <input name="num" type="number" required><br>
        <input type="submit" value="Calcular">
    </form>
    <?php

    if(isset($_GET['num'])){
        $num=$_GET['num'];
        echo '
        <table>
            <tr>
                <th>Numero</th>
                <th>Operador</th>
                <th>Base</th>
                <th>Igual</th>
                <th>Resultado</th>
            </tr>
        ';

        for ($i=1; $i < 11 ; $i++) { 
            echo '
            <tr>
                <td>'.$i.'</td>
                <td>x</td>
                <td>'.$num.'</td>
                <td>=</td>
                <td>'.($i*$num).'</td>
            </tr>
            ';
        }

        echo '
        </table>
        ';

    }
    ?>















</body>
</html>