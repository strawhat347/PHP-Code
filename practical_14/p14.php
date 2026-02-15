<?php

echo "--------------------------------------------------------------------------------------------------------------------------------------------------<br>";
echo "Write a PHP script to demonstrate multiple inheritance using traits. <br>";
echo "Name : Neal Baroliya <br>";
echo "Enrollment Number : 24082291002 <br>";
echo "--------------------------------------------------------------------------------------------------------------------------------------------------<br>";


    trait Logger {
        public function log() {
            
            echo "Logging data<br>";
        }
    }
    
    trait Auth {
        public function login() {
        
            echo "User logged in";
        }
    }
    class User {
        
        use Logger, Auth;
    }
    $obj = new User();
    $obj->log();
    $obj->login();
?>