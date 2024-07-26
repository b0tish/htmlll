<?php
$host="localhost";
$user="root";
$pass = "";
$db="db_php_student";
$con=mysqli_connect($host,$user,$pass,$db);

if($con){
    echo "Database connnection created successfull.";
}
else{
    echo "Database not connected";
}
?>