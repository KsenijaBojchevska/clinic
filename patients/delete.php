<?php

require_once __DIR__ . "/../db.php";
require_once __DIR__ . "/../functions.php";

$id = decrypt($_GET['id']);



$sql = "DELETE FROM patients WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute(['id' => $id]);

header("Location: dashboard.php");
die();