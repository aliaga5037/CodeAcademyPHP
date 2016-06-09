<?php
    session_start();
    $username = filter_input(INPUT_POST, "login", FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, "pswd", FILTER_SANITIZE_STRING);

    if (isset($username) and isset($password)) {
        if (empty($username) or empty($password)) {
            echo "Check your form datas.";
        } else {
            if ($username == "root" and $password == "root") {
                $_SESSION["user"] = $username;
                $_SESSION["pass"] = $password;
                header("Location:admin.php");
            } else {
                header("Location: ../login.php");
            }
        }
    } else {
        echo "Something went wrong";
    }