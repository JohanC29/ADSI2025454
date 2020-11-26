<?php

$estudiantes= array(
    'ANDRES PALACION',
    'CARLOS BUENO',
    'DARIO REINA',
    'ESTEPHANY AREVALO',
    'HEYDI OLIVEROS',
    'HUGO LLANTEN',
    'IVAN URBINA',
    'JAIDER GARCIA',
    'JAIR HERNANDEZ',
    'JEAN PEDRAZA',
    'JHONATAN ZAMBRANO',
    'JOHAN MUELAS',
    'JOSE BARRERA',
    'JUAN SUAREZ',
    'JUAN RODRIGUEZ',
    'JULIAN GIRALDO');

$pilares= array(
    'Adecuacion Funcional',
    'Eficiencia de DesempeÑo',
    'Compatibilidad',
    'Usabilidad',
    'Fiabilidad',
    'Seguridad',
    'Mantenibilidad',
    'Portabilidad'
    );

if(isset($_GET['calcular'])){
    $calcular = $_GET['calcular'];
    if($calcular==1){
        $matriz = calcular($estudiantes,$pilares);
        mostrarMatriz($matriz);
    }
}else{
    //--- Mostrar Formulario
    mostrarListadoEstudiantes($estudiantes);

    echo '
    <form method="GET" action="#">
        <input type="number" value="1" name="calcular" hidden>
        <input class="boton_personalizado" type="submit" value="Calcular">
    </form>
    ';

}


function mostrarMatriz($matriz){
    echo '
    <table>
        <tr>
            <th>Grupo No.</th>
            <th>Metrica</th>
            <th>Integrante No.1</th>
            <th>Integrante No.2</th>
        </tr>
    ';
    foreach ($matriz as $i => $value) {
        echo '
        <tr>
            <td>'.($i+1).'</td>
            <td>'.$matriz[$i][0].'</td>
            <td>'.$matriz[$i][1].'</td>
            <td>'.$matriz[$i][2].'</td>
        </tr>
    ';
    }
    echo '
    </table>
    ';
}

function calcular($estudiantes,$pilares){
    $lista=[];
    $matriz=array();
    
    for ($i = 0;$i<count($pilares);$i++){
        $cont=0;
        $aux=array();
        $aux[] =strtoupper($pilares[$i]);
        while ($cont!=2) {
            $numAleatorio = random_int(0,count($estudiantes)-1);
            $existe=0;
            // Comparar si el estudiante ya esta seleccionado
    
            for ($k=0; $k < count($lista); $k++) { 
                if($estudiantes[$numAleatorio]==$lista[$k]){
                    $existe=1;
                break;
                }
            }
    
            //fin seleccion
            if($existe==0){
                $lista[]=$estudiantes[$numAleatorio];
                $aux[]=$estudiantes[$numAleatorio];
                $cont++;
            }
        }
        $matriz[]=$aux;
    }
    return $matriz;
}


function mostrarListadoEstudiantes($estudiantes){
    echo '
    <table style = "width: 50%;">
        <tr>
            <th>No.</th>
            <th>Nombre</th>
        </tr>
    ';
    foreach ($estudiantes as $i => $value) {
        echo '
        <tr>
            <td>'.($i+1).'</td>
            <td>'.$estudiantes[$i].'</td>
        </tr>
    ';
    }
    echo '
    </table>
    ';
}

?>




