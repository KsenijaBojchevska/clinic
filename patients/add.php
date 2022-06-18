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

    <?php
   
    ?>
    <form method="POST" action="store.php">
        <h3>
            Add new patient
        </h3>
        <label>Name</label><br />
        <input type="text" name="name" /><br />
        <label>Email</label><br />
        <input type="text" name="email" /><br />

        <label>Phone Number</label><br />
        <input type="text" name="phoneNumber" /><br />
        <label>Address</label><br />
        <input type="text" name="address" /><br />

        <label>Medical Condition</label><br />
        <input type="text" name="medicalCondition" /><br />
        <label>Blood Type</label><br />
        <input type="text" name="bloodType" /><br />





        <br />
        <br />

        <button class="createBtn">Create</button>
    </form>
</body>

</html>