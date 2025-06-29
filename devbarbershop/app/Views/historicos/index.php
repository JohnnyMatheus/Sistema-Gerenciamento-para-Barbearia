<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<div class="container mt-4">
    <h2>Histórico de Serviços</h2>
    <a class="btn btn-success mb-3" href="/historicos/create">Novo Registro</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Data/Hora</th>
                <th>Serviço</th>
                <th>Cliente</th>
                <th>Funcionário</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($historicos as $h): ?>
            <tr>
                <td><?= date('d/m/Y H:i', strtotime($h['data_hora'])) ?></td>
                <td><?= $h['nomeserv'] ?></td>
                <td><?= $h['nomcli'] ?></td>
                <td><?= $h['nomefun'] ?></td>
                <td>
                    <a class="btn btn-primary btn-sm" href="/historicos/edit/<?= $h['codhistorico'] ?>">Editar</a>
                    <a class="btn btn-danger btn-sm" href="/historicos/delete/<?= $h['codhistorico'] ?>"
                       onclick="return confirm('Confirma excluir?')">Excluir</a>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>
