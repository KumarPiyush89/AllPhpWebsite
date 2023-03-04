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
    <title>View Data</title>
</head>
<body>
    <div class="container-fluid">
    <div class="row">
            <div class="col-sm-12">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="#">Kumar</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                        <a class="nav-link" href="LoginPage">Home <span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="LoginPage.html">Add New Student</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="navigation1.php">View All Student</a>
                        </li>
                    </ul>
                </div>
                </nav>
            </div>
        </div>
            </div>
        </div>
    </div>
<h1 class="text-center">All Record(s)</h1>
    <p class="text-center">
    <?php
    //Create connection
    $conn=new PDO("mysql:host=localhost;dbname=KumarPiyush;","root","");

    //prepare statement 
    $stmt=$conn->prepare("select * from ecoomerce");

    //Execute the statement
    $stmt->execute();

    $ecoomerce=$stmt->fetchAll();
    ?>
    

    <table class="table tabel-hover">
        <?php
    foreach($ecoomerce as $ecoomerce)
    {
        echo "<tr>
        <td>".$ecoomerce['name']."</td>
        <td>".$ecoomerce['email']."</td>
        <td>".$ecoomerce['uname']."</td>
        <td>".$ecoomerce['ps']."</td>
        <td>".$ecoomerce['rps']."</td>
       

        </tr>";
    }


        ?>
        
    </table></p>
    <a href="LoginPage.html"><button>Add another</button></a>
</body>
</html>