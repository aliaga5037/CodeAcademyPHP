<?php
    session_start();
    echo "Hello! " . $_SESSION["user"] . " welcome to dashboard";
    echo "<hr>";
    echo "<a href ='../index.php'>Exit</a>";
