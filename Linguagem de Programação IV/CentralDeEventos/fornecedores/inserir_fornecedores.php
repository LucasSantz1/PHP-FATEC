<?php
require_once("../cabecalho.php");

if ($_POST) {
    $nome_fornecedor = $_POST['nome_fornecedor'];
    $tiposervico = $_POST['tiposervico'];
    $contato = $_POST['contato'];
    
    if ($nome_fornecedor != "" && $tiposervico != "" && $contato != "") {
        if (adicionarFornecedor($nome_fornecedor, $tiposervico, $contato)) {
            echo "Registro inserido com sucesso!";
        } else {
            echo "Erro ao inserir o registro!";
        }
    } else {
        echo "Preencha todos os campos!";
    }
}
?>

<h3>Adicionar Fornecedor</h3>
<form action="" method="POST">
    <div class="row">
        <div class="col">
            <label for="nome_fornecedor" class="form-label">Informe o nome</label>
            <input type="text" class="form-control" name="nome_fornecedores" required>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="tiposervico" class="form-label">Informe o tipo de serviço</label>
            <input type="text" class="form-control" name="tiposervico" required>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="contato" class="form-label">Informe o contato</label>
            <input type="text" class="form-control" name="contato" required>
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
