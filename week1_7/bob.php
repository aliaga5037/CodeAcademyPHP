<?php

    class Person {
        public $name = "Jhon";
        public $surname = "Doe";
        public function getName() {
            return $this->name . " " . $this->surname . "<br>";
        }
    }

    class Bob extends Person {
        public $name = "Hecibala";
        public function secondName() {
            return $this->name . "<br>";
        }
    }

    $firstName = new Person;
    echo $firstName->getName();

    $second = new Bob;
    echo $second->secondName();