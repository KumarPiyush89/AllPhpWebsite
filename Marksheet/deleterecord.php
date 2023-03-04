<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Delete</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12"><?php include "Navigation.php";?></div>
        </div>
        <div class="crow">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <?php
                try
                {
                    $conn=new PDO("mysql:host=localhost;dbname=KumarPiyush","root","");
                    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

                    $stmt=$conn->prepare("delete from marksheet where id=:id");
                    //$stmt->bindValue(':id',$_GET['id'],PDO::PARAM_INT);
                    //$stmt->bindValue(':name',$_GET['name']);
                    //$stmt->bindValue(':fname',$_GET['fname']);
                    //$stmt->bindValue(':mname',$_GET['mname']);
                    //$stmt->bindValue(':class',$_GET['class']);
                    //$stmt->bindValue(':roll',$_GET['roll']);
                    //$stmt->bindValue(':hin',$_GET['hin']);
                    //$stmt->bindValue(':mat',$_GET['mat']);
                    //$stmt->bindValue(':sci',$_GET['sci']);
                    //$stmt->bindValue(':sst',$_GET['sst']);
                    //$stmt->bindValue(':eng',$_GET['eng']);
                    //$stmt->bindValue(':urd',$_GET['urd']);

                    // execute Statement
                    $stmt->execute();
                    ?>
                    <script>
                        function myFunction() {
                            alert("Are you sure you want to delete this record ?");
                        }
                    </script>
                    <?php
                    echo '<h1 class="animate__animated animate__zoomOutDown animate__repeat-1 animate__delay-2s text-center text-light bg-success"><br/><br/><br/><br/><br/>Record Delete Successfully.&#128526;<br/><br/><br/><br/><br/><br/></h1>';    
                    
                }
                catch(Exception $e)
                {
                    echo '<h1 class="text-center text-danger">'.$ex->getMessage()."</h1>";
                }
                ?>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>
</body>
</html>