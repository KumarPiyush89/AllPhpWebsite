<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <title>View_Item's</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
            <?php include "Navigation.php";?><br/><br/><br/>
            </div>
        </div>
        <!--<div class="row">
            <div class="col-sm-2 text-center text-nowrap"style="width: 8rem;"><h3>ID</h3></div>
            <div class="col-sm-2"><h3>ITEM NAME</h3></div>
            <div class="col-sm-2 text-end"><h3>M UNITE</h3></div>
            <div class="col-sm-2"><h3>MRP</h3></div>
            <div class="col-sm-2"><h3>S PRICE</h3></div>
            <div class="col-sm-2 text-center"><h3>UPDATE</h3></div>
        </div>-->
        <table class="table table-hover table-striped text-center table-bordered">
            <tr>
                <td>ID</td>
                <td>ITEM NAME</td>
                <td>MESURMENT Unite</td>
                <td>MRP</td>
                <td class="text-center">SELING PRICE</td>
                <td class="text-start">UPDATE</td>

            </tr>
        </table>
        <div class="row">
        <div class="col-sm-12">

        <?php
    //connection
    $conn=new PDO("mysql:host =localhost;dbname=KumarPiyush;","root","");

    $stmt=$conn->prepare("select * from store");

    $stmt->execute();
    $store=$stmt->fetchAll();
    ?>
    <table class="table table-hover table-striped text-center table-bordered">
        <?php

        foreach ($store as $store)
        {
            echo"<tr>
            <td class='text-light bg-danger'>".$store['id']."</td>
            <td class='text-info '><h1>".$store['iname']."</h1></td>
            <td>".$store['munite']."</td>
            <td>".$store['mrp']."</td>
            <td class='bg-success text-light'>".$store['sprice']."</td>
            <td class='btn btn-primary'><a href='updaterecord.php?id=".$store['id']."'>Update</a></td><td></td>
            

            </tr>";
        }
        ?>
    </table>
        </div>
        </div>
    </div>
</body>
</html>