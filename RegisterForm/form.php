<?php
    $firstname = filter_input(INPUT_POST, 'firstName', FILTER_SANITIZE_STRING);
    $lastname  = filter_input(INPUT_POST, 'lastName', FILTER_SANITIZE_STRING);
    $text      = filter_input(INPUT_POST, 'userTEXT', FILTER_SANITIZE_STRING);
//    $file      = fopen('db.txt', 'a+');
//    fwrite($file, "Ad: $firstname\r\n<br>Soyad: $lastname\r\n<br>Text: $text\r\n<br><hr>");
//    echo file_get_contents("db.txt");

    $file = $_FILES['file'];
    $file_name = $file['name'];
    $file_type = $file['type'];
    $file_size = $file['size'];
    $file_tmp  = $file['tmp_name'];

    if (move_uploaded_file($file_tmp, 'assets/img/'.$file_name)) {
        echo "true";
    } else {
        echo "false";
    }