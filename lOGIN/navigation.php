<?php
session_start();

if(!isset($_SESSION['aid']))
{
    header("location:login.php");
}

//user is already logged in
?>
<!doctype html>
<html>
    <head>
        <title>Home</title>
</head>
<body>
    <?php
     include "navigation.php";
    ?>
<h1>Home</h1>
</body>
</html>

