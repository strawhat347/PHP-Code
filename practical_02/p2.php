<?php

echo "--------------------------------------------------------------------------------------------------------------------------------------------------<br>";
echo "Write a PHP script to demonstrate the use of constants and arithmetic / logical operators in PHP. <br>";
echo "Name : Neal Baroliya <br>";
echo "Enrollment Number : 24082291002 <br>";
echo "--------------------------------------------------------------------------------------------------------------------------------------------------<br>";


    const PI = 3.14156;
    define("YEAR", 1947);

    var_dump(PI);

    echo "<br>";
    var_dump(YEAR);

    $a = 10;
    $b = 5;

    $x = true;
    $y = false;

    echo "<br><br>";

    echo "'+' operator : 10 + 5 = " . $a + $b;
    echo "<br><br>";

    echo "'-' operator : 10 - 5 = " . $a - $b;
    echo "<br><br>";

    echo "'*' operator : 10 * 5 = " . $a * $b;
    echo "<br><br>";

    echo "'/' operator : 10 / 5 = " . $a / $b;
    echo "<br><br>";

    echo "'%' operator : 10 % 5 = " . $a % $b;
    echo "<br><br>";

    echo "Logical AND '&&' : true && false = " . ($a && $b);
    echo "<br><br>";
    
    echo "Logical OR '||' : true || false = " . ($x || $y);
    echo "<br><br>";

    echo "Logical NOR '!()' : !(true && false) = " . !($x && $y);
    echo "<br><br>";

?>