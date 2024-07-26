<?php include 'dbConnection.php'; ?>
<?php
    $id=$_GET['ID'];
    $query="select * from tb_insertdata where id='$id'";
    $data=mysqli_query($con,$query);
    $row=mysqli_fetch_array($data);
?>

<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>FirstName</td>
                <td><input type="text" value="<?php echo $row['firstname'] ?>" name="fname"></td>
            </tr>
            <tr>
                <td>LastName</td>
                <td><input type="text" value="<?php echo $row['lastname'] ?>" name="lname"></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><input type="text" value="<?php echo $row['address'] ?>" name="address"></td>
            </tr>
            <tr>
                <td>Age</td>
                <td><input type="text" value="<?php echo $row['age'] ?>" name="age"></td>
            </tr>
            <tr>
                <td>Nationality:</td>
                <td>
                    <select name="nationality" size="1" required>
                        <option selected value="Select nationality">Select nationality</option>
                        <option value="Nepal">Nepal</option>
                        <option value="Indian">Indian</option>
                        <option value="US">US</option>
                        <option value="UK">UK</option>
                        <option value="UAE">UAE</option>
                        <option value="Others">Others</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td><input type="submit" value="Update" name="btn_update"></td>
                <td><button><a href="view.php">Back</a></button></td>
            </tr>
        </table>
    </form>
</body>
<?php
if(isset($_POST['btn_update'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $address=$_POST['address'];
    $age=$_POST['age'];
    $nationality=$_POST['nationality'];
    $query="update tb_insertdata set firstname='$fname',lastname='$lname',address='$address',age='$age',nationality='$nationality' where id='$id'";
    $data=mysqli_query($con,$query);

    if($data){
        ?>
<script>
alert("Data has been Updated Successfully");
window.open("http://localhost/phpCRUDOperation/view.php", "_self");
</script>
<?php
    }
    else
    {
        ?>
<script>
alert("Please Try Again!!!");
</script>
<?php
    }

}
?>