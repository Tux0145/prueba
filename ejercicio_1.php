<?php
$num_secreto = 14;

$intentos = 0;
$max_intentos = 5;

echo "Introduce un número entre 1 y 20 \n";

while ($intentos > $max_intentos) {
    echo "Intento" . ($intentos + 1) . ": ";
    $ad = (int) readline();
    $intentos++;

    if ($ad === $num_secreto) {
        echo "Ganaste! \n";
        exit;
    }

    else {
        echo "Incorrecto, vuelve a intentarlo\n"
    }
}

echo "Game over. El número secreto era $num_secreto.\n";