<?php
// Nunca utilizar un While = true directamente sin una condición que permita parar un ciclo
$contador = 1;

while($contador <= 10) {
    echo "Actualmente estamos en la iteración $contador \n";
    $contador++;
}

echo "\n";

?>