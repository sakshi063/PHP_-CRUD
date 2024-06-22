<?php
include 'database.php';

$sql = "SELECT id, first_name, last_name, age, created_at FROM students";
$result = $conn->query($sql);

?>
<br><a href="creat.php">Add Student</a>

<!DOCTYPE html>
<html>
<head>
    <title>Student List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 15px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        a {
            text-decoration: none;
            color: blue;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
 <body> 

<h2>Student List</h2>

<?php
if ($result->num_rows > 0)
{
    echo "<table>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Age</th>
              
                <th>Actions</th>
            </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id"]. "</td>
                <td>" . $row["first_name"]. "</td>
                <td>" . $row["last_name"]. "</td>
                <td>" . $row["age"]. "</td>
                
                <td>
                    <a href='update.php?id=" . $row["id"]. "'>Update</a> |
                    <a href='delete.php?id=" . $row["id"]. "'>Delete</a>
                </td>
              </tr>";
    }
    echo "</table>";
} 
else 
{
    echo "0 results";
}

$conn->close();
?>

</body>
</html>
