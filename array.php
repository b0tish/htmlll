<?php
$studentName = array("Dipesh","Loozala","Urjala","Saugat", "Abik");
echo "Length of array: " .count($studentName)."<br>";
echo "Student Name are : " .$studentName[0]. "," .$studentName[1]. "," .$studentName[2]. "," .$studentName[3]. "," .$studentName[4];
// echo "<br>Student Name are : $studentName[0] , $studentName[1] , $studentName[2] , $studentName[3] , $studentName[4]";
$arraylength = count($studentName);

for ($i=0;$i<$arraylength;$i++){
    echo "$studentName[$i] <br>";
}
?>