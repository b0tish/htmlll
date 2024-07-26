<?php
    include 'dbconnection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>FirstName</th>
            <th>LastName</th>
            <th>Address</th>
            <th>Age</th>
            <th>Nationality</th>
        </tr>
        <?php
        $query = "select * from tb_insertdata;";
        $data = mysqli_query($con,$query);
        if ($data->num_rows > 0) {
          while($row = $data->fetch_assoc()) {
            echo "<tr><td>{$row['ID']}</td><td>{$row['firstname']}</td><td>{$row['lastname']}</td><td>{$row['address']}</td><td>{$row['age']}</td><td>{$row['nationality']}</td><td><a href='update.php?ID={$row['ID']}'>Update</a><td><a href='delete.php?ID={$row['ID']}'>Delete</a></td></tr>";
          }
        } else {
            echo "0 results";
        }   
    
    ?>
    </table>
</body>

</html>