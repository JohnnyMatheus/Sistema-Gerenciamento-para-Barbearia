<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<div class="container mt-4">
    <h2>Agendamentos</h2>
    <a class="btn btn-success mb-3" href="/agendamentos/create">Novo Agendamento</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Data/Hora</th>
                <th>Status</th>
                <th>Cliente</th>
                <th>Funcionário</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($agendamentos as $a): ?>
            <tr>
                <td><?= date('d/m/Y H:i', strtotime($a['data_hora'])) ?></td>
                <td><?= $a['status'] ?></td>
                <td><?= $a['nomcli'] ?></td>
                <td><?= $a['nomefun'] ?></td>
                <td>
                    <a class="btn btn-primary btn-sm" href="/agendamentos/edit/<?= $a['codagen'] ?>">Editar</a>
                    <a class="btn btn-danger btn-sm" href="/agendamentos/delete/<?= $a['codagen'] ?>"
                       onclick="return confirm('Confirma excluir?')">Excluir</a>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>
