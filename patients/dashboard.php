<?php
require_once __DIR__ . "/../autoload.php";

 $loggedIn = isset($_SESSION['email']); 


$sql = "SELECT * FROM patients";
$stmt = $pdo->query($sql);

if (isset($_GET['search-term']) && !empty($_GET['search-term'])) {
    $searchTerm = strtolower($_GET['search-term']);
    $sql = "SELECT patients.* 
    FROM patients 
    WHERE 
        LOWER(patients.id) LIKE :searchterm
        
        ";

    $stmt = $pdo->prepare($sql);
    $stmt->execute(['searchterm' => "%$searchTerm%"]);
} else {
    $sql = "SELECT patients.*
        FROM patients ";
    $stmt = $pdo->query($sql);
}


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
    <div class="center">

        <a href="<?= APP_URL ?>/clinic/patients/add.php" class="addBtn">Add new patient</a>
        <a href="../auth/logout.php" class="addBtn">Logout</a>

        <form class="" method="GET" action="dashboard.php">

            <input name="search-term" class="inputSearch" type="search" placeholder="Search" aria-label="Search"
                value="<?= isset($_GET['search-term']) ? $_GET['search-term'] : '' ?>">
            <button class="searchBtn" type="submit">Search</button>
        </form>


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