<?php require_once("header.php") ?>

<h1>Calculadora de Disponibilidade e Capacidade de Tarefas</h1>

<form action="" method="post">
    <div class="row">
        <h2>Tarefas</h2>
        <div class="col">
            <label for="nome_tarefa">Nome da Tarefa</label>
            <input type="text" id="nome_tarefa" name="nome_tarefa" class="form-control" required />
        </div>
        <div class="col">
            <label for="total_horas">Total de Horas da Tarefa</label>
            <input type="number" id="total_horas" name="total_horas" class="form-control" required />
        </div>
        <div class="col">
            <label for="complexidade">Complexidade</label>
            <select id="complexidade" name="complexidade" class="form-control" required>
                <option value="1">Baixa</option>
                <option value="2">Média</option>
                <option value="3">Alta</option>
            </select>
        </div>
    </div>
    <div class="row mt-3">
        <h2>Funcionário</h2>
        <div class="col">
            <label for="nome_funcionario">Nome do Funcionário</label>
            <input type="text" id="nome_funcionario" name="nome_funcionario" class="form-control" required />
        </div>
        <div class="col">
            <label for="disponibilidade_horas">Total de Horas Disponíveis de Trabalho</label>
            <input type="number" id="disponibilidade_horas" name="disponibilidade_horas" class="form-control" required />
        </div>
        <div class="col">
            <label for="nivel_experiencia">Nível de Experiência</label>
            <select id="nivel_experiencia" name="nivel_experiencia" class="form-control" required>
                <option value="1">Júnior</option>
                <option value="2">Pleno</option>
                <option value="3">Sênior</option>
            </select>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <button type="submit" name="calcular" class="btn btn-primary">Calcular</button>
        </div>
    </div>
</form>

<?php

if (isset($_POST["calcular"])) {
    
    $nomeTarefa = $_POST["nome_tarefa"];
    $totalHorasTarefa = $_POST["total_horas"];
    $complexidadeTarefa = $_POST["complexidade"];
    $nomeFuncionario = $_POST["nome_funcionario"];
    $disponibilidadeHorasFuncionario = $_POST["disponibilidade_horas"];
    $nivelExperienciaFuncionario = $_POST["nivel_experiencia"];

    $descricaoComplexidade = [
        1 => "Baixa",
        2 => "Média",
        3 => "Alta"
    ];

    $descricaoNivelExperiencia = [
        1 => "Júnior",
        2 => "Pleno",
        3 => "Sênior"
    ];

    function verificarDisponibilidade($totalHorasTarefa, $disponibilidadeHorasFuncionario)
    {
        return $disponibilidadeHorasFuncionario > ($totalHorasTarefa * 0.1) ? "Disponível" : "Indisponível";
    }

    function verificarCapacidade($nivelExperienciaFuncionario, $complexidadeTarefa)
    {
        if ($nivelExperienciaFuncionario == 1 && $complexidadeTarefa == 1) {
            return "Pode assumir";
        } elseif ($nivelExperienciaFuncionario == 2 && $complexidadeTarefa <= 2) {
            return "Pode assumir";
        } elseif ($nivelExperienciaFuncionario == 3 && $complexidadeTarefa >= 2) {
            return "Pode assumir";
        } else {
            return "Não pode assumir";
        }
    }

    $disponibilidade = verificarDisponibilidade($totalHorasTarefa, $disponibilidadeHorasFuncionario);
    $capacidade = verificarCapacidade($nivelExperienciaFuncionario, $complexidadeTarefa);

    echo "<div class='mt-3'><strong>O funcionário " . htmlspecialchars($nomeFuncionario) . " está " . $disponibilidade . " para a tarefa " . htmlspecialchars($nomeTarefa) . ".</strong></div>";
    echo "<div><strong>O funcionário " . htmlspecialchars($nomeFuncionario) . " " . $capacidade . " a tarefa " . htmlspecialchars($nomeTarefa) . " porque ele é " . $descricaoNivelExperiencia[$nivelExperienciaFuncionario] . " e a tarefa tem complexidade " . $descricaoComplexidade[$complexidadeTarefa] . ".</strong></div>";
}

require_once("footer.php");
?>
