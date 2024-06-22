<?php
include 'database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $id = $_POST['id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $age = $_POST['age'];

    $sql = "UPDATE students SET first_name='$first_name', last_name='$last_name', age=$age WHERE id=$id";

    if ($conn->query($sql) === TRUE) 
    {
        echo "Student updated successfully";
    }
    else 
    {
        echo "Error updating student: " . $conn->error;
    }

    $conn->close();
} 
else 
{
    $id = $_GET['id'];
    $sql = "SELECT id, first_name, last_name, age FROM students WHERE id=$id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0)
    {
        $row = $result->fetch_assoc();
    } 
    else 
    {
        echo "No student found";
    }
}
?>
<br><a href="read.php">Back to the table</a>

<!DOCTYPE html>
<html>
<head>
    <title>Update Student</title>
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

<h2>Update Student</h2>
<form method="post" action="">
  <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
  First Name: <input type="text" name="first_name" value="<?php echo $row['first_name']; ?>" required><br><br>
  Last Name: <input type="text" name="last_name" value="<?php echo $row['last_name']; ?>" required><br><br>
  Age: <input type="text" name="age" value="<?php echo $row['age']; ?>" required><br><br>
  <input type="submit" value="Update">
</form>

</body>
</html>
