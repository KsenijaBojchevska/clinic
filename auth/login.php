<?php
require_once __DIR__ . "/../autoload.php";



$sql = "SELECT * FROM users WHERE email = :email";
$stmt = $pdo->prepare($sql);
$stmt->execute(['email' => $_POST['email']]);

$user = $stmt->fetch();


if (password_verify($_POST['password'], $user['password'])) {
    $_SESSION['email'] = $user['email'];
    header("Location: " . APP_URL . "/clinic/patients/dashboard.php");
    die();
}

header("Location: index.php?error=invaliduser");