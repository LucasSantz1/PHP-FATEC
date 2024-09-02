<?php require_once("header.php") ?>

<h1>Cálculo de Custo do Projeto</h1>

<form action="" method="post">
    <div class="row">
        <div class="col">
            <label for="qtde_horas">Estimativa de Horas</label>
            <input type="number" id="qtde_horas" name="qtde_horas" class="form-control" required /> 
        </div>
        <div class="col">
            <label for="valor_hora">Valor por Hora (R$)</label>
            <input type="number" id="valor_hora" name="valor_hora" class="form-control" required /> 
        </div>
        <div class="col">
            <label for="custo_adicional">Custos Adicionais (R$)</label>
            <input type="number" id="custo_adicional" name="custo_adicional" class="form-control" value="0" /> 
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

    $quantidadeHoras = $_POST["qtde_horas"];
    $valorHora = $_POST["valor_hora"];
    $custoAdicional = isset($_POST["custo_adicional"]) ? $_POST["custo_adicional"] : 0;

    function calcularCustoProjeto($quantidadeHoras, $valorHora, $custoAdicional)
    {
        $custoMaoObra = $quantidadeHoras * $valorHora;
        $custoTotal = $custoMaoObra + $custoAdicional;
        return $custoTotal;
    }

    $custoTotalProjeto = calcularCustoProjeto($quantidadeHoras, $valorHora, $custoAdicional);

    echo "<div class='mt-3'><strong>O custo total do projeto é de R$ " . number_format($custoTotalProjeto, 2, ",", ".") . "</strong></div>";
}

require_once("footer.php")
?>
