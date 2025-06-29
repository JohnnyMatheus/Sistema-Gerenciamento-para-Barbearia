<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<div class="container mt-4">
    <h2>Produtos</h2>
    <a class="btn btn-success mb-3" href="/produtos/create">Novo Produto</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Quantidade</th>
                <th>Preço</th>
                <th>Fornecedor</th>
                <th>Serviço Relacionado</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($produtos as $p): ?>
            <tr>
                <td><?= $p['nomeprod'] ?></td>
                <td><?= $p['descprod'] ?></td>
                <td><?= $p['qtdprod'] ?></td>
                <td>R$ <?= number_format($p['precoprod'], 2, ',', '.') ?></td>
                <td><?= $p['nomeforn'] ?? ' - ' ?></td>
                <td><?= $p['nomeserv'] ?? ' - ' ?></td>
                <td>
                    <a class="btn btn-primary btn-sm" href="/produtos/edit/<?= $p['codprod'] ?>">Editar</a>
                    <a class="btn btn-danger btn-sm" href="/produtos/delete/<?= $p['codprod'] ?>"
                       onclick="return confirm('Confirma excluir?')">Excluir</a>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>
