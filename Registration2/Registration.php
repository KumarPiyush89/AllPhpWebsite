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
    <title>Document</title>
</head>
<body style="background-color: black; color:red; text-align:center; margin-top:20%;">
    <?php
        /* Create Conneection*/
        try{
        $conn=new PDO("mysql:host=localhost;dbname=KumarPiyush","root","");
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        /* Create prepare statement*/
        $stmt=$conn->prepare("insert into photography(name,email,gender,address,city) values(:name,:email,:gender,:address,:city)");
        // Bind value to statements
        $stmt->bindValue(':name',$_GET['name']);
        $stmt->bindValue(':email',$_GET['email']);
        $stmt->bindValue(':gender',$_GET['gender']);
        $stmt->bindValue(':address',$_GET['address']);
        $stmt->bindValue(':city',$_GET['city']);
        //$stmt->bindValue(':DateOfBirth',$_GET['DateOfBirth']);

        // Execute the statement
        $stmt->execute();
        echo "<h1 ></h1>";
        }
        catch(Exception $ex)
        {
            echo "<h1>".$ex->getMessage()."</h1>";
        }
    ?>
    <h1 class="animate__animated animate__zoomIn">Person added successfully</h1>
    <a href="Registration.html"><button>Add Another</button></a>
    <a href="Photography.php"><button>View all records</button></a>
    
</body>
</html>