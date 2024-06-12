<?php
include_once ("templates/header.php");
?>


<div class="container">
    <?php include_once ("templates/backbtn.php") ?>
    <h1 id="main-title">Alterar Contato</h1>
    <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
        <input type="hidden" name="type" value="edit">
        <input type="hidden" name="id" value="<?= $contatos["id"]?>">
        <div class="form-group">
            <label for="name">Nome do contato: </label>
            <input type="text" class="form-control" id="name" name="nome" placeholder="Digite o nome..." required value="<?= $contatos["nome"]?>">
        </div>
        <div class="form-group">
            <label for="phone">N&deg; do telefone: </label>
            <input type="text" class="form-control" id="phone" name="telefone" placeholder="Digite o telefone..."
                required value="<?= $contatos["telefone"]?>">
        </div>
        <div class="form-group">
            <label for="observations">Observa&ccedil;&otilde;es: </label>
            <textarea type="text" class="form-control" id="observations" name="observacoes"
                placeholder="Insira as observa&ccedil;&otilde;es..." required rows="3" ><?= $contatos["observacoes"]?></textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-margem">Atualizar</button>
    </form>
</div>

<?php
include_once ("templates/footer.php");
?>