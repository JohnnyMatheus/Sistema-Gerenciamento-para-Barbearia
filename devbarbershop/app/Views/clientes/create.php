<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<div class="container mt-4">
    <h2>Novo Cliente</h2>
    <form method="post" action="/clientes/store">
        <div class="mb-3">
            <label>Nome</label>
            <input type="text" name="nomcli" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Telefone</label>
            <input type="text" name="telcli" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="emailcli" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Bairro</label>
            <input type="text" name="bairrocli" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Rua</label>
            <input type="text" name="ruaendcli" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Sexo</label>
            <select name="sexocli" class="form-control">
                <option>Masculino</option>
                <option>Feminino</option>
            </select>
        </div>
        <div class="mb-3">
            <label>Cidade</label>
            <input type="text" name="cidadecli" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Data de Nascimento</label>
            <input type="date" name="dtnascli" class="form-control" required>
        </div>
        <button class="btn btn-success">Salvar</button>
        <a class="btn btn-secondary" href="/clientes">Cancelar</a>
    </form>
</div>
<?= $this->endSection() ?>
