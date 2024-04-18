<?php

    $alunos = isset($_POST['alunos']) ? $_POST['alunos'] : array();
    $maior_nota = 0;
    $aluno_maior_nota = '';
    $total_notas = 0;
    $num_alunos = 0; 

    foreach ($alunos as $aluno) {
        $nota = $aluno['nota'];
        $total_notas += $nota;
        $num_alunos++; 
        if ($nota > $maior_nota) {
            $maior_nota = $nota;
            $aluno_maior_nota = $aluno['nome'];
        }
    }

    if ($num_alunos > 0) {
        $media = $total_notas / $num_alunos; 
        echo "A Média geral da classe é: " . $media . "<br>";
    } else {
        echo "Não é possivel encontrar alunos para calcular a média<br>";
    }

    echo "Aluno que obteve a maior nota é: " . $aluno_maior_nota . " (" . $maior_nota . ")";
?>