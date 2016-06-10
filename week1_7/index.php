<?php

    class Person {

        protected function getName() {
            return "Mans";
        }
    }

    class Bob extends Person {
        public function whatIsMyName() {
            return $this->getName();
        }
    }

    $p = new Person;
    echo $p->getName();

    $b = new Bob;
    echo $b->whatIsMyName();