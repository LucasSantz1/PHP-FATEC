<?php
require_once("../cabecalho.php");

?>

<h3>Gerenciamento de Eventos</h3>

<a href="inserir_eventos.php" class="btn btn-primary mt-3">Adicionar Evento</a>

<table class="mt-3 table table-hover table-striped">
    <thead>
        <tr>
            <th>Data do Evento</th>
            <th>Local</th>
            <th>ID do Cliente</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // Chamo a função listarEventos() para retornar todos os registros da tabela Eventos
        $linhas = listarEventos();
        // Utilizo esse laço para que a variável $l receba a cada passo uma linha da tabela Eventos
        while ($l = $linhas->fetch(PDO::FETCH_ASSOC)) {
        ?>
        <tr>
            <td><?= $l['dataevento'] ?></td>
            <td><?= $l['local'] ?></td>
            <td><?= $l['cliente_evento_id'] ?></td>
            <td>
                <a href="alterar_eventos.php?id=<?= $l['id'] ?>" class="btn btn-warning">Alterar</a>
                <a href="excluir_eventos.php?id=<?= $l['id'] ?>" class="btn btn-danger">Excluir</a>
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
