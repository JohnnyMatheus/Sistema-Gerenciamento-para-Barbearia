<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<div class="container mt-4">
    <h2>Novo Serviço</h2>
    <form method="post" action="/servicos/store">
        <div class="mb-3">
            <label>Nome do Serviço</label>
            <input type="text" name="nomeserv" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Descrição</label>
            <input type="text" name="descserv" class="form-control">
        </div>
        <div class="mb-3">
            <label>Preço</label>
            <input type="number" step="0.01" name="precoserv" class="form-control" required>
        </div>
        <button class="btn btn-success">Salvar</button>
        <a class="btn btn-secondary" href="/servicos">Cancelar</a>
    </form>
</div>
<?= $this->endSection() ?>
