<?php
    include 'dbconnection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body>
    <form action="insertData.php" method="POST">
        <label for="fname">First Name: </label>
        <input type="text" id="fname" name="fname" /><br /><br />
        <label for="lname">Last Name: </label>
        <input type="text" id="lname" name="lname" /><br /><br />
        <label for="address">Address: </label>
        <input type="text" id="address" name="address" /><br /><br />
        <label for="age">Age: </label>
        <input type="number" id="age" name="age" /><br /><br />
        <label for="nationality">Nationality: </label>
        <select name="nationality" id="nationality">
            <option disabled selected>Select nationality</option>
            <option value="Nepali">Nepali</option>
            <option value="Indian">Indian</option>
            <option value="Chinese">Chinese</option>
        </select><br>
        <input type="submit" value="Submit" name="submit">
        <button><a href="./view.php">View</a></button>
    </form>

    <?php
        if(isset($_POST['submit'])){
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $address = $_POST['address'];
            $age = $_POST['age'];
            $nationality = $_POST['nationality'];

            $query = "insert into tb_insertdata(firstname,lastname,address,age,nationality) values('$fname','$lname','$address','$age','$nationality');";
            $data = mysqli_query($con,$query);
    }
    ?>
</body>

</html>