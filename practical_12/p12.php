<?php

echo "--------------------------------------------------------------------------------------------------------------------------------------------------<br>";
echo "Write a PHP script to demonstrate the use of constructor and destructor in PHP. <br>";
echo "Name : Neal Baroliya <br>";
echo "Enrollment Number : 24082291002 <br>";
echo "--------------------------------------------------------------------------------------------------------------------------------------------------<br>";


    class Car {
        public $name;
    
        function __construct($carName) {
    
            $this->name = $carName;    
            echo "Constructor called. Car Name: " . $this->name . "<br>";
        }
        function __destruct() {

            echo "Destructor called. Object destroyed.";
        }
    }

    $obj = new Car("BMW");
?>