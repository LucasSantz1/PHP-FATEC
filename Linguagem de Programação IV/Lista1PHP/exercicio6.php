<?php

    $valorA = $_POST['valorA'];
    $valorB = $_POST['valorB'];
    if($valorA > $valorB)
        echo "Os valores em ordem crescente: $valorB - $valorA";
    elseif($valorB > $valorA)
        echo "Os valores em ordem crescente: $valorA - $valorB";
    else
        echo "Números iguais: $valorA";
?>

<?php
   
?>
