<?php
require_once("../cabecalho.php");

session_start(); // Inicie a sessão

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $_SESSION['id'] = $id;
} else {
    if (isset($_SESSION['id'])) {
        $id = $_SESSION['id'];
    } else {
        echo "ID do evento não definido.";
        exit;
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (excluirEvento($id)) {
        echo "Registro excluído com sucesso!";
    } else {
        echo "Erro ao excluir o registro!";
    }
}
?>

<h3>Excluir Evento</h3>
<form action="" method="POST">
    <p>Tem certeza de que deseja excluir este evento?</p>
    <button type="submit" class="btn btn-danger">Excluir</button>
    <a href="pagina_anterior.php" class="btn btn-secondary">Cancelar</a>
</form>

<?php
require_once("../rodape.html");
?>
