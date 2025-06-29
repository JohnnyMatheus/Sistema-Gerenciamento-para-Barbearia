<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<div class="container mt-4">
    <h2>Editar Produto</h2>
    <form method="post" action="/produtos/update/<?= $produto['codprod'] ?>">
        <div class="mb-3">
            <label>Nome do Produto</label>
            <input type="text" name="nomeprod" class="form-control" value="<?= $produto['nomeprod'] ?>" required>
        </div>
        <div class="mb-3">
            <label>Descrição</label>
            <input type="text" name="descprod" class="form-control" value="<?= $produto['descprod'] ?>">
        </div>
        <div class="mb-3">
            <label>Quantidade</label>
            <input type="number" name="qtdprod" class="form-control" value="<?= $produto['qtdprod'] ?>" required>
        </div>
        <div class="mb-3">
            <label>Preço</label>
            <input type="number" step="0.01" name="precoprod" class="form-control" value="<?= $produto['precoprod'] ?>" required>
        </div>
        <div class="mb-3">
            <label>Fornecedor</label>
            <select name="fornecedorcodforn" class="form-control">
                <option value="">Selecione</option>
                <?php foreach($fornecedores as $f): ?>
                    <option value="<?= $f['codforn'] ?>" <?= $f['codforn']==$produto['fornecedorcodforn']?'selected':'' ?>>
                        <?= $f['nomeforn'] ?>
                    </option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="mb-3">
            <label>Serviço Relacionado</label>
            <select name="servicocodserv" class="form-control">
                <option value="">Selecione</option>
                <?php foreach($servicos as $s): ?>
                    <option value="<?= $s['codserv'] ?>" <?= $s['codserv']==$produto['servicocodserv']?'selected':'' ?>>
                        <?= $s['nomeserv'] ?>
                    </option>
                <?php endforeach ?>
            </select>
        </div>
        <button class="btn btn-success">Atualizar</button>
        <a class="btn btn-secondary" href="/produtos">Cancelar</a>
    </form>
</div>
<?= $this->endSection() ?>
