<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios</title>
</head>
<body>
    <form action="exerc6resposta.php" method="post">
        <?php
            for ($i=0; $i<5; $i++){
                echo '<label for="produto'.$i.'">Nome do Produto:</label>';
                echo '<input type="text" name="produtos['.$i.'][nome]" id="produto'.$i.'" placeholder="Nome do Produto">';
                echo '<label for="preco'.$i.'">Preço do Produto (R$):</label>';
                echo '<input type="number" name="produtos['.$i.'][preco]" id="preco'.$i.'" placeholder="Preço do Produto">';
                echo '<br>';
            }
        ?>
        <button type="submit" name="submit">Enviar</button>
    </form>
</body>
</html>
