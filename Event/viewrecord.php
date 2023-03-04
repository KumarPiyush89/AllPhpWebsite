<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <title>ViewRecord</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12"><?php include "navigation1.php";?></div>
        </div>
        <div class="row"><br/><br/>
            <div class="col-sm-12">
    <?php
    //connection
    $conn=new PDO("mysql:host =localhost;dbname=KumarPiyush;","root","");

    $stmt=$conn->prepare("select * from event");

    $stmt->execute();
    $event=$stmt->fetchAll();
    ?>
    <table class="text-center table table-hover"><br/><br/><br/>
        <?php

        foreach ($event as $event)
        {
            echo"<tr>
            <td>".$event['name']."</td>
            <td>".$event['email']."</td>
            <td>".$event['contact']."</td>
            <td>".$event['message']."</td>


            </tr>";
        }
        ?>
    </table>
    </div>
        </div>
    </div>
</body>
</html>