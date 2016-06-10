<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style>
        input{
            display:block;
            padding:5px 10px;
            margin:5px;
        }
        input[type="radio"]{
            display:inline-block;
        }
        p{
            background:gray;
        }
    </style>
</head>
<body>
<form action="" method="post">
    <input type="number" name="num01">
    <input type="number" name="num02">
    <span>+</span><input type="radio" name="hesabla" value="+">
    <span>-</span><input type="radio" name="hesabla" value="-">
    <span>*</span><input type="radio" name="hesabla" value="*">
    <span>/</span><input type="radio" name="hesabla" value="/">
    <input type="submit" value="Hesabla">

</form>
<?php
    class Calc {
        public $num1, $num2;
        public function __construct($arg1, $arg2) {
            $this->num1 = $arg1;
            $this->num2 = $arg2;
        }

        public function addition() {
            return $this->num1 + $this->num2;
        }
        public function minus() {
            return $this->num1 - $this->num2;
        }
        public function multiply() {
            return $this->num1 * $this->num2;
        }
        public function division() {
            if ($this->num1 > 0) {
                return $this->num1 / $this->num2;
            } else {
                echo "Zero division error";
            }
        }
    }
    $num1 = filter_input(INPUT_POST, 'num01');
    $num2 = filter_input(INPUT_POST, 'num02');
    $event = filter_input(INPUT_POST, 'hesabla');

    if (isset($num1) and isset($num2)) {
        if (is_null($num1) or is_null($num2)) {
            echo "Check your form..";
        } else {
            $calc = new Calc($num1, $num2);
            if ($event == "+") {
                $res = $calc->addition();
            } elseif ($event == "-") {
                $res = $calc->minus();
            } elseif ($event == "*") {
                $res = $calc->multiply();
            } elseif ($event == "/") {
                $res = $calc->division();
            }
        }
    } else {
        if (isset($event)) {
            echo "Something went wrong...";
        }
    }
?>
<p>Result: <?php
    if (isset($res)) {
        echo $res;
    } else {
        echo "Your result will be here";
    }


    ?></p>

</body>
</html>