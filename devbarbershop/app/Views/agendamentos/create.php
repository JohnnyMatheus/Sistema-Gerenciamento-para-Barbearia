<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<div class="container mt-4">
    <h2>Novo Agendamento</h2>
    <form method="post" action="/agendamentos/store">
        <div class="mb-3">
            <label>Data/Hora</label>
            <input type="datetime-local" name="data_hora" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Status</label>
            <select name="status" class="form-control">
                <option>Pendente</option>
                <option>Confirmado</option>
                <option>Cancelado</option>
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
            <label>Funcionário</label>
            <select name="funcionariocodfun" class="form-control" required>
                <option value="">Selecione</option>
                <?php foreach($funcionarios as $f): ?>
                    <option value="<?= $f['codfun'] ?>"><?= $f['nomefun'] ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <button class="btn btn-success">Salvar</button>
        <a class="btn btn-secondary" href="/agendamentos">Cancelar</a>
    </form>
</div>
<?= $this->endSection() ?>
