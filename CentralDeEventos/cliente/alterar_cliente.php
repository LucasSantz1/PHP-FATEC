<?php
require_once("../cabecalho.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];

    // Validação básica dos campos
    if ($telefone != "" && $email != "") {
        // Chama a função para alterar o cliente
        if (alterarCliente($_SESSION['id'], $telefone, $email)) {
            echo "Cliente alterado com sucesso!";
        } else {
            echo "Erro ao alterar o cliente!";
        }
    } else {
        echo "Preencha todos os campos!";
    }
}

$dados = consultarClientePorId($id); // Substitua pela sua função de consulta
?>

<h3>Alterar Cliente</h3>
<form action="" method="POST">
    <div class="row">
        <div class="col">
            <label for="telefone" class="form-label">Informe o telefone</label>
            <input type="text" class="form-control" name="telefone" 
                value="<?= htmlspecialchars($dados['telefone']) ?>">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="email" class="form-label">Informe o email</label>
            <input type="email" class="form-control" name="email" 
                value="<?= htmlspecialchars($dados['email']) ?>">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-success">
                Salvar
            </button>
        </div>
    </div>
</form>

<?php require_once("../rodape.html"); ?>


