<?php

$usernames = ["Pepito", "Andrés", "Juan"];

do {
    
    $username = readline("Por favor, ingresa tu nuevo nombre de usuario: ");

    echo "\n";
// Utilizamos la función in_array para saber si un elemento se encuentra dentro de un arreglo

} while( in_array($username, $usernames) );

echo "\n";

?>