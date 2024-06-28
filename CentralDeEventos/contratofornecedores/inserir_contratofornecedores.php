<?php
require_once("../cabecalho.php");

if ($_POST) {
    $dataassinatura = $_POST['dataassinatura'];
    $fornecedor = $_POST['fornecedor'];
    $fornecedores_id = $_POST['fornecedores_id'];
    
    if ($dataassinatura != "" && $fornecedor != "" && $fornecedores_id != "") {
        if (adicionarContrato($dataassinatura, $fornecedor, $fornecedores_id)) {
            echo "Registro inserido com sucesso!";
        } else {
            echo "Erro ao inserir o registro!";
        }
    } else {
        echo "Preencha todos os campos!";
    }
}
?>

<h3>Adicionar Contrato</h3>
<form action="" method="POST">
    <div class="row">
        <div class="col">
            <label for="dataassinatura" class="form-label">Informe a data de assinatura</label>
            <input type="date" class="form-control" name="dataassinatura" required>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="fornecedor" class="form-label">Informe o fornecedor</label>
            <input type="text" class="form-control" name="fornecedor" required>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="fornecedores_id" class="form-label">Informe o ID do fornecedor</label>
            <input type="text" class="form-control" name="fornecedores_id" required>
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
