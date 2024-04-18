<?php

    $numero = $_POST['numero'];
    $fat = 1;

    echo "O fatorial(!) do $numero é: <br>";

    for ($i = 1; $i <= $numero; $i++) {
        $fat *= $i;
        echo "$i ";
        if ($i < $numero) {
            echo "x ";
        }
    }
    echo "= $fat";
?>


