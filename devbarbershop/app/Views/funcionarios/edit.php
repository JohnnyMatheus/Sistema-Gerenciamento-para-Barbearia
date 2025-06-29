<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<div class="container mt-4">
    <h2>Editar Funcionário</h2>
    <form method="post" action="/funcionarios/update/<?= $funcionario['codfun'] ?>">
        <div class="mb-3">
            <label>Nome</label>
            <input type="text" name="nomefun" class="form-control" value="<?= $funcionario['nomefun'] ?>" required>
        </div>
        <div class="mb-3">
            <label>Telefone</label>
            <input type="text" name="telfun" class="form-control" value="<?= $funcionario['telfun'] ?>" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="emailfun" class="form-control" value="<?= $funcionario['emailfun'] ?>" required>
        </div>
        <div class="mb-3">
            <label>Cargo</label>
            <input type="text" name="cargofun" class="form-control" value="<?= $funcionario['cargofun'] ?>" required>
        </div>
        <div class="mb-3">
            <label>Salário</label>
            <input type="number" step="0.01" name="salariofun" class="form-control" value="<?= $funcionario['salariofun'] ?>" required>
        </div>
        <button class="btn btn-success">Atualizar</button>
        <a class="btn btn-secondary" href="/funcionarios">Cancelar</a>
    </form>
</div>
<?= $this->endSection() ?>
