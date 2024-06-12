<?php
include_once("templates/header.php");
?>

<div class="container" id="view-contact-container">
    <?php include_once("templates/backbtn.php") ?>
    <h1 id="main-title"><?= $contatos['nome'] ?></h1>
    <p class="bold">Telefone:</p>
    <p><?=$contatos["telefone"] ?></p>
    <p class="bold">Observa&ccedil;&otilde;es</p>
    <p><?=$contatos["observacoes"] ?></p>
</div>

<?php
include_once("templates/footer.php");
?>
