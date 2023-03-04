<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Update all records shown</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12"><?php include "Navigation.php";?></div>
        </div>
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <?php
                try
                {
                    $conn=new PDO("mysql:host=localhost;dbname=KumarPiyush","root","");
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    $stmt=$conn->prepare("update newfolder set name=:name,fname=:fname,mname=:mname where id=:id");
                    $stmt->bindValue(':id',$_GET['id'], PDO::PARAM_INT);
                    $stmt->bindValue(':name',$_GET['name']);
                    $stmt->bindValue(':fname',$_GET['fname']);
                    $stmt->bindValue(':mname',$_GET['mname']);
                    $stmt->execute();
                    echo '<h1 class="text-center text-info"><br/><br/><br/> Record Update Successfully.</h1>';
                }
                catch (Exception $e)
                {
                    echo'<h1 class="text-center text-danger">'.$e->getMessage()."</h1>";
                }
                ?>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>
</body>
</html>