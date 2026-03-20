<?php
echo "-------------------------------------------------------------<br>";
echo "Write a PHP script to demonstrate Session Management in PHP including creating sessions, accessing session variables, checking session existence, modifying session values, and destroying sessions.
<br>";
echo "Name : Neal Baroliya<br>";
echo "En.no : 24082291002<br>";
echo "-------------------------------------------------------------<br><br>";

session_start();
echo "<b>1. Session Started</b><br>";

$_SESSION["username"] = "XYZ";
$_SESSION["course"] = "B.TECH";
echo "Session variables created.<br>";
echo "Username : " . $_SESSION["username"] . "<br>";
echo "Course : " . $_SESSION["course"] . "<br><br>";

echo "<b>3. Accessing Session Variables</b><br>";
echo "Welcome " . $_SESSION["username"] . "<br>";
echo "Your course is " . $_SESSION["course"] . "<br><br>";

echo "<b>4. Checking if Session Exists</b><br>";
if(isset($_SESSION["username"])) {
    echo "Session 'username' exists.<br><br>";
} else {
    echo "Session does not exist.<br><br>";
}

echo "<b>5. Modifying Session Variable</b><br>";
$_SESSION["course"] = "Cyber Security";
echo "Updated Course : " . $_SESSION["course"] . "<br><br>";

echo "<b>6. Destroying Session</b><br>";
session_destroy();
echo "Session destroyed successfully.<br>";

?>