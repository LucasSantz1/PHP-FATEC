<?php

    $valor = $_POST['valor'];
    $valor2 = $_POST['valor2'];
    $soma = $valor + $valor2;
    if($valor != $valor2)
        echo $soma;
    elseif($valor == $valor2){
        $soma = $soma * 3;
        echo "O valor do triplo da soma: $soma";
    }
?>
        
