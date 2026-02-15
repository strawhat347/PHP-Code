<?php 

echo "--------------------------------------------------------------------------------------------------------------------------------------------------<br>";
echo "Write a PHP script to display a simple message using echo/print and demonstrate variables and data types using the var_dump() function. <br>";
echo "Name : Neal Baroliya <br>";
echo "Enrollment Number : 24082291002 <br>";
echo "--------------------------------------------------------------------------------------------------------------------------------------------------<br>";

    echo "Hello, world! <br>";
    print("Welcome to php <br><br>");  

    $Name = "XYZ";
    $Age = 21;
    $Height = 5.6;
    $isAlive = true;
    $Grade = 'C';

    $arr = [1,2,3,4,5];

    var_dump($Name);
    echo "<br><br>";
    
    var_dump($Age);
    echo "<br><br>";
    
    var_dump($Height);
    echo "<br><br>";
    
    var_dump($isAlive);
    echo "<br><br>";
    
    var_dump($Grade);
    echo "<br><br>";

    var_dump($arr);
    echo "<br><br>";
    
    
    
?>
