<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
        ::-webkit-scrollbar
        {
            width: 20px;
        }
        ::-webkit-scrollbar-track{
            background: white;
            
        }
        ::-webkit-scrollbar-thumb
        {
            background: red;
        }
    </style>
    <title>View All Record</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12"><?php include "Navigation.php";?><br/><br/><br/></div>
        </div>
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
                <h1 class="text-center text-danger">ALL RECORD</h1>
                <h1 class="text-center text-denger" style=" height:600px; overflow:scroll; ">
                <?php
                //connection
                $conn=new PDO("mysql:host = localhost; dbname=KumarPiyush;" , "root" , "");
                
                $stmt=$conn->prepare("select * from blooddonation");

                $stmt->execute();
                $store=$stmt->fetchAll();
                ?>
                <table class="table table-hover table-striped text-center table-bordered">
                    <?php
                    
                    foreach ($blooddonation as $blooddonation)
                    {
                        echo'<tr>
                        <td class="text-light bg-danger">'.$blooddonation['ID']."</td>
                        <td class='text-light bg-danger'>".$blooddonation['name']."</td>
                        <td class='text-light bg-danger'>".$blooddonation['bgroup']."</td>
                        <td class='text-light bg-danger'>".$blooddonation['age']."</td>
                        <td class='text-light bg-danger'>".$blooddonation['weight']."</td>
                        <td class='text-light bg-danger'>".$blooddonation['last']."</td>
                        <td class='text-light bg-danger'>".$blooddonation['number']."</td>
                        <td class='text-light bg-danger'>".$blooddonation['address']."</td>
                        <td class='btn btn-primary'><a href='updaterecord.php?id=".$blooddonation['id']."'>Update</a></td><td></td>
                        <td class='btn btn-primary'><a href='deleterecord.php?id=".$marksheet['id']."'>Delete</a></td>
                        </tr>";
                    }
                    
                    
                    ?>
                </table>
            </h1>
            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>    
</body>
</html>