<?php
require_once("../cabecalho.php");

?>

<h3>Gerenciamento de Fornecedores</h3>

<a href="inserir_fornecedores.php" class="btn btn-primary mt-3">Adicionar Fornecedor</a>

<table class="mt-3 table table-hover table-striped">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Tipo de Serviço</th>
            <th>Contato</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // Chamo a função listarFornecedores() para retornar todos os registros da tabela fornecedores
        $linhas = listarFornecedores();
        // Utilizo esse laço para que a variável $l receba a cada passo uma linha da tabela fornecedores
        while ($l = $linhas->fetch(PDO::FETCH_ASSOC)) {
        ?>
        <tr>
            <td><?= $l['nome'] ?></td>
            <td><?= $l['tiposervico'] ?></td>
            <td><?= $l['contato'] ?></td>
            <td>
                <a href="alterar_fornecedores.php?id=<?= $l['id'] ?>" class="btn btn-warning">Alterar</a>
                <a href="excluir_fornecedores.php?id=<?= $l['id'] ?>" class="btn btn-danger">Excluir</a>
            </td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>

<?php
require_once("../rodape.html");
?>
