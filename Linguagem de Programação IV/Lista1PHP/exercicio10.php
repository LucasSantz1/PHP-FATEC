<?php

    $peso = $_POST['peso'];
    $altura = $_POST['altura'];

    $imc = $peso / ($altura**2);
    
    if ($imc > 24.9){
        echo "Seu IMC é de $imc, voce está acima do peso ideal. :/ <a href='https://www.tuasaude.com/imc/'> Leia mais aqui! </a>";
    }

    elseif($imc < 18.6){
        echo "<p>Seu IMC é de $imc, voce está abaixo do peso ideal. :/ <a href='https://www.tuasaude.com/imc/'> Leia mais aqui! </a>";

    }
    
    else{
        echo "Seu IMC é $imc, voce está portanto está no peso ideal. :) <a href='https://www.tuasaude.com/imc/'> Leia mais aqui! </a>";
    }
?>