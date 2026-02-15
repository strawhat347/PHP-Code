<?php

echo "--------------------------------------------------------------------------------------------------------------------------------------------------<br>";
echo "Write a PHP script to demonstrate inheritance and method overriding in PHP. <br>";
echo "Name : Neal Baroliya <br>";
echo "Enrollment Number : 24082291002 <br>";
echo "--------------------------------------------------------------------------------------------------------------------------------------------------<br>";


    class Animal {
        public function sound() {

            echo "Animal makes a sound<br>";
        }
    }

    class Dog extends Animal {
        public function sound() {

            echo "Dog barks";
        }
    }

    $obj = new Dog();
    $obj->sound();
?>