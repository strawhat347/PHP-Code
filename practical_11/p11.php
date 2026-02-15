<?php

echo "--------------------------------------------------------------------------------------------------------------------------------------------------<br>";
echo "Write a PHP script to demonstrate the concept of class and object in PHP. <br>";
echo "Name : Neal Baroliya <br>";
echo "Enrollment Number : 24082291002 <br>";
echo "--------------------------------------------------------------------------------------------------------------------------------------------------<br>";


    class Student {
        public $name;
        public $age;
    
        function showDetails() {
            echo "Student Name: " . $this->name . "<br>";
            echo "Student Age: " . $this->age . "<br>";
        }
    }

    $stud1 = new Student();

    $stud1->name = "Rahul";
    $stud1->age = 20;

    $stud1->showDetails();
?>