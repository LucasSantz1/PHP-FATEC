<?php

    $valor = $_POST['valor']; 
    if($valor > 0)
        echo "Valor positivo!";
    elseif($valor < 0)
        echo "Valor Negativo!";
    else
        echo "Valor igual a 0!";
?>
