<?php
    $valor = $_POST['valor']; //variavel recebe o valor digitado
    if($valor > 0)
        echo "Valor positivo";
    elseif($valor < 0)
        echo "Valor negativo";
    else
        echo "Valor igual a zero";
