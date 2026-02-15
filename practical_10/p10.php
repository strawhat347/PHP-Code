<?php
echo "--------------------------------------------------------------------------------------------------------------------------------------------------<br>";
echo "Write a PHP script to create associative arrays and apply sorting functions such as asort()and ksort(). <br>";
echo "Name : Neal Baroliya <br>";
echo "Enrollment Number : 24082291002 <br>";
echo "--------------------------------------------------------------------------------------------------------------------------------------------------<br>";

    $students = array(
    "Rahul" => 85,
    "Amit" => 72,
    "Suresh"=> 90,
    "Neha" => 78
    );
    
    echo "<h3>Original Associative Array</h3>";
    foreach ($students as $name => $marks) {
        echo $name . " : " . $marks . "<br>";
    }

    echo "<br>";

    asort($students);
    
    echo "<h3>Array after asort() (Sort by Values)</h3>";
    foreach ($students as $name => $marks) {
        echo $name . " : " . $marks . "<br>";
    }

    echo "<br>";

    ksort($students);
    
    echo "<h3>Array after ksort() (Sort by Keys)</h3>";
    foreach ($students as $name => $marks) {
        echo $name . " : " . $marks . "<br>";
    }
?>
