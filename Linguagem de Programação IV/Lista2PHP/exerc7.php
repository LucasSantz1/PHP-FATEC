<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios</title>
</head>
<body>
  <form action="exerc7resposta.php" method="post">
    <?php
      for ($i = 1; $i <= 10; $i++) {
        echo '<label for="nome_aluno'.$i.'">Nome do Aluno:</label>';
        echo '<input type="text" name="alunos['.$i.'][nome]" id="nome_aluno'.$i.'" placeholder="Nome do Aluno">';
        echo '<label for="nota1_aluno'.$i.'">Nota 1:</label>';
        echo '<input type="number" step="0.01" name="alunos['.$i.'][nota1]" id="nota1_aluno'.$i.'" placeholder="Nota 1">';
        echo '<label for="nota2_aluno'.$i.'">Nota 2:</label>';
        echo '<input type="number" step="0.01" name="alunos['.$i.'][nota2]" id="nota2_aluno'.$i.'" placeholder="Nota 2">';
        echo '<br>';
      }
    ?>
    <button type="submit" name="submit">Enviar</button>
  </form>
</body>
</html>
