<?php
require_once __DIR__ . "/../autoload.php";
authOnly();


$sql = "UPDATE patients
SET `name` = :name,
`email` = :email,
`phoneNumber` = :phoneNumber,
`address` = :address,
`medicalCondition` = :medicalCondition,
`bloodType` = :bloodType
WHERE `id` = :id";

$stmt = $pdo->prepare($sql);
if ($stmt->execute([
'name' => $_POST['name'],
'email' => $_POST['email'],
'phoneNumber' => $_POST['phoneNumber'],
'address' => $_POST['address'],
'phoneNumber' => $_POST['phoneNumber'],
'medicalCondition' => $_POST['medicalCondition'],
'bloodType' => $_POST['bloodType'],
'id' => decrypt(urldecode($_POST['id']))
]));

header("Location: dashboard.php");
die();