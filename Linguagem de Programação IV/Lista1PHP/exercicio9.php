<?php
    $ano = $_POST['ano'];
    $ano_atual = $_POST['ano_atual'];

    $qtdanos = $ano_atual - $ano;
    $qtdias = $qtdanos * 365;
    $idade = 2025 - $ano;

    echo "Você já viveu $qtdanos anos <br>.";
    echo "Você já viveu $qtdias dias <br>.";
    echo "Em 2025, a sua idade será de $idade anos.";
?>
