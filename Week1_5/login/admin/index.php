<?php
/**
 * Created by PhpStorm.
 * User: Root
 * Date: 6/8/2016
 * Time: 4:14 AM
 */

session_start();

if (isset($_SESSION["trueUser"])) {
    echo "this is dashboard " . $_SESSION["trueUser"];
    echo "<hr>";
    echo "Brat  <a href=\"../index.php\">çıx çöle</a>";
} else {
    echo "mans senin bölgen deyil";
}
