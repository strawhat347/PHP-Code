<?php
echo "--------------------------------------------------------------------------------------------------------------------------------------------------<br>";
echo "Write a PHP script using switch-case to implement a simple menu-driven or calculator system. <br>";
echo "Name : Neal Baroliya <br>";
echo "Enrollment Number : 24082291002 <br>";
echo "--------------------------------------------------------------------------------------------------------------------------------------------------<br>";

    $a = 10;
    $b = 5;

    $choice = 2;

    switch($choice){

        case 1:
            echo "$a + $b = " . $a + $b;
            break;
            
        case 2:
            echo "$a - $b = ". $a - $b;
            break;
            
        case 3:
            echo "$a * $b = " . $a * $b;
            break;
            
        case 4:
            echo "$a / $b = " . $a / $b;
            break;
        
        default:
            echo "Invalid Choice";
            break;
    }   

?>