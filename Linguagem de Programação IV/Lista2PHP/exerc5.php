<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios</title>
</head>
<body>
    <form action="exerc5resposta.php" method="post">
        <?php
            for ($i = 1; $i <= 20; $i++) {
                echo '<label for="numero' . $i . '">Número ' . $i . ':</label>';
                echo '<input type="number" name="numeros[]" id="numero' . $i . '">';
                echo '<br>';
            }
        ?>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
