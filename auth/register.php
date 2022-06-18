<?php
require_once __DIR__ . "/../db.php";



$password = password_hash($_POST['password'], PASSWORD_BCRYPT);

$sql = "INSERT INTO users(email, password) VALUES (:email, :password)";
$stmt = $pdo->prepare($sql);
if ($stmt->execute(['email' => $_POST['email'], 'password' => $password])) {
    header("Location: index.php?status=success");
    die();
}

header("Location: index.php?status=error");