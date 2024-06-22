<?php
$servername = "localhost";
$username = "root";     // MySQL username
$password = "";         // MySQL password
$dbname = "php_crud";   // Database Name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname); //This line creates a new connection object using the mysqli class. 

// Check connection
if ($conn->connect_error)// -> is the object operator. It's used to access methods and properties of an object. 
{
    die("Connection failed: " . $conn->connect_error);//die() is a PHP function that prints a message and terminates the script
}
?>

<!-- connect_error: connect_error is a built-in property of the mysqli class in PHP. It stores the last error message reported by the MySQL server during a failed connection attempt. -->