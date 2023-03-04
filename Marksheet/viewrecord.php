<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>View All Records</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
            <?php include "Navigation.php";?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12"><br/><br/><h1 class="text-center">All Record(s)</h1></div>
        </div>
        <?php
            $conn=new PDO("mysql:host=localhost;dbname=KumarPiyush;","root","");

            // prepare statement
            $stmt=$conn->prepare("select * from marksheet");

            // execute statement
            $stmt->execute();
            $marksheet=$stmt->fetchAll();
            ?>
            <table class="table table-hover table-striped text-center table-bordered">
                <?php
                foreach($marksheet as $marksheet)
                {
                    echo '<tr>
                    <td>'.$marksheet['name']."</td>
                    <td>".$marksheet['fname']."</td>
                    <td>".$marksheet['mname']."</td>
                    <td>".$marksheet['class']."</td>
                    <td>".$marksheet['roll']."</td>
                    <td>".$marksheet['hin']."</td>
                    <td>".$marksheet['mat']."</td>
                    <td>".$marksheet['sci']."</td>
                    <td>".$marksheet['sst']."</td>
                    <td>".$marksheet['eng']."</td>
                    <td>".$marksheet['urd']."</td>
                
                        
                    <td class='btn btn-primary'><a href='updateform.php?id=".$marksheet['id']."'>Update</a></td><td></td>
                    <td class='btn btn-primary'><a href='deleterecord.php?id=".$marksheet['id']."'>Delete</a></td>
                    
                    </tr>";
                }
                ?>
                

            </table>
    </div>
</body>
</html>