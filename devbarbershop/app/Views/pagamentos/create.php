<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<div class="container mt-4">
    <h2>Novo Pagamento</h2>
    <form method="post" action="/pagamentos/store">
        <div class="mb-3">
            <label>Valor</label>
            <input type="number" step="0.01" name="valor" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Data/Hora do Pagamento</label>
            <input type="datetime-local" name="data_hora_pagamento" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Forma de Pagamento</label>
            <select name="forma_pagamento" class="form-control">
                <option>Dinheiro</option>
                <option>Cartão</option>
                <option>PIX</option>
            </select>
        </div>
        <div class="mb-3">
            <label>Cliente</label>
            <select name="clientecodcli" class="form-control" required>
                <option value="">Selecione</option>
                <?php foreach($clientes as $c): ?>
                    <option value="<?= $c['codcli'] ?>"><?= $c['nomcli'] ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="mb-3">
            <label>Agendamento</label>
            <select name="agendamentocodagen" class="form-control" required>
                <option value="">Selecione</option>
                <?php foreach($agendamentos as $a): ?>
                    <option value="<?= $a['codagen'] ?>"><?= date('d/m/Y H:i', strtotime($a['data_hora'])) ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <button class="btn btn-success">Salvar</button>
        <a class="btn btn-secondary" href="/pagamentos">Cancelar</a>
    </form>
</div>
<?= $this->endSection() ?>
