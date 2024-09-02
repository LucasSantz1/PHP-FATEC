<?php
    $area = $_POST['valor'];

    $tinta = ($area / 3);
    $lata = ceil($tinta/18); 
    $total = ($lata * 80); 

    echo "A quantidade necessária de lata(s) de tinta é de: $lata<br>";
    echo "Preço total: R$ ".number_format($total, 2, ',', '.');
?>