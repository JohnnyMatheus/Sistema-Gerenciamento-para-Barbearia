<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<div class="container mt-4">
    <h2>Editar Serviço</h2>
    <form method="post" action="/servicos/update/<?= $servico['codserv'] ?>">
        <div class="mb-3">
            <label>Nome do Serviço</label>
            <input type="text" name="nomeserv" class="form-control" value="<?= $servico['nomeserv'] ?>" required>
        </div>
        <div class="mb-3">
            <label>Descrição</label>
            <input type="text" name="descserv" class="form-control" value="<?= $servico['descserv'] ?>">
        </div>
        <div class="mb-3">
            <label>Preço</label>
            <input type="number" step="0.01" name="precoserv" class="form-control" value="<?= $servico['precoserv'] ?>" required>
        </div>
        <button class="btn btn-success">Atualizar</button>
        <a class="btn btn-secondary" href="/servicos">Cancelar</a>
    </form>
</div>
<?= $this->endSection() ?>
