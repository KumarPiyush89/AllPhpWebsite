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
    <title>Form</title>
</head>
<body>
    <h1 class="text-center">Your Progress </h1>
    <?php
    $total=hindi+english+math+science+urdu;
    $div=$total/5;
    if(hindi>=30&&english>=30&&science>=30&&marh>=30&&urdu>=30)
    {
        if($total>=60)
        {
            echo 'first Division';
        } else if($total>=45)
        {
            echo 'second Division';
        }
        echo 'third Division';
    }
    echo 'sorry you have not qualifying';
    ?>
    <h1>total=<?php echo $_POST['$total'] ?></h1>
</body>
</html>