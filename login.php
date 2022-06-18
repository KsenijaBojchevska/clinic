<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <!--  <style>
    body,
    html {
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
        display: table;
    }

    body {
        display: table-cell;
        vertical-align: middle;
    }

    form {
        display: table;
        /* shrinks to fit content */
        margin: auto;
    }
    </style> -->
</head>

<body><?php
   
    ?><form method="POST" action="login.php" id="form_login">
        <h1>Login</h1><label>Username</label><br /><input type="text"
            name="username" /><br /><label>Password</label><br /><input type="password"
            name="password" /><br /><br /><button>Login</button>
    </form>

</body>

</html>