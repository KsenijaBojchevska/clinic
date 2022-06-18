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

    <form method="POST" action="login.php">
        <h1>Login</h1>
        <label>Email</label><br />
        <input type="text" name="email" /><br />
        <label>Password</label><br />
        <input type="password" name="password" /><br />
        <br />
        <button class="loginBtn">Login</button>
    </form>

    <form method="POST" action="register.php">
        <h1>Register</h1>
        <label>Email</label><br />
        <input type="text" name="email" /><br />
        <label>Password</label><br />
        <input type="password" name="password" /><br />
        <br />
        <button class="registerBtn">Register</button>
    </form>
</body>

</html>