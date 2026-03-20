<?php
echo "-------------------------------------------------------------<br>";
echo "Write a PHP script to demonstrate important File Handling and File System Functions including file opening, reading, writing, checking, deleting, renaming files and directory handling operations in PHP.
<br>";
echo "Name : Neal Baroliya<br>";
echo "En.no : 24082291002<br>";
echo "-------------------------------------------------------------<br><br>";

$filename = "example.txt";

echo "<b>1. Creating and Writing to File</b><br>";
$file = fopen($filename, "w");
fwrite($file, "Hello, this is a PHP File Handling Example.\n");
fwrite($file, "This file is created and written using PHP.");
fclose($file);
echo "File created and written successfully.<br><br>";

echo "<b>2. Checking if File Exists</b><br>";
if(file_exists($filename)) {
    echo "File exists.<br><br>";
} else {
    echo "File does not exist.<br><br>";
}

echo "<b>3. Reading File Content</b><br>";
$file = fopen($filename, "r");
while(!feof($file)) {
    echo fgets($file) . "<br>";
}
fclose($file);
echo "<br>";

echo "<b>4. Renaming File</b><br>";
$newname = "new_example.txt";
rename($filename, $newname);
echo "File renamed to $newname<br><br>";

echo "<b>5. Directory Handling</b><br>";
$dirname = "test_folder";

if(!is_dir($dirname)) {
    mkdir($dirname);
    echo "Directory created.<br>";
} else {
    echo "Directory already exists.<br>";
}

echo "<br><b>Files in Current Directory:</b><br>";
$files = scandir(".");
foreach($files as $f) {
    echo $f . "<br>";
}

echo "<br><b>6. Deleting File</b><br>";
if(file_exists($newname)) {
    unlink($newname);
    echo "File deleted successfully.<br>";
}

echo "<br><b>7. Removing Directory</b><br>";
if(is_dir($dirname)) {
    rmdir($dirname);
    echo "Directory removed successfully.<br>";
}

?>