<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SecondPage</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12"><?php include "Navigation.php";?></div>
        </div><br/><hr/>
        <?php
        try{
            // Create Connection
            $conn=new PDO("mysql:host=localhost;dbname=KumarPiyush","root","");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // Create Prepare Statement
            $stmt = $conn->prepare("insert into newfolder(name,fname,mname) values(:name,:fname,:mname)");
            //BInd values to statement
            $stmt->bindValue(':name',$_GET['name']);
            $stmt->bindValue(':fname',$_GET['fname']);
            $stmt->bindValue(':mname',$_GET['mname']);

            //Eecute The Statement
            $stmt->execute();
            echo "<h1>Record Added Successfully</h1>";

        }
        catch(Exception $e)
        {
            echo"<h1>".$e->getMessage()."</h1>";
        }
        ?>
        <a href="thirdpage.php"> View All record</a>
    </div>
</body>
</html>