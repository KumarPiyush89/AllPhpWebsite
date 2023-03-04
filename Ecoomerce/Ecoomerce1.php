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
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
/>
    <title>Ecoomerce</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12"><?php include'Navigation.php'; ?></div>
        </div><br/><br/><br/></div>
        </div>
    
    <?php
    // Create connection
    try
    {
    $conn=new PDO("mysql:host=localhost;dbname=KumarPiyush","root","");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // create prepare statement
    $stmt = $conn->prepare("insert into Ecoomerce1(name,contact,email,ps,rps) values(:name,:contact,:email,:ps,:rps)");

    //bind value to statement
    $stmt->bindValue(':name',$_GET['name']);
    $stmt->bindValue(':contact',$_GET['contact']);
    $stmt->bindValue(':email',$_GET['email']);
    $stmt->bindValue(':ps',$_GET['ps']);
    $stmt->bindValue(':rps',$_GET['rps']);

    // Execute the statement
    $stmt->execute();
    echo"<h1> </h1>";
    }
    catch(Exception $p)
    {
        echo"<h1>".$p->getMessage()."</h1>";
    }
    ?>
    <h1 class="text-center animate__animated animate__zoomInDown "  style=" margin-top:20%;">Data Added Successfully</h1>
    <button><a href="Ecoomerce2.php"> VIEW ALL RECOARD</a></button>
    </div>
</body>
</html>