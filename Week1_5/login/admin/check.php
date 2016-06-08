<?php
/**
 * Created by PhpStorm.
 * User: Root
 * Date: 6/8/2016
 * Time: 4:25 AM
 */
session_start();

$userName = $_POST['username'];
$passWord = $_POST['password'];

if (isset($userName) and isset($passWord)) {
    if (empty($userName) or empty($passWord)) {
        echo 'Form kutularini tam doldurun';
    } else {
        if ($userName == 'admin' and $passWord = 'admin') {
            $_SESSION["trueUser"] = $userName;
            $_SESSION["truePass"] = $passWord;
            header("Location:admin.php");
        } else {
            header("Location:../index.php");
        }
    }
} else {
    echo 'Form degiskenlerini kontrol edin';
}