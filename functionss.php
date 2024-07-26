<?php
    function getName(){
        echo "Hello this is the name i gave";
    }

    getName();


    function passing($name){
        echo "<br>$name<br>";
    }

    passing("Parse error: syntax error, unexpected '<' in C:\xampp\htdocs\phpprogram\\functionss.php on line 13");


    function add($a,$b){
        echo "Sum = " .($a+$b);
    }

    add(5,6);

    function twonames($name1,$name2){
        echo "<br>Now his name is: " .$name1. ". And his name is: " .$name2;
    }

    twonames("Dipesh","Alice");

    function setdefault($age = 18){
        echo "<br> Your age is: " .$age;
    }

    setdefault();
    setdefault(23);
?>