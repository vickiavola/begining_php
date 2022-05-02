<?php

//Limpiamos la pantalla

function clear () {
     if(PHP_OS === "WINNT") {
          system("cls");    
     }
     else {
          system("clear");
     }
     
}

$possible_words = ["Bebida", "Pizza", "Cafe", "Jugo", "Agua", "Torta", "Hamburguesa", "Sandwich", "Gelatina", "Leche"];

define("MAX_ATTEMPS", 6);

echo "¡Juego del Ahorcado! \n\n";

// Iniciamos el Juego

//Escogemos una palabra aleatoria

$choosen_word = $possible_words[ rand(0, 9) ];

// Hacemos que la primera letra sea siempre en minúsculas
$choosen_word = strtolower($choosen_word);

// Conocer el número de letras que tiene la palabra seleccionada

$word_length = strlen($choosen_word);

// Mostramos los guiones bajos en función de la longitud de la palabra

$discovered_letters = str_pad("", $word_length, "_");

// Cuantos intentos el usuario ha realizado

$attempts = 0;

// Le decimos al usuario cuantas letras tiene la palabra

do {
     echo "Palabra de $word_length letras \n\n";

     // Mostramos las letras que ha adivinado el usuario

     echo $discovered_letters . "\n\n";

     // Pedimos al usuario que escriba una letra

     $player_letter = readline("Escribe una letra: ");
     $player_letter = strtolower($player_letter);

     // Buscamos si la letra que escribio el usuario esta dentro de la palabra escogida
     if (str_contains ($choosen_word, $player_letter)) {

     // Verificamos todas las ocurrencias de esta letra para reemplazarla
     $offset = 0;
     while(
          ($letter_position = strpos($choosen_word, $player_letter, 
     $offset)) !== false
     ) {
          $discovered_letters[$letter_position] = $player_letter;
          $offset = $letter_position + 1;
          }
     }
     else {
          clear();
          $attempts++;
          echo "Letra incorrecta.  Te quedan ". (MAX_ATTEMPS - $attempts) . " intentos.";
          sleep(2);
     }
     clear();
} while( $attempts < MAX_ATTEMPS && $discovered_letters != $choosen_word );

clear();

if ($attempts < MAX_ATTEMPS)
    echo "¡Felicidades! Has adivinado la palabra. \n\n";
else
    echo "Suerte para la próxima, amigo. \n\n";

echo "La palabra es: $choosen_word\n";
echo "Tú descubriste $discovered_letters";

echo "\n";
?>