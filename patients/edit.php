<?php

require_once __DIR__ . "/../autoload.php";
authOnly();


$id = decrypt($_GET['id']);

$sql = "SELECT * FROM patients WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute(['id' => $id]);

if ($stmt->rowCount() == 0) {
    header("Location: dashboard.php");
    die();
}

$patient = $stmt->fetch();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>

    <form method="POST" action="update.php">
        <h3>
            Update patient
        </h3>
        <input type="hidden" name="id" value="<?= encrypt($id) ?>" />
        <label>Name</label><br />
        <input type="text" name="name" value="<?= $patient['name'] ?>" /><br />
        <label>Email</label><br />
        <input type="text" name="email" value="<?= $patient['email'] ?>" /><br />
        <label>Phone number</label><br />
        <input type="text" name="phoneNumber" value="<?= $patient['phoneNumber'] ?>" /><br />
        <label>Adress</label><br />
        <input type="text" name="address" value="<?= $patient['address'] ?>" /><br />
        <label> Medical condition</label><br />
        <input type="text" name=" medicalCondition" value="<?= $patient['medicalCondition'] ?>" /><br />
        <label> Blood type</label><br />
        <input type="text" name=" bloodType" value="<?= $patient['bloodType'] ?>" /><br />



        <br />
        <br />

        <button class="updateBtn">Update</button>
    </form>
</body>

</html>