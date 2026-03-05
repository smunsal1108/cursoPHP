<?php 

function pintar_formulario($registros) {
    echo "<table>"; 
    foreach ($registros as $clave => $valor) {
        echo "<tr>";
        echo "<th>$clave</th>";
        echo "<td>";
        if (is_array($valor)) {
            foreach ($valor as $contenidoValor) {
                echo nl2br("$contenidoValor \n");
            }
        } else {
            echo $valor;
        }
        
        echo"</td>";
        echo"</tr>";
    }
    echo"</table>";
}

?>