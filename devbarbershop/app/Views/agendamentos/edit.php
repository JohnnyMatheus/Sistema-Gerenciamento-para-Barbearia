<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<div class="container mt-4">
    <h2>Editar Agendamento</h2>
    <form method="post" action="/agendamentos/update/<?= $agendamento['codagen'] ?>">
        <div class="mb-3">
            <label>Data/Hora</label>
            <input type="datetime-local" name="data_hora" class="form-control" 
                   value="<?= date('Y-m-d\TH:i', strtotime($agendamento['data_hora'])) ?>" required>
        </div>
        <div class="mb-3">
            <label>Status</label>
            <select name="status" class="form-control">
                <option <?= $agendamento['status']=='Pendente'?'selected':'' ?>>Pendente</option>
                <option <?= $agendamento['status']=='Confirmado'?'selected':'' ?>>Confirmado</option>
                <option <?= $agendamento['status']=='Cancelado'?'selected':'' ?>>Cancelado</option>
            </select>
        </div>
        <div class="mb-3">
            <label>Cliente</label>
            <select name="clientecodcli" class="form-control" required>
                <?php foreach($clientes as $c): ?>
                    <option value="<?= $c['codcli'] ?>" <?= $c['codcli']==$agendamento['clientecodcli']?'selected':'' ?>>
                        <?= $c['nomcli'] ?>
                    </option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="mb-3">
            <label>Funcionário</label>
            <select name="funcionariocodfun" class="form-control" required>
                <?php foreach($funcionarios as $f): ?>
                    <option value="<?= $f['codfun'] ?>" <?= $f['codfun']==$agendamento['funcionariocodfun']?'selected':'' ?>>
                        <?= $f['nomefun'] ?>
                    </option>
                <?php endforeach ?>
            </select>
        </div>
        <button class="btn btn-success">Atualizar</button>
        <a class="btn btn-secondary" href="/agendamentos">Cancelar</a>
    </form>
</div>
<?= $this->endSection() ?>
