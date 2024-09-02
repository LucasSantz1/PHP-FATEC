<?php
require_once("../cabecalho.php");

?>

<h3>Gerenciamento de Contratos de Fornecedores</h3>

<a href="inserir_contratofornecedores.php" class="btn btn-primary mt-3">Adicionar Contrato</a>

<table class="mt-3 table table-hover table-striped">
    <thead>
        <tr>
            <th>Data de Assinatura</th>
            <th>Fornecedor</th>
            <th>ID do Fornecedor</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // Chamo a função listarContratos() para retornar todos os registros da tabela contrato
        $linhas = listarContratos();
        // Utilizo esse laço para que a variável $l receba a cada passo uma linha da tabela contrato
        while ($l = $linhas->fetch(PDO::FETCH_ASSOC)) {
        ?>
        <tr>
            <td><?= $l['dataassinatura'] ?></td>
            <td><?= $l['fornecedor'] ?></td>
            <td><?= $l['fornecedores_id'] ?></td>
            <td>
                <a href="alterar_contrato.php?dataassinatura=<?= $l['dataassinatura'] ?>&fornecedor=<?= $l['fornecedor'] ?>" class="btn btn-warning">Alterar</a>
                <a href="excluir_contrato.php?dataassinatura=<?= $l['dataassinatura'] ?>&fornecedor=<?= $l['fornecedor'] ?>" class="btn btn-danger">Excluir</a>
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
