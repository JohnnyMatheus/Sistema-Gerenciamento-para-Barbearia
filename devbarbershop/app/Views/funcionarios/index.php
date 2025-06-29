<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<div class="container mt-4">
    <h2>Funcionários</h2>
    <a class="btn btn-success mb-3" href="/funcionarios/create">Novo Funcionário</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Email</th>
                <th>Cargo</th>
                <th>Salário</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($funcionarios as $f): ?>
            <tr>
                <td><?= $f['nomefun'] ?></td>
                <td><?= $f['telfun'] ?></td>
                <td><?= $f['emailfun'] ?></td>
                <td><?= $f['cargofun'] ?></td>
                <td>R$ <?= number_format($f['salariofun'], 2, ',', '.') ?></td>
                <td>
                    <a class="btn btn-primary btn-sm" href="/funcionarios/edit/<?= $f['codfun'] ?>">Editar</a>
                    <a class="btn btn-danger btn-sm" href="/funcionarios/delete/<?= $f['codfun'] ?>"
                       onclick="return confirm('Confirma excluir?')">Excluir</a>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>
