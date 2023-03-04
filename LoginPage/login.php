<?php
$errMsg = "";
if(isset($_POST['userid']))
{
    try{
        $conn = new PDO("mysql:host=localhost;dbname=ricla", "root","");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $conn->prepare("select * from students where userid=:userid and pwd=:pwd");
        $stmt->bindValue(":userid", $_POST['userid']);
        $stmt->bindValue(":pwd", $_POST['pwd']);

        $stmt->execute();

        $user = $stmt->fetchAll();
        if(count($user)==1)
        {
            session_start();
            $_SESSION['uid'] = $user[0]['id'];
            header("location:index.php");
        }
        else
        {
            $errMsg = "Invalid user id or password";

        }

    }catch(Exception $ex)
    {
        $errMsg=$ex->getMessage();
    }
}
?>
<!doctype html>
<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <?php
        if($errMsg!="")
        {
            echo '<p style="color:red;text-align:center;">' . $errMsg . '</p>';
        }
        ?>
        <h1>Login</h1>
        <form action="login.php" method="post">
            <label>Enter user id</label><input type="text" name="userid" required/><br/>
            <label>Password:</label><input type="password" name="pwd" required/><br/>
            <input type="submit" value="Login"/>
        </form>
    </body>
</html>
