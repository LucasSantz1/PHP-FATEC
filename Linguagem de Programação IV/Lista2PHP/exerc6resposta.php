<?php
if(isset($_POST['submit'])){
    $produtos = $_POST['produtos'];
    $preco_inferior_50 = 0;
    $produtos_50_100 = [];
    $soma_precos_superior_100 = 0;
    $cont = 0;

    foreach ($produtos as $produto) {
        $nome = $produto['nome'];
        $preco = $produto['preco'];

        if ($preco < 50) {
            $preco_inferior_50++;
        } elseif ($preco >= 50 && $preco <= 100) {
            $produtos_50_100[] = $nome;
        } elseif ($preco > 100) {
            $soma_precos_superior_100 += $preco;
            $cont++;
        }
    }

    echo "Quantidade de produtos com preço inferior a R$50,00: $preco_inferior_50 <br>";
    
    echo "Nome dos produtos com preço entre R$50,00 e R$100,00: <br>";
    if(!empty($produtos_50_100)){
        echo "<ul>";
        foreach ($produtos_50_100 as $produto) {
            echo "<li>$produto</li>";
        }
        echo "</ul>";
    } else {
        echo "Não há produtos com preço entre R$50,00 e R$100,00. <br>";
    }

    if ($cont > 0) {
        $media_precos_superior_100 = $soma_precos_superior_100 / $cont;
        echo "Média dos preços dos produtos com preço superior a R$100,00: R$" . round($media_precos_superior_100, 2) . "<br>";
    } else {
        echo "Não há produtos com preço superior a R$100,00.";
    }
}
?>
