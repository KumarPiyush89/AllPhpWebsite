<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
/>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css"/>
<title>Photography</title>
</head>
<body>
    <h1 class="text-center">All Record(s)</h1>
    <p class="text-center">
    <?php
    //Create connection
    $conn=new PDO("mysql:host=localhost;dbname=KumarPiyush;","root","");

    //prepare statement 
    $stmt=$conn->prepare("select * from photography");

    //Execute the statement
    $stmt->execute();

    $photography=$stmt->fetchAll();
    ?>
    

    <table class="text-center">
        <?php
    foreach($photography as $photography)
    {
        echo "<tr>
        <td>".$photography['name']."</td>
        <td>".$photography['email']."</td>
        <td>".$photography['gender']."</td>
        <td>".$photography['address']."</td>
        <td>".$photography['city']."</td>
       

        </tr>";
    }


        ?>
        
    </table></p>
    <a href="Registration.html"><button>Add another</button></a>
    <div class="container-fluid">
        <div class="row">
            
        </div>
        <div class="row">
            <div class="col-sm-4">
                
                <p>Hello piyush</p>
            </div>
            <div class="col-sm-4">
            <p>Hello piyush</p>
                
            </div>
            <div class="col-sm-4">
            <p>Hello piyush</p>
                
            </div>
        </div>
    </div>
</body>
</html>