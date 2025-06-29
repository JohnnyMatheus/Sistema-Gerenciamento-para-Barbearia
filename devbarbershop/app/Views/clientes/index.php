<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<div class="container mt-4">
    <h2>Clientes</h2>
    <a class="btn btn-success mb-3" href="/clientes/create">Novo Cliente</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Email</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clientes as $c): ?>
            <tr>
                <td><?= $c['nomcli'] ?></td>
                <td><?= $c['telcli'] ?></td>
                <td><?= $c['emailcli'] ?></td>
                <td>
                    <a class="btn btn-primary btn-sm" href="/clientes/edit/<?= $c['codcli'] ?>">Editar</a>
                    <a class="btn btn-danger btn-sm" href="/clientes/delete/<?= $c['codcli'] ?>"
                       onclick="return confirm('Confirma excluir?')">Excluir</a>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>
