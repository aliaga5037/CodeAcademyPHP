<?php
    session_start();
    unset($_SESSION["trueUser"]);
    unset($_SESSION["truePass"]);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
<form action="admin/check.php" method="post">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <input type="submit" value="Send">
</form>
</body>
</html>