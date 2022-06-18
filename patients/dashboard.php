<?php
require_once __DIR__ . "/../autoload.php";
$loggedIn = isset($_SESSION['email']);


$sql = "SELECT * FROM patients";
$stmt = $pdo->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
    <!--  <style>
    td {
        border: 1px solid black;
        padding: 10px;
    }
    </style> -->
</head>

<body>
    <div class="center">

        <a href="<?= APP_URL ?>/clinic/patients/add.php" class="addBtn">Add new patient</a>
        <a href="../auth/logout.php" class="addBtn">Logout</a>

        <div class="container">
            <table class="tablePatients">
                <thead>
                    <tr>
                        <td>Name</td>
                        <td>Email</td>
                        <td>Phone number</td>
                        <td>Address</td>
                        <td>Medical condition</td>
                        <td>Blood type</td>
                        <td>Actions</td>

                    </tr>
                </thead>
                <tbody>
                    <?php
            if ($stmt->rowCount() == 0) {
                echo "<tr><td colspan='7'>No patients yet</td></tr>";
            } else {
                while ($patient = $stmt->fetch()) {
                    $id = encrypt($patient['id']);
                    $id = urlencode($id);
                    echo "<tr>
                        <td>{$patient['name']}</td>
                        <td>{$patient['email']}</td>
                        <td>{$patient['phoneNumber']}</td>
                        <td>{$patient['address']}</td>
                        <td>{$patient['medicalCondition']}</td>
                        <td>{$patient['bloodType']}</td>
                        <td>
                           
                            <a href='edit.php?id={$id}'>Edit</a>
                            <a href='delete.php?id={$id}'>Delete</a>
                            
                        </td>
                    </tr>";
                }
            }
            ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>