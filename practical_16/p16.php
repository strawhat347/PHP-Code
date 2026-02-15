<?php

echo "--------------------------------------------------------------------------------------------------------------------------------------------------<br>";
echo "Write a PHP script to demonstrate encapsulation using private data members and public getter and setter methods. <br>";
echo "Name : Neal Baroliya <br>";
echo "Enrollment Number : 24082291002 <br>";
echo "--------------------------------------------------------------------------------------------------------------------------------------------------<br>";


    class Student {
        private $name;
        private $rollNo;

        public function setData($n, $r) {
   
            $this->name = $n;
            $this->rollNo = $r;
        }

        public function getData() {
        
            echo "Name: " . $this->name . "<br>";
            echo "Roll No: " . $this->rollNo;
        }
    }
    
    $obj = new Student();
    $obj->setData("Rahul", 101);
    $obj->getData();
?>