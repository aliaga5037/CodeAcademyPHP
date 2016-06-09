<?php
/**
 * Created by PhpStorm.
 * User: Root
 * Date: 6/8/2016
 * Time: 4:25 AM
 */
session_start(); // sandığı açırıq 

$userName = $_POST['userName'];
$passWord = $_POST['pswd'];

if (isset($userName) and isset($passWord)) {
    if (empty($userName) or empty($passWord)) {
        echo 'Form kutularini tam doldurun';
    } else {
        if ($userName == 'login' and $passWord = 'login') {
            $_SESSION["trueUser"] = $userName;
            $_SESSION["truePass"] = $passWord;
            header("Location:login.php");
        } else {
            header("Location:../index.php");
        }
    }
} else {
    echo 'Form degiskenlerini kontrol edin';
}