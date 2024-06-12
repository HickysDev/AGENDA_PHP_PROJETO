<?php
include_once ("templates/header.php");
?>


<div class="container">
    <?php include_once ("templates/backbtn.php") ?>
    <h1 id="main-title">Criar Contato</h1>
    <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
        <input type="hidden" name="type" value="create">
        <div class="form-group">
            <label for="name">Nome do contato: </label>
            <input type="text" class="form-control" id="name" name="nome" placeholder="Digite o nome..." required>
        </div>
        <div class="form-group">
            <label for="phone">N&deg; do telefone: </label>
            <input type="text" class="form-control" id="phone" name="telefone" placeholder="Digite o telefone..."
                required>
        </div>
        <div class="form-group">
            <label for="observations">Observa&ccedil;&otilde;es: </label>
            <textarea type="text" class="form-control" id="observations" name="observacoes"
                placeholder="Insira as observa&ccedil;&otilde;es..." required rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-margem">Cadastrar</button>
    </form>
</div>

<?php
include_once ("templates/footer.php");
?>