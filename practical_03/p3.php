<?php

echo "--------------------------------------------------------------------------------------------------------------------------------------------------<br>";
echo "Write a PHP script to demonstrate decision making in PHP using if–else and switch–case statements. <br>";
echo "Name : Neal Baroliya <br>";
echo "Enrollment Number : 24082291002 <br>";
echo "--------------------------------------------------------------------------------------------------------------------------------------------------<br>";

    $a = 21;

    if($a > 0)
        echo "$a is greater than 0.<br>";

    else
        echo "$a is less than 0.<br>";

    $day = 2;

    switch ($day) {

        case 1:
            echo "Monday";
            break;

        case 2:
            echo "Tuesday";
            break;

        case 3:
            echo "Wednesday";
            break;

        case 4:
            echo "Someday";
            break;

        default:
            echo "Noday";
            break;
    }


?>