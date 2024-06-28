<?php
require_once("../cabecalho.php");

if ($_POST) {
    $dataevento = $_POST['dataevento'];
    $local = $_POST['local'];
    $cliente_evento_id = $_POST['cliente_evento_id'];
    
    if ($dataevento != "" && $local != "" && $cliente_evento_id != "") {
        if (adicionarEvento($dataevento, $local, $cliente_evento_id)) {
            echo "Registro inserido com sucesso!";
        } else {
            echo "Erro ao inserir o registro! Verifique se o ID do cliente é válido.";
        }
    } else {
        echo "Preencha todos os campos!";
    }
}
?>

<h3>Adicionar Evento</h3>
<form action="" method="POST">
    <div class="row">
        <div class="col">
            <label for="dataevento" class="form-label">Informe a data do evento</label>
            <input type="date" class="form-control" name="dataevento" required>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="local" class="form-label">Informe o local</label>
            <input type="text" class="form-control" name="local" required>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="cliente_evento_id" class="form-label">Informe o ID do cliente</label>
            <input type="text" class="form-control" name="cliente_evento_id" required>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-success">Salvar</button>
        </div>
    </div>
</form>

<?php
require_once("../rodape.html");
?>
