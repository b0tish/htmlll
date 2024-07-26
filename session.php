<?php
session_start();
?>
<html>

<head>
    <title>PHP Session Example</title>
</head>

<body>
    <form action="session.php" method="post">
        Username:<input type="text" name="uname"><br><br>
        <input type="submit" name="btn_submit" value="Session">
    </form>

    <?php
        if(isset($_POST['btn_submit'])){
            $_SESSION["username"] = $_POST["uname"];
        }
    ?>
</body>

</html>