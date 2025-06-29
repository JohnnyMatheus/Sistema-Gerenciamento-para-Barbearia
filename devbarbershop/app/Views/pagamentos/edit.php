<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<div class="container mt-4">
    <h2>Editar Pagamento</h2>
    <form method="post" action="/pagamentos/update/<?= $pagamento['codpag'] ?>">
        <div class="mb-3">
            <label>Valor</label>
            <input type="number" step="0.01" name="valor" class="form-control" value="<?= $pagamento['valor'] ?>" required>
        </div>
        <div class="mb-3">
            <label>Data/Hora do Pagamento</label>
            <input type="datetime-local" name="data_hora_pagamento" class="form-control" 
                   value="<?= date('Y-m-d\TH:i', strtotime($pagamento['data_hora_pagamento'])) ?>" required>
        </div>
        <div class="mb-3">
            <label>Forma de Pagamento</label>
            <select name="forma_pagamento" class="form-control">
                <option <?= $pagamento['forma_pagamento']=='Dinheiro'?'selected':'' ?>>Dinheiro</option>
                <option <?= $pagamento['forma_pagamento']=='Cartão'?'selected':'' ?>>Cartão</option>
                <option <?= $pagamento['forma_pagamento']=='PIX'?'selected':'' ?>>PIX</option>
            </select>
        </div>
        <div class="mb-3">
            <label>Cliente</label>
            <select name="clientecodcli" class="form-control" required>
                <?php foreach($clientes as $c): ?>
                    <option value="<?= $c['codcli'] ?>" <?= $c['codcli']==$pagamento['clientecodcli']?'selected':'' ?>>
                        <?= $c['nomcli'] ?>
                    </option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="mb-3">
            <label>Agendamento</label>
            <select name="agendamentocodagen" class="form-control" required>
                <?php foreach($agendamentos as $a): ?>
                    <option value="<?= $a['codagen'] ?>" <?= $a['codagen']==$pagamento['agendamentocodagen']?'selected':'' ?>>
                        <?= date('d/m/Y H:i', strtotime($a['data_hora'])) ?>
                    </option>
                <?php endforeach ?>
            </select>
        </div>
        <button class="btn btn-success">Atualizar</button>
        <a class="btn btn-secondary" href="/pagamentos">Cancelar</a>
    </form>
</div>
<?= $this->endSection() ?>
