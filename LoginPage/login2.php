<?php
session_start();
if(!isset($_SESSION['uid']))
{
    //redirect to login page
    header("location:login.php");
}
//fetch data from table
$user = null;
$errmsg = "";
try{
    $conn = new PDO("mysql:host=localhost;dbname=ricla", "root","");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $conn->prepare("select * from students where id=:id");
        $stmt->bindValue(":id", $_SESSION['uid']);
        
        $stmt->execute();

        $user = $stmt->fetchAll();

}catch(Exception $ex)
{
    $errmsg = $ex->getMessage();
}

?>
<!doctype html>
<html>
<head><title>Home</title></head>
<body>
    <?php
    if($errmsg!="")
    {
        echo '<p style="color:red;text-align:center;">' . $errMsg . '</p>';
    }
    ?>
    <h1>Hello <?=$user['name']?>
</body>
</html>