<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title> get form for update</title>
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
                    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

                    $stmt=$conn->prepare("select * from newfolder where id=:id");
                    $stmt->bindValue(':id',$_GET['id'], PDO::PARAM_INT);
                    $stmt->execute();
                    $rec=$stmt->fetch();
                    if(empty($rec))
                    {
                        echo"<h1>Invalid Id</h1>";
                    }
                    else
                    {
                        ?>
                        <form action="updaterec.php" method="get">
                            <div class="row">
                                <div class="col-sm-4"></div>
                                <div class="col-sm-4"><br/><br/><br/>
                                <input type="text" name="id" value="<?=$rec['id']?>" required/>
                                <input type="text" name="name" placeholder="Name" class="form-control" value="<?=$rec['name']?>" required /><br/>
                                <input type="text" name="fname" placeholder="Father's Name"class="form-control" value="<?=$rec['fname']?>" required/><br/>
                                <input type="text" name="mname" placeholder="Mother's Name"class="form-control" value="<?=$rec['mname']?>" required/><br/>
                                <table>
                                    <tr>
                                        <td><input type="submit" class="btn btn-primary"/></td>
                                    </tr>
                                </table>
                                </div>
                                <div class="col-sm-4"></div>
                            </div>
                        </form>
                        <?php
                    }

                }
                catch(Exception $e)
                {

                }
                ?>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>
</body>
</html>