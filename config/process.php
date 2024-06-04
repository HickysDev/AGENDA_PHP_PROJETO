<?php

session_start();

include("conn.php");
include("url.php");

$query = "SELECT * FROM contatos";

$stmt = $conn->prepare($query);

$stmt->execute();
$contatos = $stmt->fetchAll();