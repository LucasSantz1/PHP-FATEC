<?php
require_once("../cabecalho.php");

if ($_GET['id']) {
    $id = $_GET['id'];
    $evento = consultarEventoId($id);

    if ($_POST) {
        $dataevento = $_POST['dataevento'];
        $local = $_POST['local'];
        $cliente_evento_id = $_POST['cliente_evento_id'];

        if ($dataevento != "" && $local != "" && $cliente_evento_id != "") {
            if (alterarEvento($id, $dataevento, $local, $cliente_evento_id)) {
                echo "Registro atualizado com sucesso!";
            } else {
                echo "Erro ao atualizar o registro!";
            }
        } else {
            echo "Preencha todos os campos!";
        }
    }
} else {
    echo "ID do evento não definido.";
    exit;
}
?>

<h3>Alterar Evento</h3>
<form action="" method="POST">
    <div class="row">
        <div class="col">
            <label for="dataevento" class="form-label">Informe a data do evento</label>
            <input type="date" class="form-control" name="dataevento" value="<?= $evento['dataevento'] ?>" required>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="local" class="form-label">Informe o local</label>
            <input type="text" class="form-control" name="local" value="<?= $evento['local'] ?>" required>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="cliente_evento_id" class="form-label">Informe o ID do cliente</label>
            <input type="text" class="form-control" name="cliente_evento_id" value="<?= $evento['cliente_evento_id'] ?>" required>
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
