<?php require("cabecalho.php"); ?>

<h1>Desempenho do Projeto</h1>
<form action="exer7.php" method="post">
    <div class="row">
        <div class="col">
            <label for="prazo" class="form-label">Informe o prazo total do projeto (em dias):</label>
            <input type="number" name="prazo" id="prazo" class="form-control" required />
        </div>
        <div class="col">
            <label for="atividades_total" class="form-label">Informe o número total de atividades:</label>
            <input type="number" name="atividades_total" id="atividades_total" class="form-control" required />
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <label for="atividades_concluidas" class="form-label">Informe o número de atividades já concluídas:</label>
            <input type="number" name="atividades_concluidas" id="atividades_concluidas" class="form-control" required />
        </div>
        <div class="col">
            <label for="produtividade_diaria" class="form-label">Informe a produtividade diária da equipe (atividades por dia):</label>
            <input type="number" name="produtividade_diaria" id="produtividade_diaria" class="form-control" required />
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <button type="submit" class="btn btn-success">Simular</button>
        </div>
    </div>
</form>

<?php 
if ($_POST) {
    // Obtém e valida os dados de entrada
    $prazo = isset($_POST['prazo']) ? (int)$_POST['prazo'] : 0;
    $atividades_total = isset($_POST['atividades_total']) ? (int)$_POST['atividades_total'] : 0;
    $atividades_concluidas = isset($_POST['atividades_concluidas']) ? (int)$_POST['atividades_concluidas'] : 0;
    $produtividade_diaria = isset($_POST['produtividade_diaria']) ? (int)$_POST['produtividade_diaria'] : 0;

    if ($prazo <= 0 || $atividades_total <= 0 || $produtividade_diaria <= 0 || $atividades_concluidas < 0 || $atividades_concluidas > $atividades_total) {
        echo "<div class='alert alert-danger'>Por favor, insira valores válidos.</div>";
    } else {
        $atividades_restantes = $atividades_total - $atividades_concluidas;

        // Calcula os dias necessários para concluir as atividades restantes
        $dias_necessarios = $atividades_restantes / $produtividade_diaria;
        if ($atividades_restantes % $produtividade_diaria != 0) {
            $dias_necessarios = (int)($dias_necessarios) + 1;
        }

        // Calcula os dias já consumidos
        $dias_consumidos = $atividades_concluidas / $produtividade_diaria;
        if ($atividades_concluidas % $produtividade_diaria != 0) {
            $dias_consumidos = (int)($dias_consumidos) + 1;
        }

        $dias_restantes = $prazo - $dias_consumidos;

        $status = $dias_necessarios <= $dias_restantes ? "O projeto está no prazo!" : "O projeto está atrasado!";

        echo "
        <div class='mt-3'>
            <h2>Simulação de Desempenho</h2>
            <p><strong>Prazo total do projeto:</strong> $prazo dias</p>
            <p><strong>Atividades totais:</strong> $atividades_total</p>
            <p><strong>Atividades concluídas:</strong> $atividades_concluidas</p>
            <p><strong>Produtividade diária:</strong> $produtividade_diaria atividades por dia</p>
            <p><strong>Atividades restantes:</strong> $atividades_restantes</p>
            <p><strong>Dias restantes:</strong> $dias_restantes dias</p>
            <p><strong>Dias necessários para concluir o projeto:</strong> $dias_necessarios dias</p>
            <h3>Status do projeto: $status</h3>
        </div>";
    }
}

require("rodape.php"); 
?>
