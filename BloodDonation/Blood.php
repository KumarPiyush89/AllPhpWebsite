<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="php.css"/>
    <title>Blood Donation</title>
</head>
<!--<body><img src="image_2022_09_01T17_59_25_854Z.png" style="width:100%; height:100%;" alt="" title="" />-->
    <div class="container-fluid">
        <div class="row">
        <h1>Blood Donation Successfully</h1>
            <div class="col-sm-4"><h2>Name:- <?= $_GET['first'];?><?= $_GET['second'];?></h2></div>
            <div class="col-sm-4"><h2>Date Of birth:- <?= $_GET['Date'];?></h2></div>
            <div class="col-sm-4"><h2>Gender:- <?=$_GET['gender'];?></h2></div>
        </div>
        <div class="row">
            <div class="col-sm-4"><h2>Occupation:- <?=$_GET['occupation'];?></h2></div>
            <div class="col-sm-4"><h2>Contact:- <?= $_GET['phone'];?></h2></div>
            <div class="col-sm-4"><h2>Email:- <?= $_GET['email'];?></h2></div>
        </div>
        <div class="row">
            <div class="col-sm-4"><h2>Address:- <?= $_GET['address'];?></h2></div>
            <div class="col-sm-4"><h2>Street Address:- <?= $_GET['saddress'];?></h2></div>
            <div class="col-sm-4"><h2>City:- <?= $_GET['city'];?></h2></div>
        </div>
        <div class="row">
            <div class="col-sm-4"><h2>State:- <?= $_GET['state'];?></h2></div>
            <div class="col-sm-4"><h2>Postal:- <?= $_GET['zip'];?></h2></div>
            <div class="col-sm-4"><h2>Weight:- <?= $_GET['weight'];?></h2></div>
        </div>
        <div class="row">
            <div class="col-sm-4"><h2>Age:- <?= $_GET['age'];?></h2></div>
            <div class="col-sm-4"><h2>HP:- <?= $_GET['hp'];?></h2></div>
            <div class="col-sm-4"><h2>BP:- <?= $_GET['bp'];?></h2></div>
        </div>
        <div class="row">
            <div class="col-sm-4"><h2>Temparature:- <?= $_GET['temp'];?></h2></div>
            <div class="col-sm-4"><h2>Pulse:- <?= $_GET['pulse'];?></h2></div>
            <div class="col-sm-4"><h2>Donated Previously:- <?= $_GET['donated'];?></h2></div>
        </div>
        <div class="row">
            <div class="col-sm-4"><h2>Last time donated blood:- <?= $_GET['last'];?></h2></div>
            <div class="col-sm-4"><h2>In the last six month you have Doing:- <?= $_GET['sixmonth'];?></h2></div>
            <div class="col-sm-4"><h2> You suffer:- <?= $_GET['diseases'];?> </h2></div>
        </div>
        <div class="row">
            <div class="col-sm-4"><h2> You are taking:- <?= $_GET['72hours'];?></h2></div>
            <div class="col-sm-4"></div>
            <div class="col-sm-4"></div>
        </div>
    </div>
   <!-- <img src="image_2022_09_01T17_59_51_934Z.png" style="height: 100%; width:100%;" alt="" title=""/>-->

</body>
</html>