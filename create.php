<?php
include 'database.php';


//$_SERVER is a PHP superglobal variable that holds information about headers, paths, and script locations.
if ($_SERVER['REQUEST_METHOD'] == 'POST') //RM includes get,post,put,delete
{
    $first_name = $_POST['first_name'];//Data from the form is retrieved using PHP's $_POST superglobal
    $last_name = $_POST['last_name'];
    $age = $_POST['age'];

    $sql = "INSERT INTO students (first_name, last_name, age) VALUES ('$first_name', '$last_name', $age)";

    if ($conn->query($sql) === TRUE) 
    {
        echo "New student added successfully";
    } 
    else 
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
<br><a href="read.php">See Table</a>

<!DOCTYPE html>
<html>
<head>
    <title>Add New Student</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }
        form {
            width: 300px;
            margin: 0 auto;
        }
        input[type="text"], input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            box-sizing: border-box;
        }
        h2 {
            text-align: center;
        }
    </style>
</head>
<body>

<h2>Add New Student</h2>
<form method="post" action="">
    First Name: <input type="text" name="first_name" required><br><br>
    Last Name: <input type="text" name="last_name" required><br><br>
    Age: <input type="text" name="age" required><br><br>
    <input type="submit" value="Submit">
</form>

</body>
</html>

