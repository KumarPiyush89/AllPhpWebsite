<?php
$errmsg="";
$msg="";
if(isset($_POST['uid']))
{
    //validate user data from db
    try
    {

        $con=new PDO("mysql:host=localhost;dbname=sam","root","");
        $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $stmt=$con->prepare("select * from admins where uid=:uid and pwd=:pwd");
        $stmt->bindValue(":uid",$_POST['uid']);
        $stmt->bindValue(":pwd",$_POST['pwd']);

        $stmt->execute();
        $results=$stmt->fetchAll();

        if(count($results)==1)
        {
            session_start();
            $_SESSION['aid']=$results[0]['aid'];
            header("location:index.php");
        }
        else
        {
            $errmsg="Invalid user id or password";
        }
    }
    catch(Exception $ex)
    {
        $errmsg=$ex->getMessage();
    }
}
else if(isset($_GET['id']))
{
    if($_GET['id']==1)
    {
        $msg="You have logged out successfully.";
    }
    else if($_GET['id']==0)
    {
        $msg="You are already logged out.";
    }
}
?>
<!doctypr html>
<html>
    <head>
        <title>Login</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script>
            function hideMessage()
            {
                //alert("hello");
                $("#msgdisplay").fadeOut(5000);
            }
        </script>
    </head>
    <body onload="hideMessage();">
    <div style="height:40px;">
        <div id="msgdisplay">
        <?php
        if($errmsg!="")
        {
            echo '<p style="color:red">'.$errmsg.'</p>';
        }
        else if($msg!="")
        {
            echo '<p style="color:green">'.$msg.'</p>';   
        }
        ?>
        </div>
    </div>
        <h1>Login</h1>
        <form action="login.php" method="post">
            <label>User id:</label><input type="text" name="uid" required />
            <br/>
            <label>Password:</label><input type="password" name="pwd" required/>
            <br/>
            <input type="submit" value="Login"/>
        </form>

    </body>
</html>