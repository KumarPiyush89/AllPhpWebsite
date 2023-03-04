<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Records</title>
</head>
<body>
    <?php
        /* 1. Create connection*/
        try
        {
        //$conn=new PDO("mysql:host=localhost;dbname=dummyadmitcard","root","");
        $conn=new PDO("mysql:host=localhost;dbname=dummyadmitcard","root","");
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        /* 2. Create prepare statement*/
        $stmt=$conn->prepare("insert into admitcard(cname,sname,mname,fname,rollcode,rollno,aadhar,stream,additional,gender,registration) values(:cname,:sname,:mname,:fname,:rollcode,:rollno,:aadhar,:stream,:additional,:gender,:registration)");

        /*3. Bind values to statement*/
        $stmt->bindValue(':cname',$_GET['cname']);
        $stmt->bindValue(':sname',$_GET['sname']);
        $stmt->bindValue(':mname',$_GET['mname']);
        $stmt->bindValue(':fname',$_GET['fname']);
        $stmt->bindValue(':rollcode',$_GET['rollcode'],PDO::PARAM_INT);
        $stmt->bindValue(':rollno',$_GET['rollno'],PDO::PARAM_INT);
        //$stmt->bindValue(':dateofbirth',$_GET['dateofbirth'],PDO::PARAM_INT);
        $stmt->bindValue(':aadhar',$_GET['aadhar'],PDO::PARAM_INT);
        //$stmt->bindValue(':rank',$_GET['rank']);
        //$stmt->bindValue(':handicapt',$_GET['handicapt']);
        $stmt->bindValue(':stream',$_GET['stream']);
        $stmt->bindValue(':additional',$_GET['additional']);
        $stmt->bindValue(':gender',$_GET['gender']);
        $stmt->bindValue(':registration',$_GET['registration'],PDO::PARAM_INT);
        /* $stmt->bindValue("sssssssssiiiii",$cname,$name,$fname,$mname,$rollcode,$rollno,$dateofbirth,$aadhar,$rank,$handicapt,$stream,$additional,$gender,$registration);*/
        /*4. Execute statement*/
        $stmt->execute();
        echo "<h1>Person added Successfully.</h1>";
        }
        catch(Exception $ex )
        {
                echo "<h1>".$ex->getMessage()."</h1>";
        }
    ?>
    <a href="StudentRecord.html"><button>Add Another</button></a>
    <a href="Dummy1.php"><button>View All Person</button></a>
</body>
</html>