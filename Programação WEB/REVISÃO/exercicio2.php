<?php require_once("header.php") ?>

<h1>Calculadora de Salário Semanal</h1>

<form action="" method="post">
    <div class="row">
        <div class="col">
            <label for="valor_hora">Valor da Hora (R$)</label>
            <input type="number" id="valor_hora" name="valor_hora" class="form-control" step="0.01" required /> <!-- Permite valores decimais -->
        </div>
        <div class="col">
            <label for="horas_trabalhadas_mes">Horas Trabalhadas no Mês</label>
            <input type="number" id="horas_trabalhadas_mes" name="horas_trabalhadas_mes" class="form-control" step="0.01" required /> <!-- step para permitir decimais -->
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <button type="submit" name="calcular" class="btn btn-primary">Calcular</button>
        </div>
    </div>
</form>

<?php
if (isset($_POST['calcular'])) {

    $valorHora = $_POST["valor_hora"];
    $horasTrabalhadasMes = $_POST["horas_trabalhadas_mes"];

    $salarioSemanal = calcularSalarioSemanal($valorHora, $horasTrabalhadasMes);

    echo "<div class='mt-3'><strong>O salário semanal é de R$ " . number_format($salarioSemanal, 2, ",", ".") . "</strong></div>";
}

function calcularSalarioSemanal($valorHora, $horasTrabalhadasMes)
{
    $salarioMensal = $valorHora * $horasTrabalhadasMes;
    
    return $salarioMensal / 4.33; // Lembrando que 4.33 é a média de semanas em um mês
}

require_once("footer.php")
?>
