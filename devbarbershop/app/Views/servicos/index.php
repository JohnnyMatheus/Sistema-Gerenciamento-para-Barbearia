<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<div class="container mt-4">
    <h2>Serviços</h2>
    <a class="btn btn-success mb-3" href="/servicos/create">Novo Serviço</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($servicos as $s): ?>
            <tr>
                <td><?= $s['nomeserv'] ?></td>
                <td><?= $s['descserv'] ?></td>
                <td>R$ <?= number_format($s['precoserv'], 2, ',', '.') ?></td>
                <td>
                    <a class="btn btn-primary btn-sm" href="/servicos/edit/<?= $s['codserv'] ?>">Editar</a>
                    <a class="btn btn-danger btn-sm" href="/servicos/delete/<?= $s['codserv'] ?>"
                       onclick="return confirm('Confirma excluir?')">Excluir</a>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>
