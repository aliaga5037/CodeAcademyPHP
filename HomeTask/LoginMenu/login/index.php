<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="main">
    <div class="container">
        <div class="topic">
            <h1>Login</h1>
            <p class="empty">Please fill in a username and password</p>
            <p class="incorrect">Username or Password incorrect</p>
        </div>

        <form action="admin/check.php" method="post">
            <span>Username:</span>
            <input type="text" name="login">
            <span>Password:</span>
            <input type="password" name="pswd">
            <input type="submit" value="Login!">
        </form>
    </div>
    <div class="balloon">
        <div class="arrow"></div>
        <p>This is Demo</p>
        <p>Username<br>root</p>
        <p>Password<br>root</p>

    </div>

</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/main.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->

</body>
</html>