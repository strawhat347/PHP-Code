<?php
echo "--------------------------------------------------------------------------------------------------------------------------------------------------<br>";
echo "Write a PHP script to demonstrate user-defined functions with parameters and return values. <br>";
echo "Name : Neal Baroliya <br>";
echo "Enrollment Number : 24082291002 <br>";
echo "--------------------------------------------------------------------------------------------------------------------------------------------------<br>";

    function addNumbers($a, $b) {
        $sum = $a + $b;
        return $sum;
    }

    $result = addNumbers(10, 20);
    echo "The sum of 10 and 20 is: " . $result . "<br>";

    function greet($name) {
        return "Hello, " . $name . "!";
    }

    echo greet("XYZ");
?>