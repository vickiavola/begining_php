<?php

// Para saber que tan grande es un arreglo

$edades = [18, 22, 40, 34];
echo count($edades);

echo "\n";


// Para agregar un elemento al arreglo

array_push($edades, 13);
var_dump($edades);

echo "\n";

// Para definir si una variable es un arreglo

$esto_no_es_un_arreglo ="";

var_dump(is_array($esto_no_es_un_arreglo));

echo "\n";


// Para convertir un string en un arreglo (el primer parámetro que debemos pasarle es el separador que utilizamos en el string)

$lista_de_frutas = "fresa,cereza,manzana";
$lista_de_frutas_array = explode(",", $lista_de_frutas);

var_dump($lista_de_frutas_array);

echo "\n";

// Para convertir un arreglo en un string (el primer parámetro que debemos pasarle es el separador que queremos usar en el string)

$lista_de_frutas_array_2 = ["Fresa", "Cereza", "Manzana"];
$lista_de_frutas_string = implode(",", $lista_de_frutas_array_2);

var_dump($lista_de_frutas_string);

echo "\n";

?>