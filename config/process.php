<?php

session_start();

include ("conn.php");
include ("url.php");

$data = $_POST;

if (!empty($data)) {

    $nome = $data["nome"];
    $telefone = $data["telefone"];
    $obs = $data["observacoes"];

    if ($data["type"] === "create") {

        $sql = "INSERT INTO contatos (nome, telefone, observacoes) VALUES ('$nome', '$telefone', '$obs')";

        $stmt = $conn->prepare($sql);

        try {
            $stmt->execute();
            $_SESSION["msg"] = "Contato criado com sucesso";

            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            $erro = $e->getMessage();
            echo "erro $erro";
        }
    } elseif ($data["type"] === "edit") {

        $id = $data["id"];

        $sql = "UPDATE contatos SET nome = '$nome', telefone = '$telefone', observacoes = '$obs' WHERE id = $id ";
        $stmt = $conn->prepare($sql);

        try {
            $stmt->execute();
            $_SESSION["msg"] = "Contato editado com sucesso";

            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            $erro = $e->getMessage();
            echo "erro $erro";
        }
    }

    // Redireciona para home
    header("Location: " . $BASE_URL . "../index.php");

} else {
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

}

// Fechando conexao
$conn = null;