<?php
require_once("../cabecalho.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    session_start();
    $_SESSION['id'] = $id;
} else {
    $id = $_SESSION['id'];
}

if ($_POST) {
    if (excluirCliente($id)) {
        echo "Registro excluído com sucesso!";
    } else {
        echo "Erro ao excluir o registro!";
    }
}
?>

<h3>Excluir Cliente</h3>
<form action="" method="POST">
    <p>Tem certeza de que deseja excluir este cliente?</p>
    <button type="submit" class="btn btn-danger">Excluir</button>
    <a href="pagina_anterior.php" class="btn btn-secondary">Cancelar</a>
</form>

<?php
require_once("../rodape.html");
?>
