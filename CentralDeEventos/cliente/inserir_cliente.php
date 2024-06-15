<?php
require_once("../cabecalho.php");


if ($_POST) {
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    
    if ($nome != "" && $telefone != "" && $email != "") {
        if (adicionarCliente($nome, $telefone, $email)) {
            echo "Registro inserido com sucesso!";
        } else {
            echo "Erro ao inserir o registro!";
        }
    } else {
        echo "Preencha todos os campos!";
    }
}
?>

<h3>Adicionar Cliente</h3>
<form action="" method="POST">
    <div class="row">
        <div class="col">
            <label for="nome" class="form-label">Informe o nome</label>
            <input type="text" class="form-control" name="nome" required>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="telefone" class="form-label">Informe o telefone</label>
            <input type="text" class="form-control" name="telefone" required>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="email" class="form-label">Informe o email</label>
            <input type="text" class="form-control" name="email" required>
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
