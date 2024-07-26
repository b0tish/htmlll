<?php
    include 'dbconnection.php';
?>

<?php
    $id=$_GET['ID'];
    $query="delete from tb_insertdata where id={$id};";
    $data=mysqli_query($con,$query);

    
?>