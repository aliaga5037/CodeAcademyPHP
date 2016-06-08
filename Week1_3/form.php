<?php
/**
 * Created by PhpStorm.
 * User: Valeh
 * Date: 6.06.2016
 * Time: 18:01
 */

//$name = $_POST["myName"];
//$lastname = $_POST["surName"];
//echo $name . " " . $lastname . " beledeki xoş gelmedin!";

$country = $_GET["myCountry"];
if ($country == "aze") {
    echo "Bakı" . "<br>";
    echo "Lenkeran" . "<br>";
    echo "Gence" . "<br>";
} elseif ($country == "tr") {
    echo "İstanbul" . "<br>";
    echo "Çanakkale" . "<br>";
    echo "Samsun" . "<br>";
} elseif ($country == "ir") {
    echo "city1";
    echo "city2";
    echo "city3";
} else {
    echo "Mans listden birin seç";
}