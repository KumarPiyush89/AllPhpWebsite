<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <title>UPDATE ITEM</title>
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

                        $stmt=$conn->prepare("select * from store where id=:id");
                        $stmt->bindValue(':id',$_GET['id'], PDO::PARAM_INT);
                        $stmt->execute();
                        $rec=$stmt->fetch();
                        if(empty($rec))
                        {
                            //echo'<h1 class="text-center text-danger animate__animated animate__backInDown" style="margin-top:50%;">Invalid Id</h1>';
                            echo'<div class="row"><div class="col-sm-12"><h1 class="animate__animated animate__zoomOutDown animate__repeat-1 animate__delay-2s text-center text-light bg-danger" style="margin-top:60%;">INVALID ID INVALID ID  INVALID </h1></div></div>';
                        }
                        else
                        {
                            ?>
                            <form action="UpdatedItemrecord.php" method="get">
                                
                                    
                                <div class="row">
                                    <div class="col-sm-4 bg-light"></div>
                                    <div class="col-sm-8"><br/><br/><label>ID</label>
                                <div class="input-field">
                                    <input type="number" name="id" class="form-control" value="<?=$rec['id']?>" required/><br/>
                                </div>        
                                <div class="input-field">
                                    <input type="text" placeholder="Name" name="iname" class="form-control" value="<?=$rec['iname']?>" required/><br/>
                                </div>
                                <div class="input-field">
                                    <input type="text" placeholder="Meseurment unite" class="form-control" name="munite" value="<?=$rec['munite']?>" required/><br/>
                                </div>
                                <div class="input-field">
                                    <input type="text" placeholder="MRP" class="form-control" name="mrp" value="<?=$rec['mrp']?>" required/><br/>
                                </div>
                                <div class="input-field">
                                    <input type="text" placeholder="Seling Price" name="sprice" class="form-control" value="<?=$rec['sprice']?>" required/><br/>
                                </div>
                                
                                <div class="input-field">
                                    <table>
                                        <tr>
                                            <td><input type="reset" class="btn btn-primary"/></td>
                                            <td><input type="submit" class="btn btn-primary" value="Update"/></td>
                                        </tr>
                                    </table>
                                    <!--<input type="reset" class="btn btn-primary"/><input type="submit" class="btn btn-primary" value="Update"/>-->
                                </div>
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
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>
</body>
</html>