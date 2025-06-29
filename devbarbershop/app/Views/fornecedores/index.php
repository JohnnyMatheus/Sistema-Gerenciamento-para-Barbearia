<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<div class="container mt-4">
    <h2>Fornecedores</h2>
    <a class="btn btn-success mb-3" href="/fornecedores/create">Novo Fornecedor</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Email</th>
                <th>Endereço</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($fornecedores as $f): ?>
            <tr>
                <td><?= $f['nomeforn'] ?></td>
                <td><?= $f['telforn'] ?></td>
                <td><?= $f['emailforn'] ?></td>
                <td><?= $f['enderecoforn'] ?></td>
                <td>
                    <a class="btn btn-primary btn-sm" href="/fornecedores/edit/<?= $f['codforn'] ?>">Editar</a>
                    <a class="btn btn-danger btn-sm" href="/fornecedores/delete/<?= $f['codforn'] ?>"
                       onclick="return confirm('Confirma excluir?')">Excluir</a>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>
