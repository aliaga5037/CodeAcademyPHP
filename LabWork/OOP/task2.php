<?php
class myClass {
    public function showMe($msgs) {
        foreach ($msgs as $msg) {
            echo $msg . " ";
        }
    }
}
$obj = new myClass;
$obj->showMe(["Salam", "Heci", "necesen"]);