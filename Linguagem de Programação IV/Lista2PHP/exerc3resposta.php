<?php

if(isset($_POST["numeros"]) && isset($_POST["valor"])) {
    $numero = $_POST["Os numeros"];
    $valor = $_POST["O valor"];
    
    foreach($numero as $n) {
        $multiplicacao = $n * $valor;
        echo "<p> $n * $valor = $multiplicacao </p>";
    }
}

?>