<?php
echo "-------------------------------------------------------------<br>";
echo "Write a PHP script to demonstrate Exception and Error Handling in PHP using try, catch, throw and finally blocks.<br>";
echo "Name : Neal Baroliya<br>";
echo "En.no : 24082291002<br>";
echo "-------------------------------------------------------------<br><br>";

function checkNumber($num)
{
    try {
        if($num < 10) {
            throw new Exception("Number is less than 10. Exception thrown!");
        }
        echo "Number is valid: $num <br>";
    }

    catch(Exception $e) {
        echo "Exception Caught: " . $e->getMessage() . "<br>";
    }

    finally {
        echo "Finally block executed.<br>";
    }
}

checkNumber(5);
checkNumber(15);

?>