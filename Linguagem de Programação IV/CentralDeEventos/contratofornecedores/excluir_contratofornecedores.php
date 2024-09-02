<?php
require_once("../cabecalho.php");

session_start(); // Inicie a sessão

if (isset($_GET['dataassinatura']) && isset($_GET['fornecedor'])) {
    $dataassinatura = $_GET['dataassinatura'];
    $fornecedor = $_GET['fornecedor'];
    $_SESSION['dataassinatura'] = $dataassinatura;
    $_SESSION['fornecedor'] = $fornecedor;
} else {
    if (isset($_SESSION['dataassinatura']) && isset($_SESSION['fornecedor'])) {
        $dataassinatura = $_SESSION['dataassinatura'];
        $fornecedor = $_SESSION['fornecedor'];
    } else {
        echo "Data de assinatura ou fornecedor não definidos.";
        exit;
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (excluirContrato($dataassinatura, $fornecedor)) {
        echo "Registro excluído com sucesso!";
    } else {
        echo "Erro ao excluir o registro!";
    }
}
?>

<h3>Excluir Contrato</h3>
<form action="" method="POST">
    <p>Tem certeza de que deseja excluir este contrato?</p>
    <button type="submit" class="btn btn-danger">Excluir</button>
    <a href="pagina_anterior.php" class="btn btn-secondary">Cancelar</a>
</form>

<?php
require_once("../rodape.html");
?>
