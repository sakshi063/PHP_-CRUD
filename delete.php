<?php
include 'database.php';

$id = $_GET['id'];

$sql = "DELETE FROM students WHERE id=$id";

if ($conn->query($sql) === TRUE) 
{
    echo "Student removed successfully";
} 
else 
{
    echo "Error removing student: " . $conn->error;
}

$conn->close();
?>

<br><a href="read.php">Back to the table</a>
