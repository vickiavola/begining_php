<?php

// Arreglos asociativo

$cafes = array (
     "Capuchino" => 50,
     "Latte" => 49,
     "Americano" => 70
);

echo "El precio del café Americano es de {$cafes ['Americano']}";

echo "\n";

// Para acceder a un arreglo que esta dentro de otro arreglo

$personas = array(
     "Carlos" => array(
          "apellido"=>"Santana",
          "edad"=>20,
     ),

     "Maria" => array(
          "apellido"=>"Perez",
          "edad"=>18,
     ),
);

echo "La información de Maria es: Apellido: ". $personas["Maria"]["apellido"] ." Edad:". $personas["Maria"]["edad"];

echo "\n";


?>