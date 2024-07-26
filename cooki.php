<?php
    setcookie("name","help");
    setcookie("id","101");
    if(isset($_COOKIE["name"]) && isset($_COOKIE["id"])){
        echo "Name: " .$_COOKIE["name"]. "<br>";
        echo "ID: " .$_COOKIE["id"]. "<br>";
    }else{
        echo "Sorry!! Cookies is not set";
    }
?>