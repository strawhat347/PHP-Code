<?php
echo "--------------------------------------------------------------------------------------------------------------------------------------------------<br>";
echo "Write a PHP script to demonstrate the use of while, do-while and foreach loops. <br>";
echo "Name : Neal Baroliya <br>";
echo "Enrollment Number : 24082291002 <br>";
echo "--------------------------------------------------------------------------------------------------------------------------------------------------<br>";

    $i = 5;
    $j = 1;
    $x = 1;
    echo "while : <br><br>";

    while($i <= 50){

        echo "5 * $j = " . 5 * $j;
        echo "<br>";

        $i+=5;
        $j++;
    }

    echo "Do while : <br><br>";

    do{
        echo "this is do while...";
        echo "<br>";

        echo "it ran only one time...";
        echo "<br>";
    
    }while(false);

    echo "<br>";
    echo "For each : <br><br>";

    $arr = [1,2,3,4,5];

    foreach($arr as $a){

        echo "$a ";
    }



?>