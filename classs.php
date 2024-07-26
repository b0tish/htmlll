<?php
    class Student{
        var $name = "Alice";
        function display() {
            echo "<br>GoodBye World!!!";
        }
    }

    $obj = new Student();
    echo "My name is: " .$obj->name;
    echo $obj->display();
?>