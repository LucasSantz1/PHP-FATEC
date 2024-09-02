<?php require_once("header.php") ?>

<h1>Cálculo de Férias</h1>

<form action="" method="post">
    <div class="row">
        <div class="col">
            <label for="tempo_servico">Tempo de Serviço (Dias)</label>
            <input type="number" id="tempo_servico" name="tempo_servico" class="form-control" required /> 
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

    $tempoServico = $_POST["tempo_servico"];

    function calcularDiasFerias($tempoServico)
    {
        $diasFerias = floor($tempoServico / 30); // Arredonda o valor para baixo

        // Limita o máximo de dias de férias a 30
        if ($diasFerias > 30) {
            $diasFerias = 30;
        }

        return $diasFerias;
    }

    $diasFerias = calcularDiasFerias($tempoServico);

    echo "<div class='mt-3'><strong>Com base em " . htmlspecialchars($tempoServico) . " dias de serviço, o funcionário tem direito a " . $diasFerias . " dias de férias.</strong></div>";
}

require_once("footer.php")
?>
