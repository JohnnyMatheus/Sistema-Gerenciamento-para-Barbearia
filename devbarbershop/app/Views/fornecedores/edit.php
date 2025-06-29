<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<div class="container mt-4">
    <h2>Editar Fornecedor</h2>
    <form method="post" action="/fornecedores/update/<?= $fornecedor['codforn'] ?>">
        <div class="mb-3">
            <label>Nome</label>
            <input type="text" name="nomeforn" class="form-control" value="<?= $fornecedor['nomeforn'] ?>" required>
        </div>
        <div class="mb-3">
            <label>Telefone</label>
            <input type="text" name="telforn" class="form-control" value="<?= $fornecedor['telforn'] ?>">
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="emailforn" class="form-control" value="<?= $fornecedor['emailforn'] ?>">
        </div>
        <div class="mb-3">
            <label>Endereço</label>
            <input type="text" name="enderecoforn" class="form-control" value="<?= $fornecedor['enderecoforn'] ?>">
        </div>
        <button class="btn btn-success">Atualizar</button>
        <a class="btn btn-secondary" href="/fornecedores">Cancelar</a>
    </form>
</div>
<?= $this->endSection() ?>
