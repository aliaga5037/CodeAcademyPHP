<?php

    class Person {
        protected $name = "Valeh";
    }

    class Human extends Person {
        public function getName() {
            return $this->name;
        }
    }

    $student = new Human;
    echo $student->getName();