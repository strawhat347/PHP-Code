<?php
echo "-------------------------------------------------------------<br>";
echo "Write a PHP script to demonstrate Cookie Management in PHP including creating cookies, accessing cookie values, checking cookie existence, modifying cookies, and deleting cookies.
<br>";
echo "Name : Neal Baroliya<br>";
echo "En.no : 24082291002<br>";
echo "-------------------------------------------------------------<br><br>";

echo "<b>1. Creating Cookies</b><br>";
setcookie("username", "XYZ", time() + 864000); 
setcookie("course", "B.Tech", time() + 864000);
echo "Cookies created successfully.<br><br>";

echo "<b>2. Accessing Cookie Values</b><br>";
if(isset($_COOKIE["username"])) {
    echo "Username : " . $_COOKIE["username"] . "<br>";
}
if(isset($_COOKIE["course"])) {
    echo "Course : " . $_COOKIE["course"] . "<br>";
}
echo "<br>";

echo "<b>3. Checking Cookie Existence</b><br>";
if(isset($_COOKIE["username"])) {
    echo "Cookie 'username' exists.<br>";
} else {
    echo "Cookie does not exist.<br>";
}
echo "<br>";

echo "<b>4. Modifying Cookie</b><br>";
setcookie("course", "Cyber Security", time() + 864000);
echo "Cookie 'course' modified successfully.<br><br>";

echo "<b>5. Deleting Cookie</b><br>";
setcookie("username", "", time() - 864000);
echo "Cookie 'username' deleted successfully.<br>";

?>