<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<div class="container mt-4">
    <h2>Pagamentos</h2>
    <a class="btn btn-success mb-3" href="/pagamentos/create">Novo Pagamento</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Valor</th>
                <th>Data/Hora</th>
                <th>Forma</th>
                <th>Cliente</th>
                <th>Agendamento</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pagamentos as $p): ?>
            <tr>
                <td>R$ <?= number_format($p['valor'], 2, ',', '.') ?></td>
                <td><?= date('d/m/Y H:i', strtotime($p['data_hora_pagamento'])) ?></td>
                <td><?= $p['forma_pagamento'] ?></td>
                <td><?= $p['nomcli'] ?></td>
                <td><?= date('d/m/Y H:i', strtotime($p['data_hora'])) ?></td>
                <td>
                    <a class="btn btn-primary btn-sm" href="/pagamentos/edit/<?= $p['codpag'] ?>">Editar</a>
                    <a class="btn btn-danger btn-sm" href="/pagamentos/delete/<?= $p['codpag'] ?>"
                       onclick="return confirm('Confirma excluir?')">Excluir</a>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>
