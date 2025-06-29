<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<div class="container mt-4">
    <h2>Editar Cliente</h2>
    <form method="post" action="/clientes/update/<?= $cliente['codcli'] ?>">
        <div class="mb-3">
            <label>Nome</label>
            <input type="text" name="nomcli" class="form-control" value="<?= $cliente['nomcli'] ?>" required>
        </div>
        <div class="mb-3">
            <label>Telefone</label>
            <input type="text" name="telcli" class="form-control" value="<?= $cliente['telcli'] ?>" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="emailcli" class="form-control" value="<?= $cliente['emailcli'] ?>" required>
        </div>
        <div class="mb-3">
            <label>Bairro</label>
            <input type="text" name="bairrocli" class="form-control" value="<?= $cliente['bairrocli'] ?>" required>
        </div>
        <div class="mb-3">
            <label>Rua</label>
            <input type="text" name="ruaendcli" class="form-control" value="<?= $cliente['ruaendcli'] ?>" required>
        </div>
        <div class="mb-3">
            <label>Sexo</label>
            <select name="sexocli" class="form-control">
                <option <?= $cliente['sexocli']=='Masculino'?'selected':'' ?>>Masculino</option>
                <option <?= $cliente['sexocli']=='Feminino'?'selected':'' ?>>Feminino</option>
            </select>
        </div>
        <div class="mb-3">
            <label>Cidade</label>
            <input type="text" name="cidadecli" class="form-control" value="<?= $cliente['cidadecli'] ?>" required>
        </div>
        <div class="mb-3">
            <label>Data de Nascimento</label>
            <input type="date" name="dtnascli" class="form-control" value="<?= $cliente['dtnascli'] ?>" required>
        </div>
        <button class="btn btn-success">Atualizar</button>
        <a class="btn btn-secondary" href="/clientes">Cancelar</a>
    </form>
</div>
<?= $this->endSection() ?>
