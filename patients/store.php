<?php

require_once __DIR__ . "/../db.php";


$sql = "INSERT INTO patients(`name`, `email`, `phoneNumber` , `address` , `medicalCondition` , `bloodType`) 
VALUES (:name, :email, :phoneNumber , :address, :medicalCondition , :bloodType)";
$stmt = $pdo->prepare($sql);

if ($stmt->execute($_POST)) {
    header("Location: dashboard.php");
    die();
}

header("Location: add.php");
die();