<?php
    class myClass {
        public $login;
        protected $pass;
        public function __construct()
        {
            echo "The first our constructor work in <b>" . __CLASS__ . "</b><br>";
        }
        public function addUser($user, $pass) {
            $this->login = $user;
            $this->pass = $pass;
        }
    }

    class userPanel extends myClass {
        public function showUser() {
            echo "Username: " . $this->login . "<br>";
            echo "Password: " . $this->pass . "<br>"; //error
        }
    }

    $panel = new userPanel;
    $panel->addUser("root", "userpassword");
    $panel->showUser();