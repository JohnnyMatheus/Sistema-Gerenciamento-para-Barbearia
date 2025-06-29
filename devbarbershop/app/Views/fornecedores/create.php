<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<div class="container mt-4">
    <h2>Novo Fornecedor</h2>
    <form method="post" action="/fornecedores/store">
        <div class="mb-3">
            <label>Nome</label>
            <input type="text" name="nomeforn" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Telefone</label>
            <input type="text" name="telforn" class="form-control">
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="emailforn" class="form-control">
        </div>
        <div class="mb-3">
            <label>Endereço</label>
            <input type="text" name="enderecoforn" class="form-control">
        </div>
        <button class="btn btn-success">Salvar</button>
        <a class="btn btn-secondary" href="/fornecedores">Cancelar</a>
    </form>
</div>
<?= $this->endSection() ?>
