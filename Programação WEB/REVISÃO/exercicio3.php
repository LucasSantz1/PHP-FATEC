<?php require_once("header.php") ?>

<h1>Calculadora de Bônus para Funcionários</h1>

<form action="" method="post">
    <div class="row">
        <div class="col">
            <label for="lucros_empresa">Lucros da Empresa (R$)</label>
            <input type="number" id="lucros_empresa" name="lucros_empresa" class="form-control" step="0.01" required /> <!-- Permite valores decimais -->
        </div>
        <div class="col">
            <label for="nome_funcionario">Nome do Funcionário</label>
            <input type="text" id="nome_funcionario" name="nome_funcionario" class="form-control" required />
        </div>
        <div class="col">
            <label for="desempenho">Desempenho</label>
            <select id="desempenho" name="desempenho" class="form-control" required>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
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

    $lucrosEmpresa = $_POST["lucros_empresa"];
    $nomeFuncionario = $_POST["nome_funcionario"];
    $desempenhoFuncionario = $_POST["desempenho"];
    
    $bonusFuncionario = calcularBonus($lucrosEmpresa, $desempenhoFuncionario);

    echo "<div class='mt-3'><strong>O funcionário " . htmlspecialchars($nomeFuncionario) . " receberá um bônus de R$ " . number_format($bonusFuncionario, 2, ",", ".") . "</strong></div>";
}

function calcularBonus($lucrosEmpresa, $desempenhoFuncionario)
{
    $bonus = 0;

    if ($desempenhoFuncionario == 1) {
        $bonus = $lucrosEmpresa * 0.001;
    } elseif ($desempenhoFuncionario == 2) {
        $bonus = $lucrosEmpresa * 0.002;
    } elseif ($desempenhoFuncionario == 3) {
        $bonus = $lucrosEmpresa * 0.003;
    } elseif ($desempenhoFuncionario == 4) {
        $bonus = $lucrosEmpresa * 0.005;
    } elseif ($desempenhoFuncionario == 5) {
        $bonus = $lucrosEmpresa * 0.007;
    }

    return $bonus;
}

require_once("footer.php")
?>
