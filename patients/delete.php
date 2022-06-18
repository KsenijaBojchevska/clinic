<?php
require_once __DIR__ . "/../autoload.php";
authOnly();

$id = decrypt($_GET['id']);



$sql = "DELETE FROM patients WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute(['id' => $id]);

header("Location: dashboard.php");
die();