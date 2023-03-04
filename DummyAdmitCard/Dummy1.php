<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All students details</title>
</head>
<body>
    <h1>All students details</h1>
    <?php
    /* create connection*/
    $conn=new PDO("mysql:host=localhost;dbname=dummyadmitcard;","root","");

    /*preapre statement*/
    $stmt=$conn->prepare("select * from admitcard");
    
    //Execute statement
    $stmt->execute();

    //Fetch record
    $admitcard=$stmt->fetchAll();
  ?>
  <table>
    <?php
    /*foreach($admitcard as $admitcard )
    {
        echo "<tr>
            <td>".$admitcard['name'].'</td>
            <td>'.$admitcard['fname']."</td>
            <td>".$admitcard['mname']."</td>
            <td>".$admitcard['code']."</td>
            <td>".$admitcard['roll']."</td>
            <td>".$admitcard['dateofbirth']."</td>
            </tr>";
    }*/
    foreach($admitcard as $admitcard )
    {
        echo"<tr>
                <td>".$admitcard['cname']."</td>
                <td>".$admitcard['sname']."</td>
                <td>".$admitcard['mname']."</td>
                <td>".$admitcard['fname']."</td>
                <td>".$admitcard['rollcode']."</td>
                <td>".$admitcard['rollno']."</td>
                <td>".$admitcard['dateofbirth']."</td>
                <td>".$admitcard['aadhar']."</td>
                <td>".$admitcard['rank']."</td>
                <td>".$admitcard['handicapt']."</td>
                <td>".$admitcard['stream']."</td>
                <td>".$admitcard['additional']."</td>
                <td>".$admitcard['gender']."</td>
                <td>".$admitcard['registration']."</td>
            </tr>";
    }
    ?>
    <a href="StudentRecord.html"><button>Add Another</button></a>
</table>
<div class="container-fluid"></div>
    <div class="row">
    
        <div class="col-sm-3">
        <?php    
        echo"<tr/><h1>
        <td>".$admitcard['cname']."</td>
        <td>".$admitcard['sname']."
        <td>".$admitcard['stream']."</td>
        <td>".$admitcard['additional']."</td>
        <td>".$admitcard['gender']."</td>
        <td>".$admitcard['registration']."</td>
        </td> </h1>
        "?>
        </div>
        <div class="col-sm-3">
        <?php    
        echo"
        <td>".$admitcard['mname']."</td>
        <td>".$admitcard['fname']."</td>
        "?>
        </div>
        <div class="col-sm-3">
        <?php    
        echo"
        <td>".$admitcard['rollcode']."</td>
        <td>".$admitcard['rollno']."</td>
        "?>
        </div>
        <div class="col-sm-3">
        <?php    
        echo"
        <td>".$admitcard['dateofbirth']."</td>
        <td>".$admitcard['aadhar']."</td>
        <td>".$admitcard['rank']."</td>
        <td>".$admitcard['handicapt']."</td>
        </tr> 
        "?>
        </div> 
    </div>
    
</div>
</body>
</html>