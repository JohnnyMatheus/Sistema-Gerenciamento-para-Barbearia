<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<div class="container mt-4">
    <h2>Editar Histórico de Serviço</h2>
    <form method="post" action="/historicos/update/<?= $historico['codhistorico'] ?>">
        <div class="mb-3">
            <label>Data/Hora</label>
            <input type="datetime-local" name="data_hora" class="form-control" 
                   value="<?= date('Y-m-d\TH:i', strtotime($historico['data_hora'])) ?>" required>
        </div>
        <div class="mb-3">
            <label>Serviço</label>
            <select name="servicocodserv" class="form-control" required>
                <?php foreach($servicos as $s): ?>
                    <option value="<?= $s['codserv'] ?>" <?= $s['codserv']==$historico['servicocodserv']?'selected':'' ?>>
                        <?= $s['nomeserv'] ?>
                    </option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="mb-3">
            <label>Cliente</label>
            <select name="clientecodcli" class="form-control" required>
                <?php foreach($clientes as $c): ?>
                    <option value="<?= $c['codcli'] ?>" <?= $c['codcli']==$historico['clientecodcli']?'selected':'' ?>>
                        <?= $c['nomcli'] ?>
                    </option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="mb-3">
            <label>Funcionário</label>
            <select name="funcionariocodfun" class="form-control" required>
                <?php foreach($funcionarios as $f): ?>
                    <option value="<?= $f['codfun'] ?>" <?= $f['codfun']==$historico['funcionariocodfun']?'selected':'' ?>>
                        <?= $f['nomefun'] ?>
                    </option>
                <?php endforeach ?>
            </select>
        </div>
        <button class="btn btn-success">Atualizar</button>
        <a class="btn btn-secondary" href="/historicos">Cancelar</a>
    </form>
</div>
<?= $this->endSection() ?>
