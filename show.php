<?php
include_once("templates/header.php");
?>

<div class="container" id="view-contact-container">
    <h1 id="main-title"><?= $contatos['nome'] ?></h1>
    <p class="bold">Telefone:</p>
    <p><?=$contatos["telefone"] ?></p>
    <p class="bold">Observações</p>
    <p><?=$contatos["observacoes"] ?></p>
</div>

<?php
include_once("templates/footer.php");
?>
