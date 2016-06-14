<?php
    $choose = fopen("text.txt", "a");
    fwrite($choose, "bu yeni textdir.<br> \r\n");
    echo file_get_contents("text.txt");