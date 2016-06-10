<?php

    class Foo {
        public function bar() {
            echo "foobar<br>";
            return $this;
        }
        public function baz() {
            echo "foobaz";
        }
    }

    $foo = new Foo;
    $foo->bar()->baz();