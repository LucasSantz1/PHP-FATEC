<?php require_once("header.php") ?>

<h1>Calculadora de Tempo</h1>

<form action="" method="post">
    <div class="row">
        <div class="col">
            <label for="entrada_horario">
                Hora de Entrada
            </label>
            <input type="time" id="entrada_horario" name="entrada_horario" class="form-control" required />
        </div>
        <div class="col">
            <label for="saida_horario">
                Hora de Saída
            </label>
            <input type="time" id="saida_horario" name="saida_horario" class="form-control" required />
        </div>

        <div class="row mt-3">
            <div class="col">
                <button type="submit" class="btn btn-primary">Calcular</button>
            </div>
        </div>
    </div>
</form>

<?php
function calcularDiferencaTempo($horaEntrada, $horaSaida)
{
    $entrada = new DateTime($horaEntrada);
    $saida = new DateTime($horaSaida);

    return $saida->diff($entrada);
}

if ($_POST) {
    $entradaHorario = $_POST["entrada_horario"];
    $saidaHorario = $_POST["saida_horario"];

    $diferenca = calcularDiferencaTempo($entradaHorario, $saidaHorario);

    echo "<div class='mt-3'><strong>Tempo total: </strong>" . $diferenca->format("%H:%I") . "</div>";
}

require_once("footer.php")
?>
