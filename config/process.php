<?php

session_start();

include("conn.php");
include("url.php");

$id;

if (!empty($_GET)) {
    $id = $_GET["id"];
}

/* Retorna o dado de um contato */

if (!empty($id)) {

    $query = "SELECT * FROM contatos WHERE id = $id";

    $stmt = $conn->prepare($query);

 
    $stmt->execute();

    $contatos = $stmt->fetch();

} else {

    /* Retorno todos os contatos */

    $contatos = [];

    $query = "SELECT * FROM contatos";

    $stmt = $conn->prepare($query);

    $stmt->execute();
    $contatos = $stmt->fetchAll();
}
