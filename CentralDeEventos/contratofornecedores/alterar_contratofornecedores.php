<?php
require_once("../cabecalho.php");

if (isset($_GET['dataassinatura']) && isset($_GET['fornecedor'])) {
    $dataassinatura = $_GET['dataassinatura'];
    $fornecedor = $_GET['fornecedor'];
    $contrato = consultarContratoId($dataassinatura, $fornecedor);

    if ($_POST) {
        $novadataassinatura = $_POST['novadataassinatura'];
        $novofornecedor = $_POST['novofornecedor'];
        $fornecedores_id = $_POST['fornecedores_id'];

        if ($novadataassinatura != "" && $novofornecedor != "" && $fornecedores_id != "") {
            if (alterarContrato($dataassinatura, $fornecedor, $novadataassinatura, $novofornecedor, $fornecedores_id)) {
                echo "Registro atualizado com sucesso!";
            } else {
                echo "Erro ao atualizar o registro!";
            }
        } else {
            echo "Preencha todos os campos!";
        }
    }
} else {
    echo "Data de assinatura ou fornecedor não definidos.";
    exit;
}
?>

<h3>Alterar Contrato</h3>
<form action="" method="POST">
    <div class="row">
        <div class="col">
            <label for="novadataassinatura" class="form-label">Informe a nova data de assinatura</label>
            <input type="date" class="form-control" name="novadataassinatura" value="<?= $contrato['dataassinatura'] ?>" required>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="novofornecedor" class="form-label">Informe o novo fornecedor</label>
            <input type="text" class="form-control" name="novofornecedor" value="<?= $contrato['fornecedor'] ?>" required>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="fornecedores_id" class="form-label">Informe o ID do fornecedor</label>
            <input type="text" class="form-control" name="fornecedores_id" value="<?= $contrato['fornecedores_id'] ?>" required>
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
